@extends('app')

@section('content')
    @foreach($magazines as $magazine)
        <h1>Revista BATango número: {{$magazine['issue']}}</h1>
    @endforeach
@stop
