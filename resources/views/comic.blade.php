@extends('layouts.main')
<link rel="stylesheet" type="text/css" href="{{ asset('css/comic.css') }}">


@section('main')
    <div class="container">
        <section>
            {{-- Blue Section --}}
        </section>
        <section>
            <h2 class="text-uppercase">{{ $comic['title'] }}</h4>
                <div id="comic-price">{{ $comic['price'] }}</div>
                <div id="comic-description">{{ $comic['description'] }}</div>
        </section>
    </div>
@endsection
