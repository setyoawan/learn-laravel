<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // ketika tabelnya gak default (gak sesuai dengan model yang dibuat dan migration tabelnya)
    // contoh selain table students dan model Student 
    // maka ditambah :
    protected $table = 'mahasiswa'; // laravel ngikuti aturan kita 

    // tabel itu jamak, banyak record, banyak data 
    // model adalah bagian singular dari tabel 
    // contoh nama table students modelnya namanya student 
}
