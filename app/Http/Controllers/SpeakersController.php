<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Speaker;

class SpeakersController extends Controller
{
    public function index(){
      $speakers = Speaker::all();
      return view('speakers.index', compact('speakers'));
    }

    public function show($slug){
      $speaker = Speaker::where('slug', $slug)->first();
      return view('speakers.show', compact('speaker'));
    }
}
