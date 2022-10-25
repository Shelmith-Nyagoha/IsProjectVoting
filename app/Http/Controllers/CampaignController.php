<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Campaign;
use DB;
use Hash;
use Session;


class CampaignController extends Controller
{
    public function addCampaigns(Request $request)
        {
            $this->validate($request,[
                'studentNumber'=>'required',
                'positionName'=>'required',
                'campaignChannel'=>'required',
                'manifesto'=>'required',
            ]);

            $campaigns = new Campaign;
            $campaigns-> studentNumber = $request->input('studentNumber');
            $campaigns-> positionName = $request->input('positionName');
            $campaigns-> campaignChannel = $request->input('campaignChannel');
            $campaigns-> manifesto= $request->input('manifesto');

            $res = $campaigns->save();

            if($res){
                return redirect('/campaign')->with('success','Campaign saved');
                }
           else{
                return back()->with('fail','Failed to add campaign');
                }
        }
        public function indexTwo()
        {
            $data=Candidate::all();
            return view("allCandView",['data'=>$data]);
        }

        
}
