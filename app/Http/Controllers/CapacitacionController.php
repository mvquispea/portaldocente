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

class CapacitacionController extends Controller
{
    public function index(){
  
    }


    public function addTraining(Request $request){

      //  dd($request->all());
            $userid = auth()->id();

            $request->validate([
                
                'curso' => 'required',
                'capainstitucion' => 'required',
                'horas' => 'required',
                'capaanio' => 'required',
            ]);

            $curso = $request->input('curso');
            $capainstitucion = $request->input('capainstitucion');
            $horas = $request->input('horas');
            $capaanio = $request->input('capaanio');

    
            Capacitacion::create([
                'userid' => $userid,
                'curso' => $request->curso,
                'capainstitucion' => $request->capainstitucion,
                'horas' => $request->horas,
                'capaanio' =>$request->capaanio,
                'estado' => 1
            ]);






        return redirect()->route('registro')->with('success', 'Los datos se guardaron correctamente.');
        


    }
    
    public function updateTraining(Request $request){
   //  dd($request->all());

            foreach ($request->capas as $capacitacionData) {
                    $id = $capacitacionData['id'];

                    $curso = $capacitacionData['curso'];
                    $capainstitucion = $capacitacionData['capainstitucion'];
                    $horas = $capacitacionData['horas'];
                    $capaanio = $capacitacionData['capaanio'];
     
        
                    // Actualizar cada estudio en la base de datos
                    Capacitacion::where('id', $id)->update([
                        'curso' => $curso,
                        'capainstitucion' => $capainstitucion,
                        'horas' => $horas,
                        'capaanio' => $capaanio,
                    ]);
                  
             
            }
    
            return redirect()->back()->with('success', 'Estudios actualizados correctamente');
    
    }

    public function deleteTraining(Request $request){
        $estudio = Capacitacion::find($request->id);
        $estudio->update([
            'estado' =>0
        ]);
        return redirect()->back();
    }


    
}