@component('emails.templateContactoDenuncia')
    @slot('title')
        Información de Contacto
    @endslot

   @php
       if($contacto->arrayInvolucrados != null){
            $involucrados = $contacto->arrayInvolucrados;
       }else{
            $involucrados = '';
       }
   @endphp
	@slot('body', [
        
        'ID' => $contacto->identificador,
        'Sede' => $contacto->sede,
        'Tipo' => $contacto->tipo,
        '¿Desea Identificarse?' => $contacto->identificarse,
        'Nombres' => $contacto->nombres,
        'DNI' => $contacto->dni,
        'Teléfono' => $contacto->telefono,
        'Correo' => $contacto->correo,
        'Personas Involucradas' => $contacto->arrayInvolucrados,
        '¿Sospecha de algún Jefe Inmediato?' => $contacto->sospecha,
        'Denuncia' => $contacto->denunciaMensaje,
        'Archivo Adjunto' => 'http://enaco.screativa.com/'.$contacto->archivo,
        'Fecha' => $contacto->fecha
	])
@endcomponent