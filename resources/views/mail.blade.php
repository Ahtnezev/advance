<x-mail::message>
# Tienes un nuevo correo de la siguiente persona:

<strong>Nombre</strong>: {{ $nombre }} <br>
<strong>Apellido</strong>: {{ $apellido }} <br>
<strong>WhatsApp</strong>: {{ $whatsapp }} <br>
<strong>Correo</strong>: {{ $correo }} <br>

{{ config('app.name') }}
</x-mail::message>
