@component('emails.templateContactoDenunciaGracias')
    @slot('title')
        Denuncia
    @endslot

	@slot('body', [
          
          'Nombres' => $contacto->nombres,
          'Identificador' => $contacto->identificador    
	])
@endcomponent