@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class='row'>
    @foreach ($movies as $movie)
        <div class='col-3'>
            <div class='card'>
                <h2>{{$movie -> title}}</h2>
                
            </div>
        </div>
    @endforeach
    </div>


@endsection