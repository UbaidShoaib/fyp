<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    //
    protected $fillable= ['author_id','degree', 'major' ];

    public function user(){

        return $this->belongsTo('App\User');

    }


}
