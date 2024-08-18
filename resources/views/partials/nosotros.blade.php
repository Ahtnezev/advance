<div class="nosotros__content mb-5">
    <div class="bg position-relative">
        <h2 class="subtitle text-white position-absolute">{{ config('recycle.web.nosotros.title') }}</h2>
        <div class="nosotros__banner image-in img-fluid" style="background-image: url({{ asset('images/content/nosotros.webp') }})"></div>
    </div>
    <div class="container nosotros__info mt-5">
        <div class="row">
            <div class="col-12 col-sm-11 col-md-9 mx-auto">
                <div class="my-5">
                    <p class="fw-500 text-justify">{{ config('recycle.web.nosotros.first_para') }}</p>
                    <p class="fw-500 text-justify">{{ config('recycle.web.nosotros.second_para') }}</p>
                </div>
            </div>
            <div class="col-12">
                <div class="nosotros__slider mt-5 position-relative">
                    <div class="swiper swiper-nosotros">
                        <div class="swiper-wrapper">
                            @foreach ((array) config('recycle.web.nosotros.slider.items') as $item)
                                <div class="swiper-slide">
                                    <div class="slider__image image-in" style="background-image: url({{ asset($item) }})"></div>
                                </div> <!-- swiper-slide -->
                            @endforeach
                        </div> <!-- swiper-wraper -->
                    </div> <!-- swiper -->
                    <div class="swiper-pagination swiper-pagination-nosotros"></div>
                </div> <!-- __slider -->
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <h2 class="mayor__proteccion__subtitle text-center display-4 orange">{{ config('recycle.web.nosotros.proteccion.title') }}</h2>
            </div>
        </div>
    </div>
    <div class="mayor__proteccion mt-5">
        <img class="mayor__proteccion__image img-fluid" src="{{ asset('images/content/advance_cadillac.webp') }}" alt="¿BUSCAS MAYOR PTOROTECCIÓN?">
        <div class="container mt-md-3">
            <div class="row">
                <div class="col-12 col-sm-9 col-md-8 col-lg-6 mx-auto">
                    <img class="mayor__proteccion__logo" src="{{ asset('images/content/advance_logo_02.svg') }}" alt="ADVANCE">
                    <p class="fw-500 text-justify mb-3">{{ config('recycle.web.nosotros.proteccion.para') }}</p>
                    <a href="#" class="btn btn__orange fw-semibold rounded-0 d-flex align-items-center justify-content-center mt-4">{{ config('recycle.web.contacto.button_text') }}</a>
                </div>
            </div>
        </div>
    </div> <!-- mayor__proteccion -->
</div>
