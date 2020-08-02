<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;

class Correos extends Controller
{
    //
    public function enviarCorreo(Request $request){
        $message=$request->validate([
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required'

        ]);
        //$for = "andreagabrielaesquivel@gmail.com";
        /*Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("pruebasdesarrollo98@gmail.com",$request->nombre);
            $msj->subject($subject);
            $msj->to($for);
        });*/
        Mail::to('pruebasdesarrollo98@gmail.com')->send(new MensajeRecibido($message));
        //return "hola";
        return redirect("/contacto");
    }
}
