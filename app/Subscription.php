<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    //
    public function videos()
    {
        return $this->hasMany('App\Video', 'subscription_id', 'user_id');
    }
}
