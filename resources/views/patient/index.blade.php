@extends('layouts.app')

@section('content')
  <div class="col-md-9 col-md-offset-1">
    <table class="table">
      <tr>
        <th>Rut</th>
        <th>Nombre</th>
        <th>Fecha de Nacimiento</th>
        <th>Genero</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Correo Electrónico</th>
        <th>Acciones</th>
      </tr>
      @foreach($patients as $patient)
      <tr>
        <td>{{ $patient->rut }}</td>
        <td>{{ $patient->name }}</td>
        <td>{{ $patient->birthdate }}</td>
        <td>{{ $patient->gender }}</td>
        <td>{{ $patient->address }}</td>
        <td>{{ $patient->phone }}</td>
        <td>{{ $patient->user->email }}</td>
        <td>
          <a class="btn btn-primary" href="{{ route('patients.show', $patient->id) }}">Ver</a>|
          <a class="btn btn-danger" href="{{ route('patients.destroy', $patient->id) }}">Eliminar</a>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
@endsection()