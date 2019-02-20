@extends('layouts.app')

@section('content')

<div class="cont_card">
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{ $student['img'] }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $student['name'] }}</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Anni: {{ $student['age'] }}</li>
      <li class="list-group-item">Web Developer in {{ $student['azienda'] }}</li>
      <li class="list-group-item">Sesso: {{ $student['gender'] }}</li>
    </ul>
  </div>
</div>


@endsection
