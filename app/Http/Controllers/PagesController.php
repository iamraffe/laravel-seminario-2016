<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index(){
      return view('pages.index');
    }

    public function programa(){
      return view('pages.programa');
    }

    public function premios(){
      return view('pages.premios');
    }

    public function como_llegar(){
      return view('pages.como_llegar');
    }

    public function terms_and_conditions(){
      return view('pages.terms_and_conditions');
    }
}
