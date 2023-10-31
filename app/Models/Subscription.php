<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;



    public function plan()
    {
        return $this->hasOne(Plan::class,'id','plan_id',);
    }


    public function user()
    {
        return $this->hasOne(User::class,'id','user_id',);
    }
}
