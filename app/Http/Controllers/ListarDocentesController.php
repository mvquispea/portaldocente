<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Docente;


class ListarDocentesController extends Controller
{
    public function index()
    {
        $docentes = DB::table('pd_docente')->where('estado', 1)->get();
        return view('ListarDocentes', ['docentes' => $docentes]);
        
    }
}
