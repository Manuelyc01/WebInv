@component('emails.templateContactoSugerencia')
    @slot('title')
        Información de Contacto
    @endslot

	@slot('body', [
        
        'Nombres' => $contacto->nombres,
        'Apellidos' => $contacto->apellidos,
        'Empresa' => $contacto->empresa,
        'RUC' => $contacto->ruc,
        'Teléfono' => $contacto->telefono,
        'Correo' => $contacto->correo,
        'Mensaje' => $contacto->mensaje,
        'Fecha' => $contacto->fecha
	])
@endcomponent