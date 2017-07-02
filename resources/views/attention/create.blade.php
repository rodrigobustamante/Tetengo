@extends('layouts.app')

@section('content')
  <div class="col-md-8 col-md-offset-2">
    {!! Form::open(['route' => 'attentions.store']) !!}
    <div class="form-group">
      {!! Form::label('date', 'Día de la consulta') !!}
      {!! Form::date('date')!!}
    </div>
    <div class="form-group">
      {!! Form::label('hour', 'Hora de la consulta') !!}
      {!! Form::number('hour')!!}
      {!! Form::number('minute')!!}
    </div>
    <div class="form-group">
      {!! Form::label('patient_id', 'Nombre del paciente')!!}
      {!! Form::select('patient_id', $patients) !!}
    </div>
    <div class="form-group">
      {!! Form::label('doctor_id', 'Nombre del doctor') !!}
      {!! Form::select('doctor_id', $doctors) !!}  
    </div>
    <div class="form-group">
      <button class="btn btn-primary">Agendar atención médica</button>
    </div>
    {!! Form::close() !!}
  </div>
@endsection()