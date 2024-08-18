<?php

namespace App\Livewire;

use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LwEnviarMail extends Component
{
    #[Validate('required', message: 'Campo requerido*')]
    #[Validate('min:3', message: 'Debe contener al menos 3 caracteres*')]
    public string $nombre = '';

    #[Validate('required', message: 'Campo requerido*')]
    #[Validate('min:3', message: 'Debe contener al menos 3 caracteres*')]
    public string $apellido = '';

    #[Validate('required', message: 'Campo requerido*')]
    #[Validate('digits:10', message: 'Deben ser 10 dígitos*')]
    public string $whatsapp = '';

    #[Validate('required', message: 'Campo requerido*')]
    #[Validate('min:8', message: 'Correo muy pequeño*')]
    #[Validate('email', message: 'Correo no válido*')]
    public string $correo = '';

    #[Validate('required', message: 'Completar reCAPTCHA')]
    public $recaptchaToken;

    /*
     * Enviar correo
    */
    public function sendEmail()
    {
        // Validamos todos los rules que colocamos arriba de las properties
        $this->validate();

        // Verificar reCaptcha
         $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $this->recaptchaToken,
        ]);

        if (!$response->json('success')) {
            return session()->flash('error', 'reCaptcha falló verificación. Intenta nuevamente.');
        }

        // Hacemos envío del correo
        $data = [
            'name' => $this->nombre,
            'lastname' => $this->apellido,
            'whatsapp' => $this->whatsapp,
            'email' => $this->correo,
        ];

        Mail::to(trim($this->correo))
            ->send(new ContactoMail($data));

        sleep(2); // Sólo para apreciar la animación que estamos haciendo algo chido al usuario
        $this->reset(); // Limpiamos los campos
        session()->flash('mail-sent', '✅ Correo enviado correctamente!');
        $this->dispatch('close-alert'); // después de 3s ocultamos el alert con efecto fade-out
    }

    // Formulario
    public function render()
    {
        return view('livewire.lw-enviar-mail');
    }
}
