<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/card.css') }}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap-grid.css'
        integrity='sha512-pM/iUb80UpXwRGB2/UbpFDyPtO31IE5aokTh7sYjpSY06pH3j0hXCNXGkyRn8gVod9Cbo4GdP/n98rfu6JC75Q=='
        crossorigin='anonymous' />
    <title>DC COMICS | Home</title>
</head>

<body>
    @include('includes.header')
    @include('includes.content')
    <section>
        {{-- @yield('comic-cards') --}}
        <div id="comic-card">
            <div class="container">
                <div class="main-title">CURRENT SERIES</div>
                <div class="figure d-flex flex-wrap">
                    @foreach ($comics as $comic)
                        <div class="d-flex flex-wrap flex-column mx-3 mb-4 figure-container" role="button">
                            <div>
                                <img class="grow" src="{{ $comic['thumb'] }}"
                                    alt="{{ $comic['series'] }}" />
                            </div>
                            <div class="text-uppercase">{{ $comic['series'] }}</div>
                        </div>
                    @endforeach
                </div>
                <div id="btn-container" class="d-flex justify-content-center">
                    <button id="load-more" class="grow" type="button">LOAD MORE</button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="shop" class="bg-blue shadow">
            <div class="container p-0">
                <ul>
                    <li>
                        <figure role="button" class="grow">
                            <img src="{{ asset('/img/buy-comics-digital-comics.png') }}" alt="DIGITAL COMICS" />
                            <span class="li-text">DIGITAL COMICS</span>
                        </figure>
                    </li>
                    <li>
                        <figure role="button" class="grow">
                            <img src="{{ asset('/img/buy-comics-merchandise.png') }}" alt="DC-MERCHANDISE" />
                            <span class="li-text">DC MERCHANDISE</span>
                        </figure>
                    </li>
                    <li>
                        <figure role="button" class="grow">
                            <img src="{{ asset('/img/buy-comics-subscriptions.png') }}" alt="SUBSCRIPTION" />
                            <span class="li-text">SUBSCRIPTION</span>
                        </figure>
                    </li>
                    <li>
                        <figure role="button" class="grow">
                            <img src="{{ asset('/img/buy-comics-shop-locator.png') }}" alt="COMIC SHOP LOCATOR" />
                            <span class="li-text">COMIC SHOP LOCATOR</span>
                        </figure>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div id="links">
            <div class="container d-flex">
                <div class="links-box">
                    <div class="single-column d-flex flex-column">
                        <ul id="dc-comics" class="d-flex flex-column">
                            <li>
                                <h3>DC COMICS</h3>
                            </li>
                            <li><a href="#">Characters</a></li>
                            <li><a href="#">Comics</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                        <ul id="shop-link" class="d-flex flex-column p-0">
                            <li>
                                <h3>SHOP</h3>
                            </li>
                            <li><a href="#">Shop DC</a></li>
                            <li><a href="#">Shop DC Collectibles</a></li>
                        </ul>
                    </div>
                </div>
                <div class="links-box">
                    <ul id="dc" class="d-flex flex-column">
                        <li>
                            <h3>DC</h3>
                        </li>
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy policy (new)</a></li>
                        <li><a href="#">Ad Choices</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">Talent Workshops</a></li>
                        <li><a href="#">CPSC Certificates</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="links-box">
                    <ul id="sites" class="d-flex flex-column p-0">
                        <li>
                            <h3>SITES</h3>
                        </li>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @include('includes.footer')
</body>

</html>
