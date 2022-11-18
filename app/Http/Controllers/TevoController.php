<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tevo;
use App\Mail\newCandMail;
use DB;
use Hash;
use Session;


class TevoController extends Controller
{
    public function addVote(Request $request)
    {
        $this->validate($request,[
            'voterId'=>'required',
            'presidentId'=>'required',
            'viceId'=>'required',
            'sportId'=>'required',
            'financeId'=>'required',
        ]);

        $tevos = new Tevo;
        $tevos-> voterId = $request->input('voterId');
        $tevos-> presidentId = $request->input('presidentId');
        $tevos->  viceId= $request->input('viceId');
        $tevos->  sportId = $request->input('sportId');
        $tevos-> financeId = $request->input('financeId');
        $res = $tevos->save();

        if($res){
            return redirect('/voterDashboard')->with('success','Vote saved');
            }
       else{
        return redirect('/voterDashboard')->with('success','Vote saved');
            // return back()->with('fail','Fail');
            }
    }
}
