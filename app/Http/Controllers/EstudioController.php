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

class EstudioController extends Controller
{
    public function index(){
  
    }


    public function addStudy(Request $request){

       // add_study?idgrados=1&institucion=Univerisda&gradoobtenido=Maestreo&concluidos=1&anio=2024
      // dd($request->all());
        $userid = auth()->id();

            $request->validate([
                
                'idgrados' => 'required',
                'institucion' => 'required',
                'gradoobtenido' => 'required',
                'concluidos' => 'required',
                'anio' => 'required',
            ]);

            $idgrados = $request->input('idgrados');
            $institucion = $request->input('institucion');
            $gradoobtenido = $request->input('gradoobtenido');
            $concluidos = $request->input('concluidos');
            $anio = $request->input('anio');

    
            Estudio::create([
                'userid' => $userid,
                'idgrados' => $request->idgrados,
                'institucion' => $request->institucion,
                'gradoobtenido' => $request->gradoobtenido,
                'concluidos' => $request->concluidos,
                'anio' => $request->anio,
                'estado' => 1

            ]);


        return redirect()->route('registro')->with('success', 'Los datos se guardaron correctamente.');
        


    }
    
    public function updateStudy(Request $request){
        
       // dd($request->all());

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
                        'estado' => 1,
                    ]);
                  
             
            }
    
            return redirect()->back()->with('success', 'Estudios actualizados correctamente');
    
    }

    public function deleteStudy(Request $request){
        $estudio = Estudio::find($request->id);
        $estudio->update([
            'estado' => 0
        ]);
        return redirect()->back()->with('success', 'Estudios Eliminado correctamente');;
    }


    
}