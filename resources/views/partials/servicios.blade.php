<div class="servicios__content mb-5">
    <h2 class="servicios__subtitle orange display-4 text-center mb-xl-5">{{ config('recycle.web.servicios.title') }}</h2>
    <div class="nuestros__servicios d-lg-flex align-items-lg-center justify-content-lg-center flex-lg-nowrap">
        <div class="servicios__paint_protection">
            <h3 class="orange mt-4 mb-3 text-start">{{ config('recycle.web.servicios.subtitle') }}</h3>
            <p class="fw-500">{{ config('recycle.web.servicios.first_para') }}</p>
            <p class="fw-500">{{ config('recycle.web.servicios.second_para') }}</p>
            <ul class="servicios__list simple__list">
                @foreach((array) config('recycle.web.servicios.list') as $item)
                    <li class="fw-bold">{{ $item }}</li>
                @endforeach
            </ul>
        </div> <!-- __paint_protection -->

        <div class="servicios__slider position-relative">
            <img class="slider__background position-absolute" src="{{ asset('images/content/paint_protection_back.webp') }}" alt="">
            <div class="swiper-servicios swiper">
                <div class="swiper-wrapper">
                    @foreach ((array) config('recycle.web.servicios.slider.items') as $item)
                        <div class="swiper-slide">
                            <div class="slider__image image-in" style="background-image: url({{ asset($item) }})"></div>
                        </div> <!-- swiper-slide -->
                    @endforeach
                </div> <!-- swiper-wraper -->
            </div> <!-- swiper -->
            <div class="swiper-pagination"></div>
        </div> <!-- __slider -->
    </div> <!-- nuestros__servicios -->
</div> <!-- servicios__content -->
