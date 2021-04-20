<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Tradicional - Listado </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('imagenFondoListado') ? 'has-error' : '' }}">
			{!! Form::stdImg('Fondo Listado', 1, 'imagenFondoListado' , isset($element) ? $element->imagenFondoListado : '' , $errors, 'AAAxBBB (px)') !!}
		</div>

		<div class="form-group {{ $errors->has('imagenCaladaListado') ? 'has-error' : '' }}">
			{!! Form::stdImg('Imagen Calada', 1, 'imagenCaladaListado' , isset($element) ? $element->imagenCaladaListado : '' , $errors, 'AAAxBBB (px)') !!}
		</div>

		<div class="form-group {{ $errors->has('tituloListado') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 0 , 'tituloListado' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('desListado') ? 'has-error' : '' }}">
            {!! Form::stdCKEditor('Descripción', 1, 'desListado', $errors) !!}
        </div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Tradicional </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('imagenIzqB1') ? 'has-error' : '' }}">
			{!! Form::stdImg('Imagen izquierda', 1, 'imagenIzqB1' , isset($element) ? $element->imagenIzqB1 : '' , $errors, 'AAAxBBB (px)') !!}
		</div>

		<div class="form-group {{ $errors->has('imagenDerB1') ? 'has-error' : '' }}">
			{!! Form::stdImg('Imagen derecha', 1, 'imagenDerB1' , isset($element) ? $element->imagenDerB1 : '' , $errors, 'AAAxBBB (px)') !!}
		</div>

		<div class="form-group {{ $errors->has('tituloB1') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 0 , 'tituloB1' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('desB1') ? 'has-error' : '' }}">
			{!! Form::stdCKEditor('Descripción', 1, 'desB1', $errors) !!}
		</div>

		{{-- arrayB1 --}}
        <div class="form-group {{ $errors->has('arrayB1') ? 'has-error' : '' }}">
			<label class="col-sm-2 control-label"> <strong> Indicaciones <label class="required">*</label></strong> </label>
			<div class="col-sm-8 equipo-tres-array">
				<div class="collection only-for-array item1">
					@if (isset($element)&& $element->arrayB1)
						@foreach ($element->arrayB1 as $el)                        
							{!! Form::arrayTextoTextoTexto('Nro.', $el['txt1A'], 'Título', $el['txt2A'], 'Descripción', $el['txt3A']) !!}
						@endforeach
					@endif
				</div>
				<button type="button" class="btn btn-info add-to-collection-item1">Añadir +</button>
			</div>
		</div>

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> Tradicional </h3>
		<div class="panel-control">
			<a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
		</div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('tituloB2') ? 'has-error' : '' }}">
			{!! Form::stdText('Título' , 0 , 'tituloB2' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('desB2') ? 'has-error' : '' }}">
			{!! Form::stdCKEditor('Descripción', 1, 'desB2', $errors) !!}
		</div>

		{{-- arrayB1 --}}

	</div>
	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>