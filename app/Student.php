<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // menambah properti pretected $fillable menandakan yang dipilih adalah field yang kita set untuk diisi

    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];

    // $guarded menandakan yang dipilih adalah field yang tidak boleh diisi
}
