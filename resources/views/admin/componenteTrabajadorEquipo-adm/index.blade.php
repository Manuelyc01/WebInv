@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> TRABAJADOR-EQUIPOS-COMPONENTES </h2>
				<a href="{{ route('componenteTrabajadorEquipo-adm.create',['id_ofi_equi_trabajador' => $id_ofi_equi_trabajador]) }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir equipo </a>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Serie Componente </th>
						<th> Descripcion </th>
						<th> Estado </th>
						<th> Fecha de Asignacion </th>
						<th> Ultima Actualizacion </th>
						<th class="tbl-action-col"> Acciones </th>
					</thead>

					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_ofi_traba_equi_compo }}">
								<td> <strong> {{ $element->serie_componente }} </strong></td>
								<td> <strong> {{ $element->des_componente }} </strong> </td>
								@if($element->esta_ofi_traba_equi_compo==0)
									<td style="background-color: red;color:white";> <strong> DESACTIVADO </strong> </td>
								@else
									<td style="background-color: green;color:white;"> <strong> ACTIVO </strong> </td>
								@endif
								<td> <strong> {{ $element->created_at }} </strong> </td>
								<td> <strong> {{ $element->updated_at }} </strong> </td>
								<td class="tbl-action-col">
									<a href="{{ route('componenteTrabajadorEquipo-adm.edit' , ['id_ofi_traba_equi_compo' => $element->id_ofi_traba_equi_compo,'id_ofi_equi_trabajador' => $id_ofi_equi_trabajador]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
