<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registered_author extends Model
{
    //

    protected $fillable= ['author_id','degree', 'major' ];


    public function author(){

        return $this->belongsTo('App\Author');
    }


}
