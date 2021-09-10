@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Mantenimientos de Equipo</h2>
			</div>
			<a class="btn btn-primary" href="/web-adm/mantenimiento-adm/crear/{{ $id}}/1"> Nuevo</a>
			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Descripcion</th>
						<th> Estado </th>
						<th> Equipo </th>
						<th class="tbl-action-col"> Solicitud </th>
					</thead>

					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_oficina }}">
								<td> <strong> {{ $element->descripcion }} </strong></td>
								<td> <strong> {{ $element->estado }} </strong> </td>
								<td> <strong> {{ $element->id_ofi_traba_equipo }} </strong> </td>
								<td> <strong> {{ $element->id_soli_ofi_equi_tra }} </strong> </td>
								<td class="tbl-action-col">
									<a href="{{ route('oficina-adm.edit' , ['id_oficina' => $element->id_oficina]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
