<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorsoController extends Controller
{
  public function index() {
    $data = [
      'title' => 'Corso Boolean',
      'description' => 'La Prima fantastica pagina'
    ];
    return view('corso', $data);
  }
}
