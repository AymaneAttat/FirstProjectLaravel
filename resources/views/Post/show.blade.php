@extends('layouts.app')

@section('content')
    <br>
    <a href="/Post" class="btn btn-secondary">Go back</a>
    <h2>{{$post->title}}</h2>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"><br><br>
    <div>{!!$post->body!!}</div><hr>
    <small>Written at {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/Post/{{$post->id}}/edit" class="btn btn-success">Edit</a>
            {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection