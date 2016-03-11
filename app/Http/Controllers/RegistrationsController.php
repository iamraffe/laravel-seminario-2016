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
        dd($request->all(), $validator->fails());
        if ($validator->fails()) {
            return redirect('/registro')
                        ->withErrors($validator)
                        ->withInput();
        }

        \Registration::create($request->all());

        // SEND EMAILS
    }
}
