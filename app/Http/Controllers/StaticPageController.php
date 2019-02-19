<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
  public function privacyPolicy() {
    // $title = 'Privacy-Policy';
    return view('privacy_policy');//, compact('title'));
  }

  public function lavoraConNoi() {
    // $title = 'Lavora-Con-Noi';
    return view('lavora_con_noi');//, compact('title'));
  }
}
