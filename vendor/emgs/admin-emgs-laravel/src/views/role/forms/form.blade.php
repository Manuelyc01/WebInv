<style>
	
</style>

<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
	<div class="panel-heading">
		<h3 class="panel-title form-title"> CREAR & EDITAR - ROLES </h3>
		<div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
	</div>
	
	<div class="panel-body form-horizontal">
		
		<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
			{!! Form::stdText('Rol' , 1 , 'name'  , $errors) !!}
		</div>
	</div>

	<div class="panel-footer text-right">
		<strong> <span class="required"> * </span> Campos obligatorios </strong>
	</div>
	
</div>






