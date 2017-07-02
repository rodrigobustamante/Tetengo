@extends('layouts.app')

@section('content')
  <div class="col-md-12">
    {!! Form::open([
      'route' => 'patients.store']) 
    !!}

    {!! Form::close() !!}
  </div>
@endsection()