@extends('layouts.main')
<link rel="stylesheet" type="text/css" href="{{ asset('css/comic.css') }}">


@section('main')
    <div class="container">
        <section>
            {{-- Blue Section --}}
        </section>
        <section>
            @foreach ($comics as $index => $comic)
                <h4>{{ $comic['title'] }}</h4>
            @endforeach
        </section>
    </div>
@endsection
