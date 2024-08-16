<nav class="navbar navbar-expand-lg fixed-top" id="navMenu">
    <div class="container-fluid">
        <a class="navbar-brand ps-xl-5" href="{{ url('/') }}">
            <img src="{{ asset('images/header/logo_header.svg') }}" class="__logo_header" alt="{{ env('APP_NAME') }}">
        </a>
        <button class="btn navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
            <div class="burger-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarAdvance_Detail">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#banner">{{ config('recycle.web.navbar.inicio') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicios">{{ config('recycle.web.navbar.servicios') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#nosotros">{{ config('recycle.web.navbar.nosotros') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">{{ config('recycle.web.navbar.contacto') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#workshops">{{ config('recycle.web.navbar.workshops') }}</a>
                </li>
            </ul>
            {{-- Redes sociales --}}
            <div class="d-flex ps-3 pe-xl-5">
                <a href="#">
                    <img class="insta img-fluid me-3" src="{{ asset('images/content/instagram.svg') }}" alt="Instagram Advance">
                </a>
                <a href="#">
                    <img class="face img-fluid" src="{{ asset('images/content/facebook.svg') }}" alt="Facebook Advance">
                </a>
            </div>
        </div>
    </div>
</nav>


<div class="offcanvas offcanvas-start" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
    <div class="offcanvas-header bg-gray">
        <h5 class="offcanvas-title" id="staticBackdropLabel">{{ env('APP_NAME', 'ADVANCE') }}</h5>
        <div class="x-icon ms-auto" data-bs-dismiss="offcanvas" aria-label="Close">
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="offcanvas-body bg-gray">
        <div>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item border">
                    <a class="nav-link fw-bold active" aria-current="page" href="#banner">{{ config('recycle.web.navbar.inicio') }}</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link fw-bold" href="#servicios">{{ config('recycle.web.navbar.servicios') }}</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link fw-bold" href="#nosotros">{{ config('recycle.web.navbar.nosotros') }}</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link fw-bold" href="#contacto">{{ config('recycle.web.navbar.contacto') }}</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link fw-bold" href="#workshops">{{ config('recycle.web.navbar.workshops') }}</a>
                </li>
            </ul>
        </div>
    </div>
</div>
