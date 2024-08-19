<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.metas')
        @livewireStyles
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="__body">
        <div id="loading">
            <h2 class="display-5">Cargando...</h2>
        </div> <!-- Loader -->

        @include('partials.navbar')
        <main class="container-fluid main px-0" id="main">
            <section id="banner">
                @include('partials.banner')
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
        </main>

        <!-- container -->
        @include('partials.scripts')
    </body>
</html>
