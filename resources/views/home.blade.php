<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap-grid.css'
        integrity='sha512-pM/iUb80UpXwRGB2/UbpFDyPtO31IE5aokTh7sYjpSY06pH3j0hXCNXGkyRn8gVod9Cbo4GdP/n98rfu6JC75Q=='
        crossorigin='anonymous' />
    <title>DC COMICS | Home</title>
</head>

<body>
    <div class="bg-white">
        <div class="container">
            <header>
                <img id="header-logo" src={{ asset('/img/dc-logo.png') }} alt="DC LOGO" />
                <ul>
                    <li>
                        <a href="{{ route('characters') }}">Characters</a>
                    </li>
                    <li>
                        <a href="{{ route('comics') }}">Comics</a>
                    </li>
                    <li>
                        <a href="{{ route('movies') }}">Movies</a>
                    </li>
                    <li>
                        <a href="{{ route('tv') }}">Tv</a>
                    </li>
                    <li>
                        <a href="{{ route('games') }}">Games</a>
                    </li>
                    <li>
                        <a href="{{ route('collectibles') }}">Collectibles</a>
                    </li>
                    <li>
                        <a href="{{ route('videos') }}">Videos</a>
                    </li>
                    <li>
                        <a href="{{ route('fans') }}">Fans</a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}">News</a>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}">Shop</a>
                    </li>
                </ul>
            </header>
        </div>
    </div>
    <section>
        <div id="content" class="bg-black">
            <div class="container"></div>
        </div>
    </section>
    <section>
        <div id="comic-card">
            <div class="container">
                <div class="main-title">CURRENT SERIES</div>
                <div class="figure">
                    <div class="d-flex flex-column" role="button">
                        <img class="grow" src="" alt="Cards" />
                        <div class="text-uppercase">Titolo</div>
                    </div>
                </div>
                <div id="btn-container" class="d-flex justify-content-center">
                    <button id="load-more" class="grow" type="button">LOAD MORE</button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="shop" class="bg-blue shadow">
            <div class="container">
                <ul>
                    <li>
                        <figure role="button" class="grow">
                            <img src="" alt=" item.description" />
                            <span class="li-text">Item.text</span>
                        </figure>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <footer class="bg-darkgray">
        <div class="container">
            <div class="flex">
                <div class="column">
                    <button><a>SIGN-UP NOW!</a></button>
                </div>
                <div class="column d-flex align-items-center" role="button">
                    <h3>FOLLOW US</h3>
                    <ul>
                        <li><img src="../assets/footer-facebook.png" alt="Facebook" /></li>
                        <li><img src="../assets/footer-twitter.png" alt="Twitter" /></li>
                        <li><img src="../assets/footer-youtube.png" alt="YouTube" /></li>
                        <li>
                            <img src="../assets/footer-pinterest.png" alt="Pinterest" />
                        </li>
                        <li>
                            <img src="../assets/footer-periscope.png" alt="Periscope" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
