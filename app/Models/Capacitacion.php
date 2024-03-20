<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    use HasFactory;

    protected $table = 'pd_capacitacion';


  
    protected $fillable = [
        'curso',
        'capainstitucion',
        'horas',
        'capaanio',
        'estado'
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