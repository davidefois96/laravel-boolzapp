<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;

class PageController extends Controller
{
   public function getUserMessage($User_Id, $other_User_Id)
   {
    //    $messages = Message::whereHas('users', function ($query) use ($user_id) {
    //        $query->where('user_id', $user_id);
    //    })
    //    ->whereHas('users', function ($query) use ($other_user_id) {
    //        $query->where('user_id', $other_user_id);
    //    })->get();
       $messages = Message::where('user_id', $User_Id) ->orWhere('user_id', $other_User_Id) ->get();


       return response()->json($messages);
   }
}
