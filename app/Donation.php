<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{

    protected $fillable = ['sector_id','donation_type_id', 'item_name','item_quantity','description','status', 'due_date'];


    //declaring a reverse one to many relationship
    public function sector(){
        return $this->belongsTo('App\Sector');
    }

    //declaring a reverse one to many relationship
    public function donationType(){
        return $this->belongsTo('App\DonationType','type_id');
    }
}