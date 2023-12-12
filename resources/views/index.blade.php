@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <h1 class='p-5 mb-5 fs-1 text-center'> I Film che Hanno Detto Di Mettere</h1>
    <div class="container">
        <div class='row row-custom'>
            @foreach ($movies as $movie)
                <div class='col-3 p-3'>
                    <div class='card p-4 text-center card-custom'>
                        <div class='card-head'>
                            <h2>{{$movie -> title}}</h2>
                        </div>
                        <div class="card-body">
                            <p>Titolo originale: {{$movie -> original_title}}</p>
                            <p>Nazionalità: {{$movie -> nationality}}</p>
                            <p>Data di uscita: {{$movie -> date}}</p>
                            <p>Voto: {{$movie -> vote}}</p>
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    


@endsection