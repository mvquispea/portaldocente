<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patente extends Model
{
    use HasFactory;

    protected $table = 'pd_patente';

    protected $fillable = [
        'patente'
    ];
}
