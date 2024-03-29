<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\App;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function author(){

        return $this->hasOne('App\Author');
    }

    public function reviewer(){

        return $this->hasOne('App\Reviewer');
    }

    public function isAuthor(){

        if ($this->author){

            return true;
        }else
        {
            return false;
        }
    }



    public function isRev(){

        if ($this->reviewer){

            return true;
        }else
        {
            return false;
        }
    }




}
