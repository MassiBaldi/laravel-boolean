<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index() {
    $data = [
      'title' => 'Homepage Boolean',
      'description' => 'La Prima fantastica pagina'
    ];
    return view('home', $data);
  }
}
