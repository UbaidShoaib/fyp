<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unregistered_author extends Model
{
    //

    protected $fillable= ['author_id','name','email'];

    public function author(){

        return $this->belongsTo('App\Author');

    }

}
