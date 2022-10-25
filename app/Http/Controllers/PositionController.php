<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Position;

use DB;
use Hash;
use Session;

class PositionController extends Controller
{ 

    public function viewForm()
    {
        return view('positionView');
    }
    public function addPositions(Request $request)
        {
            $this->validate($request,[
                'positionId'=>'required',
                'positionName'=>'required',
                'positionDescription'=>'required',
            ]);

            $positions = new Position;
            $positions-> positionId = $request->input('positionId');
            $positions-> positionName = $request->input('positionName');
            $positions-> positionDescription = $request->input('positionDescription');
            $res = $positions->save();

            if($res){
                return redirect('/positions')->with('success','Position saved');
                }
           else{
                return back()->with('fail','Failed registration');
                }
        }
    public function positions()
        {
            return view("positions");
        }
    public function insert()
        {
            return view("insertRead");
        }
        public function addPosition()
        {
            return view("addPosition");
        }

    public function index()
    {
        $data=Position::all();
        return view("positions",['data'=>$data]);
    }
    public function indexOne()
    {
        $data=Position::all();
        return view("allCandView",['data'=>$data]);
    }
    public function indexNew()
    {
        $data=Position::all();
        return view("beCandidate",['data'=>$data]);
    }
    
    // public function editPosition($id)
    // {
    //     $data = DB:: select('select * from positions where id =?', [$id]);
    //     return view('click_edit',['data'=>$data]);
    // }
    
     public function updatePosition(Request $request,$id)
     {
        $positionId = $request->input('positionId');
        $positionName = $request->input('positionName');
        $positionDescription = $request->input('positionDescription');

        DB::update ('update positions set positionId = ?,positionName = ?,positionDescription = ? where id =?', [$positionId,$positionName,$positionDescription, $id]);

        return redirect('positions')->with('success','Data updated');

     }
    
    public function deletePosition($id){

        DB::delete('delete from positions where id = ?',[$id]);
        return redirect('positions');

    }


    public function campaign()
    {
        return view("campaign");
    }

    public function manifesto()
    {
        return view("manifesto");
    }
        }