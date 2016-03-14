<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegistrationsController extends Controller
{
    public function index(){
      return view('registrations.index');
    }

    public function register(Request $request){
        $validator = \Validator::make($request->all(), [
            'nombre' => 'required',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'required',
            'centro' => 'required',
            'ciudad' => 'required',
            'cargo' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
        ]);
        // dd($request->all(), $validator->fails());
        if ($validator->fails()) {
            return redirect('/registro')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Registration::create($request->all());

        $email = strtolower($request->email);
        $name = $request->nombre.' '.$request->primer_apellido.' '.$request->segundo_apellido;

        // SEND EMAILS
        \Mail::queue('emails.registration_user_notification',
                    $request->all(),
                   function($message) use ($email, $name)
                    {
                      $message->from("seminario.excelencia@quironsalud.es", "Quirónsalud");
                      $message->to($email, $name)->subject('Inscripción 3er Seminario Internacional de Seguridad del Paciente y Excelencia Clínica');
                    });
        
        // SEND EMAILS
        \Mail::queue('emails.registration_owner_notification',
                    $request->all(),
                   function($message)
                    {
                      $message->from("noreply@quironsalud.es", "Quirónsalud");
                      $message->to('seminario.excelencia@quironsalud.es', '3er Seminario Internacional de Seguridad del Paciente y Excelencia Clínica')->subject('Nuevo Registro en la Base de Datos [Seminario - 2016]');
                    });

        \Session::flash('message', 'Usted se ha registrado correctamente.'); 

        return view('registrations.index');
    }
}
