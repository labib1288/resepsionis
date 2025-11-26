<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
class admin extends Authenticatable
{
    //
    protected $table = 'admin_login';
    protected $fillable = ['username', 'password', 'jabatan'];
    public function setPasswordAttribute($value)
{
    $this->attributes['password'] = Hash::make($value);
}

}