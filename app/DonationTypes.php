<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationTypes extends Model
{
    //


    //declaring a one to one relationship
    public function donation(){
        return $this->hasMany('App\Donation');
    }
}
