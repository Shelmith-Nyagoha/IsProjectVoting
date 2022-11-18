<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login()
        {
            return view ("auth.login");

        }
   
    public function registration()
        {
            return view("auth.registration");
        }
        public function registerUser(Request $request)
        {
           $request-> validate([
            'studentnumber'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'faculty'=>'required',
            'yearofStudy'=>'required',
            'password'=>'required',
            'image'=>''
           ]);
           $user = new User();
           $user->studentnumber = $request->studentnumber;
           $user->firstname = $request->firstname;
           $user->lastname = $request->lastname;
           $user->email = $request->email;
           $user->faculty= $request->faculty;
           $user->yearofStudy = $request->yearofStudy;
           $user->password = Hash::make($request->password);
        

           if($request->hasfile('image')){
             $file = $request->file('image');
             $extention = $file->getClientOriginalExtension();
             $filename = time().'.'.$extention;
             $file->move('uploads/users/',$filename);
             $user->image= $filename;
           }

           $res = $user->save();
           if($res){
               return back()->with('success','Successfully registered');
           }
            else{
                return back()->with('fail','Failed registration');
           }


        
        }
        public function loginUser(Request $request){
            $request-> validate([
            'password'=>'required|min:5|max:12',]);

            $user= User::where('studentnumber','=', $request->studentnumber) ->first();
            if($user)
                {if (Hash::check($request->password, $user->password))
            {
                $request->session()->put('loginId', $user->voterId);
                return redirect('voterDashboard');
            }
            else {
                return back()->with('fail','Your password doesnot match');
                }
            }
            else{
                return back()->with('fail','You are not a registered student');
                }
        }

        
        
        public function voterDashboard()
        {
           
             $item = array();
            if(Session::has('loginId')){
            $item= User::where('voterId','=', Session::get('loginId')) ->first();
            }
            return view ('submit_vote', compact('item'));
            
        }
      


        public function profile()
        { 
            $item = array();
            if(Session::has('loginId')){
            $item= User::where('voterId','=', Session::get('loginId')) ->first();
             }
            return view (' voterDashboard', compact('item'));            
        }

            // $item = array();
            // if(Session::has('loginId')){
            //     $item= User::where('voterId','=', Session::get('loginId')) ->first();
            // }
            // return view ('voterDashboard', compact('item'));

      
        public function prof()
        {
            $dat = array();
            if(Session::has('loginId')){
                $dat= User::where('voterId','=', Session::get('loginId')) ->first();
            }
            return view ('vote', compact('dat'));
        }

        public function logout()
        {
            if(Session::has('loginId')){
                Session::pull('loginId');
                return redirect('login');
            }
        }
        public function beCandidate(){
            $data = array();
            if(Session::has('loginId')){
                $data= User::where('id','=', Session::get('loginId')) ->first();
            }
            return view ('beCandidate', compact('data'));
        }
        
        public function connect(){
            $data = array();
            if(Session::has('loginId')){
                $data= User::where('id','=', Session::get('loginId')) ->first();
            }
            return view ('connect', compact('data'));
            
        }
        public function voteNow(){
            $data = array();
            if(Session::has('loginId')){
                $data= User::where('id','=', Session::get('loginId')) ->first();
            }
            return view ('voteNow', compact('data'));
            
        }
        public function dash(){
            $data = array();
            if(Session::has('loginId')){
                $data= User::where('id','=', Session::get('loginId')) ->first();
            }
            return view ('voterDashboard', compact('data'));
            
        }
        public function index(){
            $user = User::all();
            return view('voterDashboard',compact($user));
        }

}

