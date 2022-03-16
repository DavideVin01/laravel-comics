    @extends('layouts.main')

    @section('main')
        <div id="comic-card">
            <div class="container">
                <div class="main-title">CURRENT SERIES</div>
                <div class="figure d-flex flex-wrap">
                    @foreach ($comics as $index => $comic)
                        <div class="d-flex flex-wrap flex-column mx-3 mb-4 figure-container" role="button">
                            <a href="{{ route('comic', ['id' => $index]) }}">
                                <img class="grow" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" />
                                <div class="text-uppercase">{{ $comic['series'] }}</div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div id="btn-container" class="d-flex justify-content-center">
                    <button id="load-more" class="grow" type="button">LOAD MORE</button>
                </div>
            </div>
        </div>
    @endsection
