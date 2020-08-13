<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
	public $timestamps = false;
    protected $table ='pengguna';
    protected $fillable = ['nama_lengkap','email','password','no_telepon'];
}
