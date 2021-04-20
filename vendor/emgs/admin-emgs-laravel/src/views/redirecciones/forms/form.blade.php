<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> CREAR & EDITAR - REDIRECCIONES </h3>
		<div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expandir/Colapse"><i class="icon-arrow-down"></i></a>
        </div>
	</div>
	<div class="panel-body form-horizontal">

		<div class="form-group {{ $errors->has('old_url') ? 'has-error' : '' }}">
			{!! Form::stdText('URL antigua' , 1 , 'old_url' , $errors) !!}
		</div>

		<div class="form-group {{ $errors->has('new_url') ? 'has-error' : '' }}">
			{!! Form::stdText('URL nueva', 1 , 'new_url', $errors) !!}
		</div>

	</div>
	<div class="panel-footer text-right">
			<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>

</div>
