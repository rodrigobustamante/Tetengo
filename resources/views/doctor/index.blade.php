@extends('layouts.app')

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <table class="table">
      <tr>
        <th>Rut</th>
        <th>Nombre</th>
        <th>Fecha de contratación</th>
        <th>Especialiad</th>
        <th>Valor consulta</th>
        <th>Acciones</th>
      </tr>
      @foreach($doctors as $doctor)
      <tr>
        <td>{{ $doctor->rut }}</td>
        <td>{{ $doctor->name }}</td>
        <td>{{ $doctor->date_of_hire }}</td>
        <td>{{ $doctor->speciality }}</td>
        <td>${{ $doctor->price }}</td>
        <td>
          <a class="btn btn-primary" href="{{ route('doctors.show', $doctor->id) }}">Ver</a>|
          <a class="btn btn-danger"  href="{{ route('doctors.destroy', $doctor->id) }}">Despedir</a>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
@endsection()