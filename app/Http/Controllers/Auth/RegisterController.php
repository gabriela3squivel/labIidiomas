<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

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
            'ap_paterno' => ['required', 'string'],
            'ap_materno'=>['required','string'],

        ]);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $request
     * @return \App\User
     */
    protected function create(array $request)
    {   

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
                'nivelEstudios'=> $data['nivelEstudios'],
                'IdiomaImparte'=> $data['idioma'],
                'nivelesIdioma'=> $data['nivelImparte'], 
                'aniosExp'=> $data['aniosExp'],
                'telefono'=> $data['telefono'],
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

        return $user;
    }

    public function register(Request $request){
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return $this->registered($request, $user)
           ?: redirect($this->redirectPath());
         //return "hola";
    }
}
