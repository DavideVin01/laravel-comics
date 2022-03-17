@extends('layouts.main')
<link rel="stylesheet" type="text/css" href="{{ asset('css/comic.css') }}">


@section('main')
    <div class="container">
        <section>
            {{-- Blue Section --}}
        </section>
        <section>
            <img class="mb-5" src="{{ $comic['thumb'] }}" alt="">
            <h2 class="text-uppercase">{{ $comic['title'] }}</h2>
            <div class="box-green">
                <div id="comic-price">{{ $comic['price'] }}</div>
            </div>
            <div class="d-flex">
                <div id="comic-description">{{ $comic['description'] }}</div>
                <div class="ms-5">
                    <div>ADVERTISEMENT</div>
                    <div id="adv-img">
                        <img src="{{ asset('/img/advertise.jpg') }}" alt="ADV">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
