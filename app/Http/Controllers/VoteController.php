<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\User;
use App\Mail\newCandMail;
use DB;
use Hash;
use Session;


class VoteController extends Controller
{
   
    
    public function submit()
        {
            $item = array();
            if(Session::has('loginId')){
                $item= User::where('voterId','=', Session::get('loginId')) ->first();
            }
            return view ('submitVote', compact('item'));
            
        }
        public function canBe()
        {
            $item = array();
                if(Session::has('loginId')){
                $item= User::where('voterId','=', Session::get('loginId')) ->first();
                }
                return view ('vote', compact('item'));
        
        }
    //     public function Bee(){
	// 	$conn = mysqli_connect("localhost", "root", "", "onealis");

	// 	$conn->query("INSERT INTO `votes` VALUES('', '{$_SESSION['pres_id']}', '$item->voterId', '' , '') ") or die($conn->error);
	// 	$conn->query("INSERT INTO `votes` VALUES('', '{$_SESSION['vp_id']}', '$item->voterId' ,'','') ") or die($conn->error);
	// 	$conn->query("INSERT INTO `votes` VALUES('', '{$_SESSION['ua_id']}', '$item->voterId' ,'','') ") or die($conn->error);
	// 	$conn->query("INSERT INTO `votes` VALUES('', '{$_SESSION['ss_id']}', '$item->voterId' ,'','' )") or die($conn->error);
	
	// 	$conn->query("UPDATE `users` SET `status` = 'Voted' WHERE `voterId` = '{$_SESSION['voterId']}'") or die($conn->error);
		
    // ;

    //     }
      
} ;   



// // $request->validate([
// //     'candidateId'=>'required',
// //     'voterId'=>'required',
// // $votes = new Vote;
// // $votes-> candidateId = $request->candidateId;
// // $votes-> voterId = $request->voterId;

// // $res = $votes->save();

// // if($res){
// //     return redirect('/login')->with('success','Voted ');
// //     }
// // else{
// //     return back()->with('fail','Failed');
// //     }
