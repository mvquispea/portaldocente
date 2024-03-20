<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    use HasFactory;

    protected $table = 'pd_estudios';

    protected $fillable = [
        'userid',
        'idgrados',
        'institucion',
        'gradoobtenido',
        'estado',
        'anio',
    ];

    protected $casts = [
        'estado' => 'boolean',
        'anio' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }
}
