<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\ContactoGlobal;

class formContactoGlobalGracias extends Mailable
{
    use Queueable, SerializesModels;

    public $contacto;

    public function __construct(ContactoGlobal $contacto)
    {
        $this->contacto = $contacto;
    }

    public function build()
    {
        return $this->from('noreply-enaco@screativa.com')
            ->subject('Empresa')
            ->view('emails.formContactoGlobalGracias');
    }
}