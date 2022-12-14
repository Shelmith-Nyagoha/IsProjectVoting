<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\User;
use App\Mail\newCandMail;
use DB;
use Hash;
use Session;


class CandidateController extends Controller
{
    public function viewResult()
    {
        $item = array();
            if(Session::has('loginId')){
            $item= User::where('voterId','=', Session::get('loginId')) ->first();
            }
            return view ('voteResult', compact('item'));
    
    }

    public function manageCandidate()
    {
        return view("manageCandidate");
    }

    public function allCandView()
    {
        return view("allCandView");
    }
    
    public function beCandidate()
    {
        return view("beCandidate");
    }
    public function addVie(Request $request)
    {
        $request->validate([
            'studentNumber'=>'required',
            'firstName'=>'required',
            'positionName'=>'required',
            'email'=>'required',
            'image'=>'required',
        ]);

        $candidates = new Candidate;
        $candidates-> studentNumber = $request->studentNumber;
        $candidates-> firstName = $request->firstName;
        $candidates-> positionName = $request->positionName;
        $candidates-> academicReport = $request-> academicReport;
        $candidates->manifesto =$request->manifesto;
        $candidates->image =$request->image;
        $candidates-> email = $request->email;

        

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/candidates/',$filename);
            $candidates->image= $filename;
          }
        
          if($request->hasfile('academicReport')){
            $file = $request->file('academicReport');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/academicReports/',$filename);
            $candidates->academicReport= $filename;
          }
          if($request->hasfile('manifesto')){
            $file = $request->file('manifesto');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/manifestos/',$filename);
            $candidates->manifesto= $filename;
          }

        $res = $candidates->save();

        if($res){
            return redirect('/beCandidate')->with('success','Success, wait for your verification');
            }
       else{
            return back()->with('fail','Failed');
            }

    
    }

    public function viewCandidates()
    {
        $item = array();
        if(Session::has('loginId')){
            $item= Candidate::where('id','=', Session::get('loginId')) ->first();
        }
        return view ('manageCandidate', compact('item'));
    }
    public function profile()
    {
        $item = array();
        if(Session::has('loginId')){
            $item= Candidate::where('id','=', Session::get('loginId')) ->first();
        }
        return view ('beCandidate', compact('item'));
    }
    

    public function viewStatus()
        {
            $data = array();
            if(Session::has('loginId')){
                $data= Candidate::where('id','=', Session::get('loginId')) ->first();
            }
            return view ('beCandidate', compact('data'));
        }

        public function indexTwo()
        {
            $data=Candidate::all();
            return view("allCandView",['data'=>$data]);
        }
        public function indexFour()
        {
            $data=Candidate::all();
            return view("manageCandidate",['data'=>$data]);
        }
        public function indexThree()
    {
        $data=Candidate::all();
        return view("beCandidate",['data'=>$data]);
    }
    public function dashboard()
        {
            $data = array();
            if(Session::has('loginId')){
                $data= User::where('voterId','=', Session::get('loginId')) ->first();
            }
            return view ('allCandView', compact('data'));
        }
   
}
