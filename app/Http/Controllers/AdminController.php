<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Registration;
use Illuminate\Http\Request;

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
}
