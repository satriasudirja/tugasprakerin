<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
	public $timestamps = false;
    protected $table ='siswa';
    protected $primaryKey = 'id_siswa';
    protected $fillable = ['nisn','nama_siswa','jenis_kelamin','alamat','asal_sekolah','jurusan'];
}
