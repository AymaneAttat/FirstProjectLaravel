@extends('layouts.app')

@section('content')
    <br>
    <h2>Post</h2>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="list-group-item ">
                <div class = "well">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3 class="well"><a href="/Post/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written at {{$post->created_at}} by {{$post->user->name}}</small>       
                        </div>
                        
                                
                    </div>
                </div>
            </div>
        @endforeach
        <br>
        {{$posts->links()}}
    @else
        <p>No posts found -_-</p>
    @endif    
@endsection