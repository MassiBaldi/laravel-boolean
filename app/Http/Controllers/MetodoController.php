<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetodoController extends Controller
{
  public function index() {
    $data = [
      'title' => 'Metodo Boolean',
      'description' => 'La Prima fantastica pagina'
    ];
    return view('metodo', $data);
  }
}
