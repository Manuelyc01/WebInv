@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Solicitudes </h2>
				<a href="{{ route('solicitudes-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir nueva </a>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Cod.Solicitud </th>
						<th> Nombre </th>
						<th> Estado </th>
						<th class="tbl-action-col"> Acciones </th>
					</thead>
					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_solicitud }}">
								<td> <strong> {{ $element->cod_solicitud }} </strong></td>
								<td> <strong> {{ $element->nom_solicitud }} </strong></td>
								
								@if($element->esta_solicitud==0)
									<td style="background-color: red;color:white";> <strong> FINALIZADO </strong> </td>
								@else
									<td style="background-color: green;color:white;"> <strong> EN PROCESO </strong> </td>
								@endif
								
								<td class="tbl-action-col">
									<a href="{{ route('solicitudes-adm.edit' , ['id_solicitud' => $element->id_solicitud]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop