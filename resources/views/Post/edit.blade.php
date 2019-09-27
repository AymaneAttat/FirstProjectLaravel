@extends('layouts.app')

@section('content')
    <br>
    <h2>Create Post</h2>
    {{ Form::open(['action' => ['PostController@update', $post->id], 'methode' => 'POST', 'enctype' => 'multipart/form-data']) }}
        <div class='form-group'>
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div> 
        <div class='form-group'>
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body text'])}}       
        </div>
        <div class='form-group'>
                {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}  
        {{Form::submit('submit', ['class' => 'btn btn-primary'])}} 
        <div class ="float-right"><a href="/dashboard" class="btn btn-secondary">Go back</a></div>
    {{ Form::close() }}    
@endsection