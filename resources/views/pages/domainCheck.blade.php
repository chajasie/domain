@extends('default')
     @section('introText')
     <p>
       <h1>Domain Checker</h1>
       Hier wird nach Domains gesucht..
     </p>
     @stop
     @section('form')
        {!! Form::open(['url' => '/domainCheck', 'class' => 'form-inline']) !!}
            {!! Form::text('domain', null, ['class' => 'form-control']) !!}
            {!! Form::submit('Domain suchen', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
     @stop
     @section('content')
          @if( isset($domain) )
            <p>
              Die Domain "{!! $domain !!}" ist nicht vorhanden! (Dies ist ein statischer Text)
            </p>
          @endif
     @stop


     <!-- if domain frei -->
