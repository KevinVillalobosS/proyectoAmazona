<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catastrophe extends Model
{
    //
    protected $primaryKey = 'catastrophe_id';


    protected $fillable = ['catastrophe_name', 'status','description','date'];

        //declaring a one to many relationship
        public function sectors(){
            return $this->hasMany('App\Sector', 'catastrophe_id');
        }
    

}
