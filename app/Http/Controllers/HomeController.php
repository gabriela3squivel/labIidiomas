<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $posts = App\Post::latest()
        ->take(2)
        ->get();
        return view('home', compact('posts'));
    }
    public function foro(){
        $posts = App\Post::all();
        if(auth()->user()->tipo==1){
            
            return view('foro',compact('posts'));
        }
    }

    public function perfil(){
        if(auth()->user()->tipo==1){
            $maestro = App\Profesor::where('user',auth()->user()->id)->first();
           
            return view('perfil', compact('maestro'));
        }else{
            $alumno= App\Alumno::where('user', auth()->user()->id)->first();
            return view('perfil', compact('alumno'));
        }
        
    }

    public function updateUser(Request $request){
        App\User::where('id','=',auth()->user()->id)->update(
            array('name'=> $request->name,
            'ap_paterno'=> $request->paterno,
            'ap_materno'=> $request->materno,)
        );

        return back();
    }

    public function updateMaestro(Request $request){
        $maestro = App\Profesor::where('user',auth()->user()->id)->first();
        App\Profesor::where('id','=',$maestro->id)->update(
            array('nivelEstudios'=>$request->nivelEstudios,
            'IdiomaImparte'=> $request->idioma,
            'nivelesIdioma'=> $request->nivelImparte,
            'aniosExp'=> $request->aniosExp,
            'telefono'=> $request->telefono,)
        );
        
        return back();
    }

    public function updateAlumno(Request $request){
        $alumno= App\Alumno::where('user', auth()->user()->id)->first();
        App\Alumno::where('id','=',$alumno->id)->update(
            array('curp'=>$request->curp,
            'nivel'=> $request->nivel,
            'grado'=> $request->grado,
            'grupo'=> $request->grupo,)
        );
        return back();
    }


    public function createPost(Request $request){
        if(auth()->user()->tipo==1){
            try{
                $request->validate([
                    "tema"=>'required',
                    "categoria"=>'required',
                    'descripcion'=>['required','max:400'],
                    'carga'=>'required',
        
                ]);
                echo "entró";
                $maestro =  App\Profesor::where('user',auth()->user()->id)->first();
                $tipoCarga= $request->carga;
        
                switch($tipoCarga){
                    case 'enlace':
                        App\Post::create([
                            'profesor' => $maestro->id, 
                            'tema'=> $request['tema'],
                            'categoria'=> $request['categoria'],
                            'tipo'=> 1, 
                            'descripcion'=> $request['descripcion'],
                            'nombreArchivo'=> $request['nombreArchivo2'],
                            ]);
                           
                           return redirect()->back();
        
                    break;
                }
            }catch(\Illuminate\Database\QueryException $ex){
                dd($ex->getMessage()); 
            }

        }else{

            return redirect()->back();
        }

       
    }

}
