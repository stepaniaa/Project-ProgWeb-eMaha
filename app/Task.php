<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task' ;                 //untuk membaca data pada table mahasiswa

    protected $fillable = [                      //untuk manipulasi data attribut yg boleh dimanipulasi 
        'nama',
        'judul_task',
        'deskripsi_task'
    ];
}
