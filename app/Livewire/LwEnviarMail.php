<?php

namespace App\Livewire;

use App\Mail\ContactoMail;
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

    /*
     * Enviar correo
    */
    public function sendEmail()
    {
        // Validamos todos los rules que colocamos arriba de las properties
        $this->validate();

        // Hacemos envío del correo
        Mail::to(trim($this->correo))
            ->send(new ContactoMail(
                trim($this->nombre),
                trim($this->apellido),
                trim($this->whatsapp),
                trim($this->correo),
            ));

        sleep(2); // Sólo para apreciar la animación que estamos haciendo algo chido al usuario
        $this->reset(); // Limpiamos los campos
        session()->flash('mail-sent', '✅ Correo enviado correctamente!');
        $this->dispatch('close-alert'); // después de 4s ocultamos el alert con efecto fade-out
    }

    // Formulario
    public function render()
    {
        return view('livewire.lw-enviar-mail');
    }
}
