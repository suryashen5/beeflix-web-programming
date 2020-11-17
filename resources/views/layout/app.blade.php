<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BeeFlix - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Custom -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #121212;
                color: #fff;
                font-family: 'Titillium Web', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                padding: 0.5%;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <h1>BeeFlix</h1>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{url()->previous()}}" type="button" class="btn btn-light"><i class="fa fa-arrow-left" aria-hidden="true"></i> KEMBALI</a>
            <a href="/" type="button" class="btn btn-outline-light">LIHAT SEMUA FILM</a>
        </div>
        @yield('content')

        <footer class="footer">© 2020 Surya Shenjaya, All rights reserved.</footer>
    </body>
</html>
