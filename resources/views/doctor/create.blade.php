@extends('layouts.app')

@section('content')
  <div class="col-md-12">
    {!! Form::open([
      'route' => 'doctors.store']) 
    !!}
      <div class="form-group">
        {!! Form::label('rut', 'Rut del doctor') !!}
        {!! Form::text('rut') !!}
      </div>
      <div class="form-group">
        {!! Form::label('name', 'Nombre del doctor') !!}
        {!! Form::text('name') !!}
      </div>
      <div class="form-group">
        {!! Form::label('date_of_hire', 'Fecha de contratación') !!}
        {!! Form::date('date_of_hire') !!}
      </div>
      <div>
        {!! Form::label('speciality', 'Especialidad') !!}
        {!! Form::text('speciality') !!}
      </div>
      <div>
        {!! Form::label('price', 'Valor consulta') !!}
        {!! Form::text('price') !!}
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Contratar doctor</button>
      </div>
    {!! Form::close() !!}
  </div>
@endsection()