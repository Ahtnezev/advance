<form class="row g-3" wire:submit='sendEmail' id="sendMailForm">
    @session('mail-sent')
        <div id="mail-sent" class="alert alert-success rounded-0 fade show" role="alert">{{ $value }}</div>
    @endsession
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="col-12">
        <input
            type="text"
            class="form-control border-start-0 border-top-0 border-dark rounded-0 {{ $errors->has('nombre') ? 'is-invalid' : null }}"
            id="nombre"
            wire:model='nombre'
            placeholder="Nombre*">
        @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="col-12">
        <input
            type="text"
            class="form-control border-start-0 border-top-0 border-dark rounded-0 {{ $errors->has('apellido') ? 'is-invalid' : null }}"
            id="apellido"
            wire:model='apellido'
            placeholder="Apellido*">
        @error('apellido') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="col-12">
        <input
            type="number"
            class="form-control border-start-0 border-top-0 border-dark rounded-0 {{ $errors->has('whatsapp') ? 'is-invalid' : null }}"
            id="whatsapp"
            wire:model='whatsapp'
            placeholder="Número teléfonico de WhatsApp*">
        @error('whatsapp') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="col-12">
        <input
            type="email"
            class="form-control border-start-0 border-top-0 border-dark rounded-0 {{ $errors->has('correo') ? 'is-invalid' : null }}"
            id="correo"
            wire:model='correo'
            placeholder="Correo*">
        @error('correo') <span class="text-danger">{{ $message }} </span>@enderror
    </div>
    <div class="col-12">
        <div wire:loading.class="d-flex align-items-center mb-5" wire:loading wire:target="sendEmail">
            <strong role="status">Procesando...</strong>
            <div class="spinner-border ms-auto" aria-hidden="true"></div>
        </div>
        <button
            wire:loading.attr='disabled'
            class="btn btn__orange d-block w-100 rounded-0"
            type="submit">
            Enviar
        </button>
    </div>
    <div class="col-12">
        <div wire:ignore class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}" data-action='submit' data-callback='onSubmit'></div>
        @error('recaptchaToken') <span class="text-danger d-block mt-2">{{ $message }}</span> @enderror
    </div>
</form>
@push('js')
<script>
    /**--------------------------------------------
     *           Enviamos token al back
     *---------------------------------------------**/
   function onSubmit(token) {
        if (token != '') {
            @this.set('recaptchaToken', token)
        }
   }
   /**--------------------------------------------
    *              Ocultamos alert
    *---------------------------------------------**/
   Livewire.on('close-alert', () => setTimeout(() => { $('#mail-sent').fadeOut('slow'); }, 3000));
</script>
@endpush

