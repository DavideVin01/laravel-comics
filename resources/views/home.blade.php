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
    @include('includes.header')
    @include('includes.content')
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
    @include('includes.footer')
</body>

</html>
