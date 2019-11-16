<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //

 
    protected $fillable = ['sector_id','vehicle_vin','vehicle_type', 'vehicle_name','vehicle_brand','vehicle_model','vehicle_year','vehicle_details','vehicle_status'];


    //declaring a reverse one to many relationship
    public function sector(){
        return $this->belongsTo('App\Sector');
    }
}
