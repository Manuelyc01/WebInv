@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Oficina Trabajador Equipo </h2>
				<a href="{{ route('ofiTrabajadorEquipo-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir equipo </a>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> HostName </th>
						<th> Sistema Operativo </th>
						<th> Observaciones Equipo</th>
						<th> Estado </th>
						<th> Categoria Equipo</th>
						<th> Colaborador</th>
						<th class="tbl-action-col"> Acciones </th>
					</thead>

					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_ofi_traba_equipo }}">
								<td> <strong> {{ $element->no_equipo }} </strong></td>
								<td> <strong> {{ $element->sis_operativo }} </strong> </td>
								<td> <strong> {{ $element->estado_equipo }} </strong> </td>
									@if($element->esta_ofi_traba_equipo==0)
									<td style="background-color: red;color:white";> <strong> SIN ASIGNAR </strong> </td>
								@else
									<td style="background-color: green;color:white;"> <strong> ASIGNADO </strong> </td>
								@endif
								<td> <strong> {{ $element->tipoBien }} </strong> </td>
								<td> <strong>{{ $element->no_colaborador }}&nbsp;{{ $element->ap_paterno_colaborador }}&nbsp;{{ $element->ap_materno_colaborador }}&nbsp;(SEDE: {{ $element->no_sede }})</strong> </td>
								<td class="tbl-action-col">
									<a href="{{ route('ofiTrabajadorEquipo-adm.edit' , ['id_ofi_traba_equipo' => $element->id_ofi_traba_equipo]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
									<a href="{{ route('ofiTrabajadorEquipo-adm.show' , ['id_ofi_traba_equipo' => $element->id_ofi_traba_equipo]) }}" class="btn btn-success"> <i class="fa fa-eye"></i> </a>
									<a href="{{ route('componenteTrabajadorEquipo-adm.index' , ['id_ofi_traba_equipo' => $element->id_ofi_traba_equipo]) }}" class="btn btn-success"> <i class="fa fa-briefcase"></i> </a>
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
