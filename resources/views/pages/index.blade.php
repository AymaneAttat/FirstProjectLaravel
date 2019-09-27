@extends('layouts.app')
@section('content')
    <br>
    <div class = "jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is My First Laravel Application I Hope You Like it</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a><a class="btn btn-success btn-lg" href="/register" role="button">register</a></p>
    </div>      
@endsection
        