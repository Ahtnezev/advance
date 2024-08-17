<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME', 'Advance Detail') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Styles Map -->
        <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        @livewireStyles
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="__body">
        @include('partials.navbar')

        <!-- This div make the magic :) -->
        <div class="godown-60" id="godown"></div>

        <main class="container-fluid main px-0">
            <section id="banner">
                <div class="d-flex">
                    <div class="banner__img image-in" style="background-image: url({{ asset('images/content/banner_01.webp') }})" role="banner"></div>
                    <div class="banner__content position-absolute">
                        <h1 class="banner__title text-end">{{ config('recycle.web.banner.title') }}</h1>
                        <p class="banner__info text-end">{{ config('recycle.web.banner.text') }}</p>
                    </div>
                </div> <!-- d-flex -->
            </section> <!-- #banner -->

            <section id="servicios">
                @include('partials.servicios')
            </section> <!-- #servicios -->

            <section id="productos-calidad">
                @include('partials.productos-calidad')
                @include('partials.wrap')
            </section> <!-- #productos-calidad -->

            <section id="nosotros">
                @include('partials.nosotros')
            </section> <!-- #nosotros -->

            <section id="contacto">
                @include('partials.contacto')
            </section> <!-- #contacto -->

            <section id="workshops">
                @include('partials.workshops')
            </section> <!-- #workshops -->

            <footer id="footer">
                @include('partials.footer')
            </footer> <!-- #footer -->

        </main> <!-- container -->

        {{-- Scripts --}}
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('js/jquery371.min.js') }}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('js/leaflet.js') }}" crossorigin=""></script>
        @stack('js')
        @livewireScripts
    </body>
</html>
