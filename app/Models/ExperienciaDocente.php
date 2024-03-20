<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienciaDocente extends Model
{
    use HasFactory;

    protected $table = 'pd_experiencia_docente';

    protected $fillable = [
        'universidad',
        'sinicio',
        'sfin',
        'curso',
        'nsemestres'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }
}