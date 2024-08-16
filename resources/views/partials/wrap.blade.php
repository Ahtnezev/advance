<div class="row wrap__content mb-5">
    <div class="col-12 col-md-7 col-lg-8 col-xxl-7">
        <div class="bg position-relative">
            <img class="wrap__bg" src="{{ asset('images/content/wrap_back.webp') }}" alt="">
            <div class="wrap__image image-in" style="background-image: url({{ asset('images/content/wrap.webp') }})"></div>
        </div>
    </div>
    <!-- 12 md-6 -->
    <div class="col-12 col-md-5 col-lg-4 col-xxl-5">
        <div class="info">
            <h3 class="subtitle orange mt-5 mt-md-0 mb-4">{{ config('recycle.web.servicios.productos_calidad.title') }}</h3>
            <p class="fw-500">{{ config('recycle.web.servicios.productos_calidad.para') }}</p>
            <ul class="wrap__list simple__list">
                @foreach ((array) config('recycle.web.servicios.productos_calidad.list') as $item)
                    <li class="fw-bold">{{ $item }}</li>
                @endforeach
            </ul> <!-- wrap__list -->
        </div>
    </div>
    <!-- 12 md-6 -->
</div>

<div class="row automotriz__content mt-5">
    <div class="col-12 col-md-5 col-lg-4 col-xxl-5">
        <div class="info">
            <h3 class="subtitle orange mt-5 mt-md-0 mb-4">{{ config('recycle.web.servicios.productos_calidad.detallado_automotriz.title') }}</h3>
            <p class="fw-500">{{ config('recycle.web.servicios.productos_calidad.detallado_automotriz.first_para') }}</p>
            <p class="fw-500">{{ config('recycle.web.servicios.productos_calidad.detallado_automotriz.second_para') }}</p>
        </div>
    </div> <!-- 12 md-6 -->

    <div class="col-12 col-md-7 col-lg-8 col-xxl-7">
        <div class="bg position-relative">
            <img class="automotriz__bg" src="{{ asset('images/content/detallado_back.webp') }}" alt="">
            <div class="automotriz__image image-in" style="background-image: url({{ asset('images/content/detallado.webp') }})"></div>
        </div>
    </div>
    <!-- 12 md-6 -->

</div>
