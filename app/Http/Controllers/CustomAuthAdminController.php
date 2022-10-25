<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Session;


class CustomAuthAdminController extends Controller
{
    //
    public function adminLogin()
    {
        return view ("auth.adminLogin");

    }

    public function adminRegistration()
    {
        return view ("auth.adminRegistration");

    }

    public function registerAdmin(Request $request)
        {
           $request-> validate([
            'adminNumber'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'password'=>'required',
            'image'=>''
           ]);
           $admin = new Admin();
           $admin ->adminNumber = $request->adminNumber;
           $admin ->firstname = $request->firstname;
           $admin ->lastname = $request->lastname;
           $admin ->email = $request->email;
           $admin ->password = Hash::make($request->password);
           $admin ->photo = $request->image;
           $res = $admin ->save();

           if($res){
            return back()->with('success','Successfully registered');
            }
       else{
            return back()->with('fail','Failed registration');
            }
        }

        public function loginAdmin(Request $request){
            $request-> validate([
            'password'=>'required|min:5|max:12',]);

            $admin = Admin::where('adminNumber','=', $request->adminNumber) ->first();
            if($admin )
                {if (Hash::check($request->password, $admin->password))
            {
                $request->session()->put('loginId', $admin ->id);
                return redirect('newAdminDash');
            }
            else {
                return back()->with('fail','Incorrect password');
                }
            }
            else{
                return back()->with('fail','You are not registered as an Admin');
                }
        }
        public function logoutAdmin()
        {
            if(Session::has('loginId')){
                Session::pull('loginId');
                return redirect('adminLogin');
            }
        }

    public function adminDashboard()
        {
            return view ("adminDashboard");

        }

        public function newDash()
        {
            return view ("newAdminDash");

        }
        public function positions()
        {
            return view ("positions");

        }

       

//     public function adminLogin(Request $request){
//             $request-> validate([
//             'password'=>'required|min:5|max:12',]);

//             $user= User::where('adminNumber','=', $request->studentnumber) ->first();
//             if($admin)
//                 {if (Hash::check($request->password, $admin->password))
//             {
//                 $request->session()->put('loginId', $admin->id);
//                 return redirect('dashboard');
//             }
//             else {
//                 return back()->with('fail','Your password doesnot match');
//                 }
//             }
//             else{
//                 return back()->with('fail','You are not a registered student');
//                 }
//         }
 }
