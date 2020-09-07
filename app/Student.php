<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // ketika tabelnya gak default (gak sesuai dengan model yang dibuat dan migration tabelnya)
    // contoh selain table students dan model Student 
    // maka ditambah :
    // protected $table = 'mahasiswa';
    //
}
