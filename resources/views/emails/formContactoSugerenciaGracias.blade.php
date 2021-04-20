@component('emails.templateContactoSugerenciaGracias')
    @slot('title')
        {{$info->tituloGracias}}
    @endslot

	@slot('body', [
        'Nombres' => $contacto->nombres        
	])
@endcomponent