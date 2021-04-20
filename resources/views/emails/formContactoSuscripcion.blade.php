@component('emails.templateContactoSuscripcion')
    @slot('title')
        Información de Contacto
    @endslot

	@slot('body', [
        'Correo' => $contacto->correo,
        'Fecha' => $contacto->fecha
	])
@endcomponent