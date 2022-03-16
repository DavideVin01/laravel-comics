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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>DC COMICS</title>
</head>

<body>
    @include('includes.header')
    @include('includes.content')
    {{-- @include('includes.comic-card') --}}
    <main>
        @yield('main')
    </main>
    @include('includes.shop')
    @include('includes.links')

    @include('includes.footer')
</body>

</html>
