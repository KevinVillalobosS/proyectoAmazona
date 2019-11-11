<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{

    //modifiable data for the sector
    protected $fillable = ['catastrophe_id', 'sector_name','zone','country','details'];


    //declaring a one to many relationship
    public function catastrophe(){
        return $this->belongsTo('App\Catastrophe');
    }

     //declaring a one to many relationship
     public function donation(){
        return $this->hasMany('App\Donation');
    }


}
