@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    {{-- <h1>{{$title1}}</h1> --}}
    <h1>Welcome to NCA</h1>
    {{-- <p>sdf</p> --}}
    <p>
        <a class="btn btn-primary btn-lg m-5" href="/login" role="button">Login</a>
        <a class="btn btn-primary btn-lg m-5" href="/register" role="button">Register</a>
    </p>
@endsection
