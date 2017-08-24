<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller{
    //

    public function home(){
      # code...
      return view('home');
    }

    public function index(){
      # code...
      return view('index');
    }

    public function chat(){
      # code...
      return view('chat');
    }

    public function editar(){
      # code...
      return view('editar');
    }



}
