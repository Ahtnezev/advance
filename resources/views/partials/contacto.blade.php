<div class="contacto__section mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 mx-auto">
                <h2 class="subtitle orange display-4 text-center">{{ config('recycle.web.contacto.title') }}</h2>
                <p class="fw-500 mb-0 text-center">{{ config('recycle.web.contacto.first_para') }}</p>
                <p class="fw-500 text-center">{{ config('recycle.web.contacto.second_para') }}</p>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-sm-10 col-md-6 col-lg-5 col-xl-4 mx-auto">
                    <div class="numeros mb-5 mb-md-0">
                        <div class="first mb-4">
                            <div>
                                <img src="{{ asset('images/content/whatsapp.svg') }}" width="30" height="30">
                                <a class="fw-500 text-decoration-none text-dark" href="{{ config('recycle.web.contacto.wp_1.url') }}" target="_blank">{{ config('recycle.web.contacto.wp_1.txt') }}</a>
                            </div>
                            <div class="mt-2">
                                <img src="{{ asset('images/content/email.svg') }}" width="30" height="30">
                                <a class="fw-500 text-decoration-none text-dark" href="{{ config('recycle.web.contacto.mail_1.url') }}">{{ config('recycle.web.contacto.mail_1.txt') }}</a>
                            </div>
                        </div>
                        <div class="second">
                            <div>
                                <img src="{{ asset('images/content/whatsapp.svg') }}" width="30" height="30">
                                <a class="fw-500 text-decoration-none text-dark" href="{{ config('recycle.web.contacto.wp_2.txt') }}" target="_blank">{{ config('recycle.web.contacto.wp_2.txt') }}</a>
                            </div>
                            <div class="mt-2">
                                <img src="{{ asset('images/content/email.svg') }}" width="30" height="30">
                                <a class="fw-500 text-decoration-none text-dark" href="{{ config('recycle.web.contacto.mail_2.url') }}">{{ config('recycle.web.contacto.mail_2.txt') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-6 col-lg-7 col-xl-8 mx-auto">
                    <div class="form">
                        @livewire('lw-enviar-mail')
                    </div>
                </div> <!-- 12 -->

            </div> <!-- row -->
        </div>
    </div>
</div> <!-- contacto__section -->
