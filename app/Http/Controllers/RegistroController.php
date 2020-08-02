<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

use App\Http\Controllers\Controller;
use App\User;
use App\Profesor;
use App\Alumno;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegistroController extends Controller
{
    //
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $request)
    {
        return Validator::make($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'tipo' =>['required'],
            'paterno' => ['required', 'string'],
            'materno'=>['required','string'],

        ]);
    }

    public function messages(){
    return [
        'email.email' => 'Por favor ingresa una dirección válida, ej: example@gmail.com',
        'email.unique' => 'Ya existe un usuario con ese email',
        'password.alpha_num' =>'La contraseña debe tener carácteres alfanúmericos',
        'password.between' =>'La contraseña debe tener un mínimo de 4 carácteres',
        'email.email' => 'Por favor ingresa una dirección válida, ej: example@gmail.com',
        'email.unique' => 'Ya existe un usuario con ese email',
        'curp.alpha_num'=>'Recuerda que tu CURP contiene caracteres alfanuméricos',
        'aniosExp.required' =>'Los años de experiencia son necesarios',
    ];
}
    
    public function registro(Request $request){
        if($request['tipo']=="maestro"){
            echo "entra a validar maestro";
            if(!$this->validate($request,[
                'nivelEstudios' => 'required',
                'idioma' =>  ['required', 'string','between:6,14'],
                'nivelImparte' => ['required', 'string'],
                'aniosExp' => ['required', 'numeric'],
                'telefono' => ['required','string','max:10'],
             ])){
                return back()->withErrors('Algo salió mal, verifique la información ingresada')
                ->withInput($request->all());
            };

        }else{
            $this->validate($request,[
                'curp' => ['required','max:18','alpha_num'],
                'nivel' =>  'required',
                'grado' => 'required',
                'grupo' => 'required'
             ]);

        } 

        $this->validator($request->all())->validate();

        $tipo=0;
        if($request['tipo']=='maestro'){
            $tipo=1;
        }
        $user = User::create([
            'name' => $request['name'],
            'ap_paterno' => $request['paterno'],
            'ap_materno' => $request['materno'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'tipo' => $tipo,
        ]);

        if($tipo==1){
            Profesor::create([
                'user' => $user->id, 
                'nivelEstudios'=> $request['nivelEstudios'],
                'IdiomaImparte'=> $request['idioma'],
                'nivelesIdioma'=> $request['nivelImparte'], 
                'aniosExp'=> $request['aniosExp'],
                'telefono'=> $request['telefono'],
                ]);
        }else{
            Alumno::create([
                'user' => $user->id,
                'curp' => $request['curp'],
                'nivel' =>$request['nivel'],
                'grado' =>$request['grado'],
                'grupo' =>$request['grupo'],
            ]);
        }

        return back()->with('mensaje','¡Se registró con éxito!');


    }
}
