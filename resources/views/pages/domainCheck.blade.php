@extends('default')
     @section('content')
         Dies ist der domainCheck-Bereich
     @stop
     @section('form')
        {!! Form::open(['url' => '/domainCheck', 'class' => 'form-inline']) !!}
            {!! Form::text('domain', null, ['class' => 'form-control']) !!}
            {!! Form::submit('Domain suchen', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
     @stop

     <!-- if domain frei -->
