<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\UserDetail;

class User extends Authenticatable
{
     protected $table = 'user';
    use Notifiable;

    function detail(){
    	return $this->hasOne(UserDetail::class,'id_user');
    }

     function Produk(){
    	return $this->hasMany(Produk::class,'id_user');
    }

   }