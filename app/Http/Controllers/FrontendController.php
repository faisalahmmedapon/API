<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use App\Models\Plan;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{

    public function index()
    {
        $data['plans'] = Plan::with('subscriptions')->latest('id')->get();
//        return  $data['plans'];

        return view('plans', $data);
    }


    public function users(){
        $subscribedUsers = Subscription::with(['plan','user'])->get();
        return $subscribedUsers;
    }

}
