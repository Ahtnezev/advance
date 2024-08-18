<x-mail::message>
<img src="{{ asset('images/content/advance_logo_02.svg') }}" width="150" height="150" alt="Logo {{ config('app.name') }} CDMX" style="display:block;margin:auto;">

# Contacto

Tienes un nuevo correo de la siguiente persona:

<strong>Nombre</strong>: {{ $data['name'] }} <br>
<strong>Apellido</strong>: {{ $data['lastname'] }} <br>
<strong>WhatsApp</strong>: {{ $data['whatsapp'] }} <br>
<strong>Correo</strong>: {{ $data['email'] }} <br>

{{ config('app.name') }}
</x-mail::message>
