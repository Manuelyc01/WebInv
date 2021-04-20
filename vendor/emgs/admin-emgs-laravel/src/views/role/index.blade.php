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
										<li>Info {{ Form::checkbox('info', 'info', $element->permiso['info'], ['class' => 'form-control marcarPermiso']) }}</li>
										<li>Banner del Home {{ Form::checkbox('banner', 'banner', $element->permiso['banner'], ['class' => 'form-control marcarPermiso']) }}</li>
										<li>Home {{ Form::checkbox('home', 'home', $element->permiso['home'], ['class' => 'form-control marcarPermiso']) }}</li>
										<li>Sede {{ Form::checkbox('sede', 'sede', $element->permiso['sede'], ['class' => 'form-control marcarPermiso']) }}</li>
										<li>Nosotros {{ Form::checkbox('nosotros', 'nosotros', $element->permiso['nosotros'], ['class' => 'form-control marcarPermiso']) }}</li>
										<li>Tradicional {{ Form::checkbox('tradicional', 'tradicional', $element->permiso['tradicional'], ['class' => 'form-control marcarPermiso']) }}</li>
										<li>Industrial {{ Form::checkbox('industrial', 'industrial', $element->permiso['industrial'], ['class' => 'form-control marcarPermiso']) }}</li>
										<li>Gestion {{ Form::checkbox('gestion', 'gestion', $element->permiso['gestion'], ['class' => 'form-control marcarPermiso']) }}</li>
										<li>Bolsas {{ Form::checkbox('bolsas', 'bolsas', $element->permiso['bolsas'], ['class' => 'form-control marcarPermiso']) }}</li>
										<li>Contactos {{ Form::checkbox('contactos', 'contactos', $element->permiso['contactos'], ['class' => 'form-control marcarPermiso']) }}</li>
										<li>Selectores {{ Form::checkbox('selectores', 'selectores', $element->permiso['selectores'], ['class' => 'form-control marcarPermiso']) }}</li>
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
