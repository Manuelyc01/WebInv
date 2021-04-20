@component('emails.templateContactoSugerencia')
    @slot('title')
        Información de Contacto
    @endslot

	@slot('body', [
        'Tipo' => $contacto->tipo,
        'Correo' => $contacto->correo,
        'Nombres' => $contacto->nombres,
        'Teléfono' => $contacto->telefono,
        'Nro. Documento' => $contacto->documento,
        'Nacionalidad' => $contacto->nacionalidad,        
        'Mensaje' => $contacto->mensaje,
        'Forma Contacto Preferida' => $contacto->formaContacto,
        'Fecha' => $contacto->fecha
	])
@endcomponent