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

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @stack('js')
        @livewireScripts
    </body>
</html>
