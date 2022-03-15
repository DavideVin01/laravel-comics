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
    <header>
        <div class="bg-white shadow">
            <div class="container">
                <header>
                    <img id="header-logo" src="../assets/dc-logo.png" alt="DC LOGO" />
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
    </header>
    <section>
        <div id="content" class="bg-black">
            <div class="container"></div>
        </div>
    </section>
    <main></main>
    <footer></footer>
</body>

</html>
