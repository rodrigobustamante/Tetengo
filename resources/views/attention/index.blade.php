@extends('layouts.app')

@section('content')
  <div class="col-md-8 col-md-offset-2">
    <table class="table">
      <tr>
        <th>Fecha de la atención</th>
        <th>Nombre del paciente</th>
        <th>Nombre del médico</th>
        <th>Estado de la atención</th>
      </tr>
      @foreach($attentions as $attention)
      <tr>
        <td>{{ $attention->date_of_care }}</td>
        <td>{{ $attention->patient->name }}</td>
        <td>{{ $attention->doctor->name }}</td>
        <td>{{ $attention->state->state }}</td>
      </tr>
      @endforeach
    </table>
  </div>
@endsection()