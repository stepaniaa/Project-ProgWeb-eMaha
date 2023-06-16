<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa' ; //untuk membaca data pada table mahasiswa

    protected $fillable = [ //untuk manipulasi data attribut yg boleh dimanipulasi 
        'nim',
        'nama',
        'gender',
        'prodi',
        'minat',
    ];
}
