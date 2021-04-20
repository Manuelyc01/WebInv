<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\ContactoDenuncia;

class FormContactoDenuncia extends Mailable
{
    use Queueable, SerializesModels;

    public $contacto;

    public function __construct(ContactoDenuncia $contacto)
    {
        $this->contacto = $contacto;
    }

    public function build()
    {
        return $this->from('noreply-enaco@screativa.com')
            ->subject('Contacto Denuncia')
            ->view('emails.formContactoDenuncia');
    }
}