@extends('layouts.app')

@section('content')
    <br>
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
        <ul class ="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>    
    @endif
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Not working at this moment sorry</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endsection

