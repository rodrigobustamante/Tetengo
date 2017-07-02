@extends('layouts.app')

@section('content')
  <div class="col-md-12">
    {!! Form::open([
      'route' => 'patients.store']) 
    !!}
      <div class="form-group">
        {!! Form::label('rut', 'Rut del paciente')!!}
        {!! Form::text('rut')!!}
      </div>
      <div class="form-group">
        {!! Form::label('name', 'Nombre del paciente')!!}
        {!! Form::text('name')!!}
      </div>
      <div class="form-group">
        {!! Form::label('birthdate', 'Fecha de nacimiento')!!}
        {!! Form::date('birthdate')!!}
      </div>
      <div class="form-group">
        {!! Form::label('gender', 'Género')!!}
        {!! Form::select('gender', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino'])!!}
      </div>
      <div class="form-group">
        {!! Form::label('address', 'Dirección del paciente')!!}
        {!! Form::text('address')!!}
      </div>
      <div class="form-group">
        {!! Form::label('phone', 'Teléfono del paciente')!!}
        {!! Form::text('phone')!!}
      </div>
      <div class="form-group">
        {!! Form::label('user_id', 'Correo del paciente')!!}
        {!! Form::select('user_id', $users)!!}
      </div>
      <div class="form-group">
        <button class="btn btn-primary">Ingresar paciente</button>
      </div>
    {!! Form::close() !!}
  </div>
@endsection()