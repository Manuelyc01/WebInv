@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Solicitudes Equipo Trabajador </h2>
				<a href="{{ route('SolOficinaEquipoTrab-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir equipo </a>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Descripcion Solicitud</th>
						<th> Estado de la solicitud</th>
						<th class="tbl-action-col"> Acciones </th>
					</thead>

					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_ofi_traba_equipo }}">
								<td> <strong> {{ $element->descripcion_solicitud }} </strong></td>
								@if($element->esta_soli_soli_ofi_equi_traba==0)
									<td style="background-color: red;color:white";> <strong> FINALIZADO </strong> </td>
								@elseif($element->esta_soli_soli_ofi_equi_traba==1)
									<td style="background-color: blue;color:white;"> <strong> EN PROCESO </strong> </td>
								@else
									<td style="background-color: green;color:white;"> <strong> RECIBIDO </strong> </td>
								@endif
								
								<td class="tbl-action-col">
									<a href="{{ route('SolOficinaEquipoTrab-adm.edit' , ['id_soli_ofi_equi_tra' => $element->id_soli_ofi_equi_tra]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
									<a href="{{ route('SolOficinaEquipoTrab-adm.show' , ['id_soli_ofi_equi_tra' => $element->id_soli_ofi_equi_tra]) }}" class="btn btn-success"> <i class="fa fa-eye"></i> </a>
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
