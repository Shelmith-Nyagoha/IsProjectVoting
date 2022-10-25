<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Election;
use DB;
use Hash;
use Session;

class ElectionController extends Controller
{
    public function viewSet()
        {
            return view ("setElection");

        }

        public function addElection(Request $request)
        {
            $this->validate($request,[
                'electionId'=>'required',
                'electionName'=>'required',
                'setDate'=>'required',
            ]);

            $election = new Election;
            $election-> electionId = $request->input('electionId');
            $election-> electionName = $request->input('electionName');
            $election-> setDate = $request->input('setDate');
            $res = $election->save();

            if($res){
                return redirect('/setElection')->with('success','Saved');
                }
           else{
                return back()->with('fail','Failed registration');
                }
        }

        public function indexNew()
        {
            $data=Election::all();
            return view("setElection",['data'=>$data]);
        }

        public function updateElection(Request $request,$id)
        {
           $electionId = $request->input('electionId');
           $electionName = $request->input('electionName');
           $setDate = $request->input('setDate');
   
           DB::update ('update election set electionId = ?,electionName = ?,setDate = ? where id = ?', [$electionId,$electionName,$setDate, $id]);
   
           return redirect('setElection')->with('success','Data updated');
   
        }
       
}
