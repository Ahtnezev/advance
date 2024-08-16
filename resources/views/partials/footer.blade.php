<div class="footer__content position-relative bg-gray">
    <img class="footer__image img-fluid" src="{{ asset('images/footer/footer.webp') }}" alt="">
    <div class="a container">
        <div class="row">
            <div class="col-12 col-sm-4">
                <div class="text-center">
                    <div class="row text-md-start">
                        <div class="col-12 col-xxl-4"></div>
                        <div class="col-12 col-md-6 col-xxl-4">
                            <ul class="simple__list">
                                <li class="fw-bold mb-2">
                                    <a class="text-gray text-decoration-none" href="#banner">{{ config('recycle.web.navbar.inicio') }}</a>
                                </li>
                                <li class="fw-bold mb-2">
                                    <a class="text-gray text-decoration-none" href="#servicios">{{ config('recycle.web.navbar.servicios') }}</a>
                                </li>
                                <li class="fw-bold mb-2">
                                    <a class="text-gray text-decoration-none" href="#nosotros">{{ config('recycle.web.navbar.nosotros') }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 col-xxl-4">
                            <ul class="simple__list">
                                <li class="fw-bold mb-2">
                                    <a class="text-gray text-decoration-none" href="#contacto">{{ config('recycle.web.navbar.contacto') }}</a>
                                </li>
                                <li class="text-gray fw-bold">
                                    <a class="text-gray text-decoration-none" href="#workshops">{{ config('recycle.web.navbar.workshops') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="b">
                    <a href="{{ url('/') }}">
                        <img class="advance__logo img-fluid" src="{{ asset('images/footer/logo_footer.svg') }}" alt="Advance Logo">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="c my-3 my-md-0 mb-xl-5 mb-xxl-0 d-lg-flex flex-lg-nowrap align-items-lg-center justify-content-lg-between justify-content-xxl-around">
                    <div class="social">
                        <img class="social__insta img-fluid me-3" src="{{ asset('images/content/instagram.svg') }}" alt="Instagram Advance">
                        <img class="social__face img-fluid" src="{{ asset('images/content/facebook.svg') }}" alt="Facebook Advance">
                    </div>
                    <div class="copy text-center pt-3 pb-5 pb-md-0">
                        <a class="text-gray" href="#">{{ config('recycle.web.footer.aviso_privacidad') }}</a> <br>
                        <span class="text-gray">&copy; {{ config('recycle.web.footer.copy') }} {{ date('Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
