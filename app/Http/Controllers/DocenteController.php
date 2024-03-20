<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Docente;
use App\Models\Estudio;
use App\Models\Grado;
use App\Models\Capacitacion;

use DateTime;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class DocenteController extends Controller
{
    public function index(){

        $user_id = auth()->id();
        $docente = Docente::where('userid', $user_id)->first();

        $capa = Capacitacion::where('userid', $user_id)->get();

        $estudio = Estudio::select('pd_estudios.id', 'userid','idgrados', 'gr.nombre as nombre_grado', 'institucion', 'estado','anio', 'gr.id as idgr', 'gradoobtenido', 'anio','concluidos')
        ->join('pd_grados as gr', 'pd_estudios.idgrados', '=', 'gr.id')
        ->where('userid', $user_id)
        ->where('estado', 1)
        ->get();

        if ($docente) {
            return view('EditarDocentes', compact('docente', 'estudio','capa'))->with('message', 'Los datos se guardaron correctamente.');
        } else {
            return view('RegistroDocentes');
        }
    }

    public function add(Request $request){  // primera vez

       // dd($request->all());

        $date = new DateTime($request->input('fechanacimiento'));
        $fechaNacimiento = $date->format('Y-m-d');

        $docente = new Docente;
        $docente->userid = auth()->user()->id;
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

        return redirect()->route('edit', ['id' => $docente->id])->with('message', 'Los datos se guardaron correctamente.');

    }

    public function edit($id){

        $docente = Docente::findOrFail($id);
        $estudio = Estudio::where('userid', $docente->userid)->where('estado', 1)->get();
        $grados = Grado::all();
        return view('EditarDocentes', compact('docente', 'estudio', 'grados'))->with('message', 'Los datos se guardaron correctamente.');

        
    }

    public function update(Request $request){
        $docente = Docente::find($request->id);
        $date = new DateTime($request->input('fechanacimiento'));
        $fechaNacimiento = $date->format('Y-m-d');

   
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('public/avatars');
         
            Storage::delete($docente->foto);
            $docente->foto = 'storage/' . str_replace('public/', '', $avatarPath);
        }



        $docente->update([
            'foto' => $docente->foto,
            'docente' => $request->fname,
            'apellidos' => $request->lname,
            'fechanacimiento' => $fechaNacimiento,
            'lugar' => $request->lugar,
            'estadocivil' => $request->input('estadocivil'),
            'nacionalidad' => $request->input('nacionalidad'),
            'celular' => $request->input('numero1'),
            'telefijo' => $request->input('numero2'),
            'genero' => $request->input('genero'),
            'direccion' => $request->input('direccion'),
            'correop' => $request->input('correop'),
            'correoi' => $request->input('correoi'),
            'condicion' => $request->input('condicion'),  //contratado o ordinario
            'ano' => $request->input('ano'),
            'categoria' => $request->input('category'),
            'estado' => 1
        ]);

        return redirect()->back()->with('success', 'Docente actualizado correctamente');

    }

    public function crearEstudio(Request $request){

    }
    
    public function updateEstudios(Request $request){
        //dd($request->all());
            foreach ($request->estudios as $estudioData) {
                $id = $estudioData['id'];

                    $grado = $estudioData['idgrados'];
                    $institucion = $estudioData['institucion'];
                    $gradoobtenido = $estudioData['gradoobt'];
                    $concluidos = $estudioData['concluidos'];
                    $anio = $estudioData['anio'];
        
                    // Actualizar cada estudio en la base de datos
                    Estudio::where('id', $id)->update([
                        'idgrados' => $grado,
                        'institucion' => $institucion,
                        'gradoobtenido' => $gradoobtenido,
                        'concluidos' => $concluidos,
                        'anio' => $anio,
                    ]);
            }
    
            return redirect()->back()->with('success', 'Estudios actualizados correctamente');
    
    }

    public function updateCapacitacion(Request $request){
        // dd($request->all());

        $userid = auth()->id();
        $docente = Capacitacion::where('userid', $userid)->first();
    
        if ($docente && $request->capacitacion) {

            Capacitacion::where('userid', $userid)->update([
                'curso' => $capacurso,
                'institucion' => $capainstitucion,
                'horas' => $capahoras,
                'capanio' => $capaanio
            ]);
    
            return redirect()->back()->with('success', 'Estudios actualizados correctamente');
        } else {
            return redirect()->back()->with('error', 'No se encontró el docente asociado al usuario');
        }
  
    }



    public function deleteEstudios(Request $request){
        $estudio = Estudio::find($request->id);
        $estudio->update([
            'estado' =>0
        ]);
        return redirect()->back();
    }


    
}