@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>La Merced</h1>
@stop

@section('content')
    <p>Hola estamos en la pagina de inicio de La merced .</p>


    





@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}"rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
@stop