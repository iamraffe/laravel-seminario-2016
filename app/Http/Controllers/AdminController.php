<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Registration;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Display Dashboard
     *
     * @return Response
     */
    public function index()
    {
      $registrations = Registration::all();

      // dd($registrations);

      return view('admin.index', compact('registrations'));

    }

    public function export_excel(){

      $users = Registration::all();

      \Excel::create('registros_seminario_2016_'.Carbon::now()->format('d.m_H.i.s'), function($excel) use ($users) {

          $excel->sheet('Inscripciones Seminario 2016', function($sheet) use ($users) {

              $sheet->loadView('exports.excel', ['users' => $users]);

          });

      })->download('xlsx');

    }
}
