@extends('layouts.app')

@section('content')
    {{-- <h1>Items</h1> --}}
    <a class="btn btn-primary m-3" href="/posts/create">Add Item</a>
    @if(count($posts) > 0)
    
        {{$posts->links()}}
        @foreach($posts as $post) 
        <div class="well border p-1">
            {{-- <h3><a href="/posts/{{$post->id}}">  {{$post->title}} </a></h3> --}}
            {{-- <h3> Order #: {{$post->title}} </h3>
            <h4> Serial #: {{$post->body}} </h4>             --}}
            {{-- <small>Written on {{$post->created_at}}</small> --}}
            {{-- <hr> --}}
            <div class="row">
            <div class="col-md-4 col-sm-4">
                <p> Order #: {{$post->title}} </p>
            </div>
            <div class="col-md-4 col-sm-4">
                <p> Serial #: {{$post->body}} </p>
            </div>
            <div class="col-md-4 col-sm-4">
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'Post', 'class' => 'float-left'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary ml-3">Edit</a>
            </div>
            </div>
                               

        </div>
        @endforeach

    @else
        <p>No posts found<p>
    @endif
@endsection