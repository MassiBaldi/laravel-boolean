@extends('layouts.app')
@section('title')
  Home
@endsection

@section('content')
  <div class="jumbo">
    <div class="container">
      <div class="jumbo_left">
        <h1>Diventa sviluppatore web</h1>
        <p>6 mesi di <strong>corso intensivo online in diretta</strong> per imparare da zero il mestiere di web developer e <strong>trovare un nuovo lavoro</strong> nelle aziende top del settore</p>
        <a href="#">scopri il corso</a>
      </div>
      <div class="jumbo_right">
        <img src="{{ asset('img/boolean.png')}}" alt="">
      </div>
    </div>
  </div>
  <div class="partners">
    <div class="cont">
      <h3>I nostri studenti sono stati assunti da</h3>
      <div class="cont_img">
        <img src="{{ asset('img/facile_it.png')}}" alt="">
        <img src="{{ asset('img/oneday.png')}}" alt="">
        <img src="{{ asset('img/cayenne.png')}}" alt="">
        <img src="{{ asset('img/softec.png')}}" alt="">
        <img src="{{ asset('img/fabbrica_digitale.png')}}" alt="">
      </div>
    </div>
  </div>



@endsection
