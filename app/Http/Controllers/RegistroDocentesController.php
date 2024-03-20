<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Docente;
use App\Models\Estudios;
use DateTime;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;



class RegistroDocentesController extends Controller
{
    public function index2()
    { 
        $user_id = auth()->id();
        $docentes = Docente::where('userid', $user_id)->first();
        //$estudios = Estudio::where('userid', $user_id)->get();
        $estudios = Estudio::where('userid', $docente->userid)->where('estado', 1)->get();
       debug( $estudios);
        
    
        if ($docente) {
            if ($estudios->isEmpty()) {
                return view('RegistroDocentes')->with('docentes', $docentes)->with('estudios', $estudios);
            } else {
                return redirect()->route('edit', ['id' => $docentes->id]);
                
            }
        } else {
            return view('RegistroDocentes');
        }

        //return redirect()->route('edit', ['id' => $docente->id]);
    }



    public function store(Request $request)
    {
        /* $request->validate([
                'fname' => 'required|string|max:255',
                'lname' => 'required|string|max:255',
                'numero1' => 'nullable|string|max:255',
                'numero2' => 'nullable|string|max:255',
                'fechanacimiento' => 'required|date',
                'nacionalidad' => 'nullable|string|max:255',
                'correop' => 'nullable|string|max:255',
                'correoi' => 'nullable|string|max:255',
                'condicion' => 'required|string|max:255',
                'ano' => 'required|string|max:255',
                'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


                'idgrados' => 'required',
                'institucion' => 'required',
                'gradoobtenido' => 'required',
                'ano' => 'required|date',


            ]);*/
    

        $date = new DateTime($request->input('fechanacimiento'));
        $fechaNacimiento = $date->format('Y-m-d');


        
        //$docente->userid = auth()->user()->id;
        $docente = new Docentes;
        $docente->foto = $request->input('foto');
        $docente->nombres = $request->input('fname');
        $docente->apellidos = $request->input('lname');
        $docente->fechanacimiento = $fechaNacimiento;
        $docente->lugar = $request->input('lugar');
        $docente->estadocivil = $request->input('estadocivil');
        $docente->nacionalidad = $request->input('nacionalidad');
        $docente->celular = $request->input('numero1');
        $docente->telefijo = $request->input('numero2');
        $docente->genero = $request->input('genero');
        $docente->direccion = $request->input('direccion');
        $docente->correop = $request->input('correop');
        $docente->correoi = $request->input('correoi');
        $docente->condicion = $request->input('condicion');  //contratado o ordinario
        $docente->ano = $request->input('ano');
        $docente->categoria = $request->input('category');
    
        $docente->estado = 1;
    
        $docente->save();

        foreach ($request->estudios as $estudio) {
            // Crear un nuevo estudio
            $nuevoEstudio = new Estudios;
            $nuevoEstudio->userid = auth()->user()->id;
            $nuevoEstudio->idgrados = $estudio['idgrados'];
            $nuevoEstudio->institucion = $estudio['institucion'];
            $nuevoEstudio->gradoobtenido = $estudio['gradoobtenido'];
            $nuevoEstudio->anio = $estudio['anio'];
    
            // Guardar el estudio en la base de datos
            $nuevoEstudio->save();
        }

       return redirect()->route('edit', ['id' => $docente->id])->with('message', 'Los datos se guardaron correctamente.');
    
    }

    public function edit($id)
    {
        $docente = Docentes::findOrFail($id);
        $estudios = Estudio::where('userid', $docente->userid)->where('estado', 1)->get();

        return view('EditarDocentes', compact('docente', 'estudios'));
    }


    public function update(Request $request, $id)
    {
        
        $docente = Docentes::findOrFail($id);
        $estudio = Estudios::where('userid', $docente->userid)->get();


        $date = new DateTime($request->input('fechanacimiento'));
        $fechaNacimiento = $date->format('Y-m-d');

   
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('public/avatars');
         
            Storage::delete($docente->foto);
            $docente->foto = 'storage/' . str_replace('public/', '', $avatarPath);
        }

        $docente->userid = auth()->user()->id;
        $docente->nombres = $request->input('fname');
        $docente->apellidos = $request->input('lname');
        $docente->fechanacimiento = $fechaNacimiento;
        $docente->lugar = $request->input('lugar');
        $docente->estadocivil = $request->input('estadocivil');
        $docente->nacionalidad = $request->input('nacionalidad');
        $docente->celular = $request->input('numero1');
        $docente->telefijo = $request->input('numero2');
        $docente->genero = $request->input('genero');
        $docente->direccion = $request->input('direccion');
        $docente->correop = $request->input('correop');
        $docente->correoi = $request->input('correoi');
        $docente->condicion = $request->input('condicion');
        $docente->ano = $request->input('ano');
        $docente->categoria = $request->input('category');

        $docente->save();



        //  dd($request->all());
        $dato = $request->input('num_estudios');

  
        $numEstudios = (int)$request->input('num_estudios', 0);
        for ($i = 0; $i <= $numEstudios; $i++) {
            $idgrados = $request->input('grados-' . $i);
            $institucion = $request->input('institucion-' . $i);
            $anio = $request->input('anio-' . $i);
        
            $estudioExistente = Estudios::where('userid', $docente->userid)->where('id', $i)->first();

            if ($estudioExistente ) {
               
                $estudioExistente->idgrados = $idgrados;
                $estudioExistente->institucion = $institucion;
                $estudioExistente->anio = $anio;

                $estudioExistente->save();
            } else {
               
                $nuevoEstudio = new Estudios;
                $nuevoEstudio->userid = $docente->userid; 
                $nuevoEstudio->idgrados = $idgrados;
                $nuevoEstudio->institucion = $institucion;
                $nuevoEstudio->anio = $anio;
                $nuevoEstudio->save();
            }
        }
 
    
        return redirect()->back()->with('success', 'Docente actualizado correctamente');
    }





}
