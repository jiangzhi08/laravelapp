@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Go Back</a>
    <h1>{{$post->title}}</h1>
        <div class="well">
            {{$post->body}} 
        </div>
        <small>Written on {{$post->created_at}}</small>
@endsection