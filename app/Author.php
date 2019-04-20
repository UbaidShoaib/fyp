<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //

    protected $fillable= [ 'user_id'];

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function registered_author(){

        return $this->hasOne('App\Registered_author');

    }

    public function unregistered_author(){

        return $this->hasOne('App\Unregistered_author');

    }



}
