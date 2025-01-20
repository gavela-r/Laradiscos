<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Disco extends Model{
    use HasFactory;
    protected $table = 'discos';
    protected $fillable = [
        'titulo',
        'autor',
        'genero',
        'anio'
    ];

    protected $hidden = [];
}
