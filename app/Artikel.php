<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel' ; //untuk membaca data. 

    protected $fillable = [ //untuk manipulasi data attribut yg boleh dimanipulasi 
        'judul',
        'deskripsi'
    ];
}
