<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{

    protected $fillable = ['sector_id','type_id', 'item_name','item_quantity','description','status'];


    //declaring a reverse one to many relationship
    public function sector(){
        return $this->belongsTo('App\Sector');
    }

    //declaring reverse a one to many relationship
    public function donationType(){
        return $this->belongsTo('App\DonationType');
    }

    //declaring a one to one relationship
    /*public function categories(){
        return $this->hasOne('App\Categorie');
    }*/
}
