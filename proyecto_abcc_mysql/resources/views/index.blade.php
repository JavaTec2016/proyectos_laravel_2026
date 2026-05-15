@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @include('indexContent')
@stop

@section('css')
    {{-- Extra CSS here --}}
@stop

@section('js')
    <script>
        console.log("AdminLTE dashboard loaded.");
    </script>
@stop
