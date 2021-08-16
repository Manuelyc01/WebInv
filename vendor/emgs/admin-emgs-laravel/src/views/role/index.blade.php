@extends('adminems::panel')

@section('content')

	<a href="{{ route('roles.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Agregar </a>
	<div class="col-md-12">
		
		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Roles </h2>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Rol </th>
						<th> Permisos </th>
					</thead>

					<tbody>
						@foreach ($roles as $element)
							<tr data-id="{{ $element->id }}">
								<td> <a href="{{ route('roles.edit' , ['id' => $element->id]) }}"> {{ $element->name }} </a> </td>
								<td style="text-align:left;">
									{{-- @foreach ($collection as $item) --}}
										<li>Oficina {{ Form::checkbox('oficina', 'oficina', @$element->permiso['oficina'], ['class' => 'form-control marcarPermiso']) }}</li>
										<li>Cargo Laboral {{ Form::checkbox('cargo-laboral', 'cargo-laboral', @$element->permiso['cargo-laboral'], ['class' => 'form-control marcarPermiso']) }}</li>
										<li>Sedes {{ Form::checkbox('sede', 'sede', @$element->permiso['sede'], ['class' => 'form-control marcarPermiso']) }}</li>
										<li>Equipos {{ Form::checkbox('equipo', 'equipo', @$element->permiso['equipo'], ['class' => 'form-control marcarPermiso']) }}</li>
										<li>Categoria Equipo {{ Form::checkbox('categoria-equipo', 'categoria-equipo', @$element->permiso['categoria-equipo'], ['class' => 'form-control marcarPermiso']) }}</li>
										<li>Oficina Trabajador {{ Form::checkbox('oficina-trabajador', 'oficina-trabajador', @$element->permiso['oficina-trabajador'], ['class' => 'form-control marcarPermiso']) }}</li>
										<li>Colaboradores{{ Form::checkbox('usuario', 'usuario', @$element->permiso['usuario'], ['class' => 'form-control marcarPermiso']) }}</li>
									{{-- @endforeach --}}
								</td>
								{{-- <td> {{ $element->created_at }} </td> --}}
							</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop

@section('scripts')
    <script>
        $(function(){   
            
            $(".marcarPermiso").on("click", function(e){
                item = $(this);
                nom = item.val();
				id = $(this).closest('tr').attr('data-id');
                checked = item.is(":checked");
                console.log('entro');
            $.ajax({
                url : "{{ route('marcar-permiso') }}",
                type : 'post',
                dataType : 'json',
                data: { id: id, checked: checked, nom: nom},
                success : function(resultado) {                    
                    }
                });
            });

            
        });
    </script>
@endsection
