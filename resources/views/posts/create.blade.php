@extends('layouts.app')

@section('content')
    <h1>Create Item</h1>

    {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Order #')}}
            {{Form::text('title','',['class'=>'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Serial #')}}
            {{Form::text('body','',['class'=>'form-control', 'placeholder' => ''])}}    
        </div>    
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        
    {!! Form::close() !!}

@endsection