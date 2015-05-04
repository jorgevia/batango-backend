@extends('app')

@section('content')
    @foreach($magazines as $magazine)
        <h1>Revista BATango número: {{$magazine->issue}}</h1>
        <h2>From: {{$magazine->present()->fromDate}}</h2>
        <h2>To: {{$magazine->present()->toDate}}</h2>
    @endforeach
@stop
