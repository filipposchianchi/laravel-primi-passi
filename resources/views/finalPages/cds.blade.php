@extends('layouts.base')

@section('content')

@foreach ($infos as $info)

    <div class="cd">
        <img src= {{ $info["poster"]}} />

        <div class="infos">
            <h3>{{ $info["title"] }}</h3>
            <small>{{ $info["author"]}}</small>
            <strong>{{ $info["year"]}}</strong>
        </div>
    </div>
    
@endforeach

@endsection