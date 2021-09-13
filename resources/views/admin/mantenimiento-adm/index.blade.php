@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Mantenimientos de Equipo</h2>
			</div>
			@if(isset($id))
			<a class="btn btn-primary" href="/web-adm/mantenimiento-adm/crear/{{ $id}}/1"> Nuevo</a>
			@endif
			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Descripcion</th>
						<th> Estado </th>
						<th> Bien Asignado</th>
						<th class="tbl-action-col"> Solicitud </th>
					</thead>

					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_oficina }}">
								<td> <strong> {{ $element->descripcion }} </strong></td>
								@if($element->estado==0)
									<td style="background-color: green;color:white";> <strong> Iniciado </strong> </td>
								@else
									@if($element->estado==1)
										<td style="background-color: orange;color:white;"> <strong> En Proceso </strong> </td>
									@else
										<td style="background-color: red;color:white;"> <strong> Finalizado </strong> </td>
									@endif
								@endif
								<td> <strong> {{$element->tipoBien}}  /  {{$element->no_colaborador}}{{$element->ap_paterno_colaborador}} </strong> </td>
								<td> <strong> {{ $element->id_soli_ofi_equi_tra }} </strong> </td>
								<td class="tbl-action-col">
									<a href="{{ route('mantenimiento-adm.edit' , ['id_mantenimiento' => $element->id_mantenimiento]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
