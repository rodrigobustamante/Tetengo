@extends('layouts.app')

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <div class="">
      {{ $doctor->rut }}
      {{ $doctor->name }}
      {{ $doctor->date_of_hire }}
      {{ $doctor->speciality }}
      {{ $doctor->price }}
    </div>
  </div>
@endsection