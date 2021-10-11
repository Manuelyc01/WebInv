@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Colaboradores </h2>
				@if(Auth::user()->tipo_usuario==1)
				<a href="{{ route('colaborador-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir nuevo </a>
				@endif
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Cod. Colaborador </th>
						<th> Ap. Paterno </th>
						<th> Ap. Materno </th>
						<th> Nombre </th>
						<th> Usuario </th>
						<th> Correo </th>
						@if(Auth::user()->tipo_usuario==1)
						<th class="tbl-action-col"> Acciones </th>
						@endif
					</thead>
					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_sede }}">
								<td> <strong> {{ $element->co_colaborador }} </strong></td>
								<td> <strong> {{ $element->ap_paterno_colaborador  }} </strong> </td>
								<td> <strong> {{ $element->ap_materno_colaborador }} </strong> </td>
								<td> <strong> {{ $element->no_colaborador }} </strong> </td>
								<td> <strong> {{ $element->usuario }} </strong> </td>
								<td> <strong> {{ $element->email }} </strong> </td>
								@if(Auth::user()->tipo_usuario==1)
								<td class="tbl-action-col">
									<a href="{{ route('colaborador-adm.edit' , ['id_colaborador' => $element->id_colaborador]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
									@if($element->tipo_usuario==3)
									<a class="btn btn-primary" href="/web-adm/colaboradorSede/{{ $element->id_colaborador }}"> Asignar Sedes</a>
									@endif
								</td>
								@endif
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop