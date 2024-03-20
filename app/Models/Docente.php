<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $table = 'pd_docente';

    protected $fillable = [
        'userid',
        'foto',
        'nombres',
        'apellidos',
        'fechanacimiento',
        'lugar',
        'estadocivil',
        'nacionalidad',
        'celular',
        'telefijo',
        'genero',
        'direccion',
        'correop',
        'correoi',
        'condicion',
        'ano',
        'estado',
        'categoria'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }
}