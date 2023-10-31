<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{


    public function store($id)
    {
        $user_id = Auth::user()->id;

        $subscribed = Subscription::where('user_id',$user_id)->orWhere('plan_id',$id)->first();
        if (!$subscribed){
            $subscribe = new Subscription();
            $subscribe->user_id = $user_id;
            $subscribe->plan_id = $id;
            $subscribe->save();
            if ($subscribe){
                return redirect()->back();
            }else{
                return "Something went wrong";
            }
        }

        return redirect()->back();

    }


}
