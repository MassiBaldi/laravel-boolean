@extends('layouts.app')
@section('title', $title)
@section('meta_description', $description)

@section('content')
  <div class="container">
    <div class="cont_student">
      <div class="row">
        <div class="col-12">
          <div class="nav_student">
            <select id="gender">
              <option value="">---</option>
              <option value="m">Maschio</option>
              <option value="f">Femmina</option>
            </select>
            <button id="filtra">Filtra</button>
          </div>
        </div>
        @foreach (config('students') as $student)
          <div class="col-6">
            <div class="student">
              <div class="student-left">
                <img src="{{ $student['img'] }}" alt="{{ $student['name'] }}">
              </div>
              <div class="student-right">
                <h3>
                  <a href="{{ route('show', $student['slug']) }}">{{ $student['name'] }} ({{ $student['age'] }} anni)</a>
                </h3>
                <small>Ora è Web Developer in {{ $student['azienda'] }}</small>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
