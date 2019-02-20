<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
  public function privacyPolicy() {
    $data = [
      'title' => 'Privacy Policy',
      'description' => 'La Prima fantastica pagina'
    ];
    return view('privacy_policy', $data);
  }
  public function lavoraConNoi() {
    $data = [
      'title' => 'Lavora Con Noi',
      'description' => 'La Prima fantastica pagina'
    ];
    return view('lavora_con_noi', $data);
  }
}
