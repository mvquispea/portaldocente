<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userHome()
    {
        return view('home',["msg"=>"Hello! I am user"]);
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function editorHome()
    {
        $userid = auth()->id();
        $docente = Docente::where('userid', $userid)->first();
        $foto = $docente ? ($docente->foto ? $docente->foto : 'assets/media/avatars/blank.png') : 'assets/media/avatars/blank.png';
        return view('home', ["msg" => "Hello! I am editor", "docente" => $docente, "foto" => $foto]);
    }
    


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $userid = auth()->id();
        $docentes = Docente::where('userid', $userid)->first();
        return view('home', ['msg' => 'Hello! I am admin', 'docente' => $docentes]);
    
    }

}
