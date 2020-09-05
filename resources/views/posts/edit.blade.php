@extends('layouts.app')

@section('content')
    <h1>Edit Item</h1>

    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Order #')}}
            {{Form::text('title',$post->title,['class'=>'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Serial #')}}
            {{Form::text('body',$post->body,['class'=>'form-control', 'placeholder' => ''])}}    
        </div>    
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        
    {!! Form::close() !!}

@endsection