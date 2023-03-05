<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class CodingChallenge extends Controller
{
    //
    function list(){
      return Account::all();
    }

    function Item($id){
        return Account::find($id);
    }
    function add(Request $req ){
        $account = new Account;
        $account->name = $req->name;
        $account->score = $req->score;
        $result=$account->save();
        if($result){
        return ["Result"=>"Data has been saved"];
        }
        else{
            return ["Result"=>"operation Failed."];
        }
        
    }
    function update(Request $req){

        $account = Account::find($req->id);
        $account->name=$req->name;
        $account->score=$req->score;
        $result = $account->save();
        if($result){
        return ["result"=>"Data is updated"];
        }
       else{
         return ["result"=>"Update Operation Has Failed"];
       }
    }
    
    function delete($id){
        $account = Account::find($id);
        $result = $account->delete();
        if($result){
  return ["result"=>"record has been deleted".$id];
        }
        else{
             return ["result"=>"delete operation has failed".$id];
        }

      
    }

    function answer(){
       return ["result"=>"The Result is Correct."];
    }

    function leaderboard(){
    $maxValue = Account::max('score');
    }
}