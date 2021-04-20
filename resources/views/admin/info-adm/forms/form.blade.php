<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - Idioma </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('activarIdioma') ? 'has-error' : '' }}" >
			{!! Form::stdSelect('Activar Doble Idioma', 1, 'activarIdioma', $ddlActivarIdioma, null) !!}
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - Enlaces </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('enlaceBlog') ? 'has-error' : '' }}">
			{!! Form::stdText('Enlace blog' , 0 , 'enlaceBlog' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('enlaceTransparencia') ? 'has-error' : '' }}">
			{!! Form::stdText('Enlace transparencia' , 0 , 'enlaceTransparencia' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('enlaceCocaleros') ? 'has-error' : '' }}">
			{!! Form::stdText('Enlace cocaleros' , 0 , 'enlaceCocaleros' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('enlaceFE') ? 'has-error' : '' }}">
			{!! Form::stdText('Enlace FE' , 0 , 'enlaceFE' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('intranet') ? 'has-error' : '' }}">
			{!! Form::stdText('Intranet' , 0 , 'intranet' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('tde') ? 'has-error' : '' }}">
			{!! Form::stdText('TDE' , 0 , 'tde' , $errors) !!}
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - PDF </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		{{-- <div class="form-group {{ $errors->has('codEticaPDF') ? 'has-error' : '' }}">
			{!! Form::stdImg('Codigo de etica', 0, 'codEticaPDF' , isset($element) ? $element->codEticaPDF : '' , $errors, 'AAAxBBB (px)') !!}
		</div> Se comento por el pedido del cliente 03/01/2020--}}

		<div class="form-group {{ $errors->has('terminosPDF') ? 'has-error' : '' }}">
			{!! Form::stdImg('Terminos', 1, 'terminosPDF' , isset($element) ? $element->terminosPDF : '' , $errors, 'AAAxBBB (px)') !!}
		</div>

		<div class="form-group {{ $errors->has('privacidadDatosPDF') ? 'has-error' : '' }}">
			{!! Form::stdImg('Privacidad de datos', 0, 'privacidadDatosPDF' , isset($element) ? $element->privacidadDatosPDF : '' , $errors, 'AAAxBBB (px)') !!}
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - Correos </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('correoWeb') ? 'has-error' : '' }}">
			{!! Form::stdText('Correo web' , 0 , 'correoWeb' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('correoFormSuscribete') ? 'has-error' : '' }}">
			{!! Form::stdText('Correo suscribete' , 0 , 'correoFormSuscribete' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('correoFormContactanos') ? 'has-error' : '' }}">
			{!! Form::stdText('Correo contacto' , 0 , 'correoFormContactanos' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('correoFormSugerencias') ? 'has-error' : '' }}">
			{!! Form::stdText('Correo sugerencia' , 0 , 'correoFormSugerencias' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('correoFormDenuncias') ? 'has-error' : '' }}">
			{!! Form::stdText('Correo denuncia' , 0 , 'correoFormDenuncias' , $errors) !!}
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - Redes sociales </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('facebookEnaco') ? 'has-error' : '' }}">
			{!! Form::stdText('Facebook Enaco' , 0 , 'facebookEnaco' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('facebookDelisse') ? 'has-error' : '' }}">
			{!! Form::stdText('Facebook Delissel' , 0 , 'facebookDelisse' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('facebookKintu') ? 'has-error' : '' }}">
			{!! Form::stdText('Facebook Kintu' , 0 , 'facebookKintu' , $errors) !!}
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - Contactos footer </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('ciudadBase') ? 'has-error' : '' }}">
			{!! Form::stdText('Ciudad Principal' , 0 , 'ciudadBase' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('tlfCiudadBase') ? 'has-error' : '' }}">
			{!! Form::stdText('Tlf. Ciudad Principal' , 0 , 'tlfCiudadBase' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('celCiudadBase') ? 'has-error' : '' }}">
			{!! Form::stdText('Cel. Ciudad Principal' , 0 , 'celCiudadBase' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('ciudadProv') ? 'has-error' : '' }}">
			{!! Form::stdText('Provincias' , 0 , 'ciudadProv' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('tlfCiudadProv') ? 'has-error' : '' }}">
			{!! Form::stdText('Tlf. Provincias' , 0 , 'tlfCiudadProv' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('celCiudadProv') ? 'has-error' : '' }}">
			{!! Form::stdText('Cel. Provincias' , 0 , 'celCiudadProv' , $errors) !!}
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - Productos </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('tituloProductos') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 0 , 'tituloProductos' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('subtituloProductos') ? 'has-error' : '' }}">
			{!! Form::stdText('Subtitulo' , 0 , 'subtituloProductos' , $errors) !!}
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - Gracias General </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('tituloGracias') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 1 , 'tituloGracias' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('desGracias') ? 'has-error' : '' }}">
			{!! Form::stdCKEditor('Descripción', 1, 'desGracias', $errors) !!}
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - Gracias Denuncias </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('tituloGraciasDe') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 1 , 'tituloGraciasDe' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('desGraciasDe') ? 'has-error' : '' }}">
			{!! Form::stdCKEditor('Descripción', 1, 'desGraciasDe', $errors) !!}
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

	
<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - Sedes </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('tituloSedes') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 0 , 'tituloSedes' , $errors) !!}
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - Contactos </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('tituloContactanos') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 0 , 'tituloContactanos' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('desContactanos') ? 'has-error' : '' }}">
			{!! Form::stdCKEditor('Descripción', 1, 'desContactanos', $errors) !!}
		</div>

		{{-- arrayContactanos --}}
		<div class="form-group {{ $errors->has('arrayContactanos') ? 'has-error' : '' }}">
			<label class="col-sm-2 control-label"> <strong> Lugares Izquierda <label class="required">*</label></strong> </label>
			<div class="col-sm-8 equipo-tres-array">
				<div class="collection only-for-array item1">
					@if (isset($element)&& $element->arrayContactanos)
						@foreach ($element->arrayContactanos as $el)                        
							{!! Form::arrayTextoTextoTextoTextoTexto('Título', $el['tx1A'], 'Teléfono', $el['tx2A'], 'Celular', $el['tx3A'], 'Dirección', $el['tx4A'], 'Lugar', $el['tx5A']) !!}
						@endforeach
					@endif
				</div>
				<button type="button" class="btn btn-info add-to-collection-item1">Añadir +</button>
			</div>
		</div>

		{{-- array2Contactanos --}}
		<div class="form-group {{ $errors->has('array2Contactanos') ? 'has-error' : '' }}">
			<label class="col-sm-2 control-label"> <strong> Lugares Derecha <label class="required">*</label></strong> </label>
			<div class="col-sm-8 equipo-tres-array">
				<div class="collection only-for-array item2">
					@if (isset($element)&& $element->array2Contactanos)
						@foreach ($element->array2Contactanos as $el)                        
							{!! Form::arrayTextoTextoTextoTextoTexto2('Título', $el['tx1A2'], 'Teléfono', $el['tx2A2'], 'Celular', $el['tx3A2'], 'Dirección', $el['tx4A2'], 'Lugar', $el['tx5A2']) !!}
						@endforeach
					@endif
				</div>
				<button type="button" class="btn btn-info add-to-collection-item2">Añadir +</button>
			</div>
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - Gestión </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('tituloGestion') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 0 , 'tituloGestion' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('subtituloGestion') ? 'has-error' : '' }}">
			{!! Form::stdText('Subtitulo' , 0 , 'subtituloGestion' , $errors) !!}
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - Trabajo </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('tituloTrabajo') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 0 , 'tituloTrabajo' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('subtituloTrabajo') ? 'has-error' : '' }}">
			{!! Form::stdText('Subtitulo' , 0 , 'subtituloTrabajo' , $errors) !!}
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - Bolsa de servicio </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('tituloServiciosB1') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 0 , 'tituloServiciosB1' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('subtituloServiciosB1') ? 'has-error' : '' }}">
			{!! Form::stdText('Subtitulo' , 0 , 'subtituloServiciosB1' , $errors) !!}
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - Bolsa de servicio Bloque dos </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('tituloServiciosB2') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 0 , 'tituloServiciosB2' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('desServiciosB2') ? 'has-error' : '' }}">
			{!! Form::stdCKEditor('Descripción', 1, 'desServiciosB2', $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('pdfServiciosB2') ? 'has-error' : '' }}">
			{!! Form::stdImg('PDF servicios', 1, 'pdfServiciosB2' , isset($element) ? $element->pdfServiciosB2 : '' , $errors, 'AAAxBBB (px)') !!}
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - Sugerencias </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('tituloSugerencia') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 0 , 'tituloSugerencia' , $errors) !!}
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Información general - Denuncia </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('tituloDenuncia') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 0 , 'tituloDenuncia' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('desDenuncia') ? 'has-error' : '' }}">
			{!! Form::stdCKEditor('Descripción', 1, 'desDenuncia', $errors) !!}
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>





