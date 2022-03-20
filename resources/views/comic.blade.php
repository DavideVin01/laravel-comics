@extends('layouts.main')
<link rel="stylesheet" type="text/css" href="{{ asset('css/comic.css') }}">


@section('main')
    <section>
        <div class="box-blue"></div>
    </section>
    <div class="container">
        <div class="row">

            <div class="col-8">
                <img class="mb-5" src="{{ $comic['thumb'] }}" alt="">
                <h2 class="text-uppercase">{{ $comic['title'] }}</h2>
                <div class="box-green p-1 my-3">
                    <div id="comic-price" class="text-white"><strong>Comic Price:</strong> {{ $comic['price'] }}</div>
                </div>
                <div id="comic-description">{{ $comic['description'] }}</div>
            </div>
            <div class="col-4 d-flex align-items-end">
                <div class="ms-5">
                    <div class="d-flex justify-content-end">ADVERTISEMENT</div>
                    <div id="adv-img">
                        <img src="{{ asset('/img/advertise.jpg') }}" alt="ADV">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
