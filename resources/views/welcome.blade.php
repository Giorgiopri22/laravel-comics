@extends('layout.app')

@section('content')
<main>
    <div id="jumbotron">
    </div>

    <div class="box position-relative">
        <h2 class="text-white etichetta">CURRENT SERIES</h2>
        <div class="container">
            @foreach ($arrayComics as $comic)
            <div class="carta">
                <div>
                    <img src="{{ $comic['thumb'] }}" alt="">
                </div>
                <h6 class="text-white">{{ $comic['series'] }}</h6>
            </div>
            @endforeach
        </div>
        <div id="button">LOAD MORE</div>
    </div>
</main>
@endsection