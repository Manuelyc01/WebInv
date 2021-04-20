@component('emails.templateContactoSuscripcionGracias')
    @slot('title')
        ¡Gracias por suscribirte!
    @endslot

	@slot('body', [
        'Nombres' => $contacto->nombres        
	])
@endcomponent