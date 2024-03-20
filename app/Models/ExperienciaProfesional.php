<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienciaProfesional extends Model
{
    use HasFactory;

    protected $table = 'pd_experiencia_profesional';

    protected $fillable = [
        'expinstitucion',
        'cargo',
        'finicio',
        'ffin'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }
}