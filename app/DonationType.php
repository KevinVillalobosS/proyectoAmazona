<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationType extends Model
{
    //
    protected $fillable = ['donation_type_name','donation_type_description'];
    
    //declaring a one to many relationship
    public function donations(){
        return $this->hasMany('App\Donation','type_id');
    }

}
