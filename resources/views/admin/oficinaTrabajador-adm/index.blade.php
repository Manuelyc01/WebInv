@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Cargo Laboral </h2>
				@if(Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==3)
				<a href="{{ route('oficinaTrabajador-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir nueva </a>
				@endif
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Id.Oficina Trabajador </th>
						<th> SEDE </th>
						<th> OFICINA </th>
						<th> CARGO LABORAL </th>
						<th> COD.TRABAJADOR </th>
						<th> ESTADO</th>
						<th> NOMBRES</th>
						<th> DNI</th>
						<th class="tbl-action-col"> Acciones </th>
					</thead>
					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_ofi_trabajador }}">
								<td> {{ $element->id_ofi_trabajador }} </td>
								<td> {{ $element->no_sede }} </td>
								<td> {{ $element->no_oficina }}  </td>
								<td> {{ $element->no_cargo_laboral }}  </td>
								<td> {{ $element->co_colaborador }}  </td>

								@if($element->est_trabajador==0)
									<td style="background-color: red;color:white";> DESACTIVADO  </td>
								@else
									<td style="background-color: green;color:white;"> ACTIVO  </td>
								@endif
								<td> {{ $element->no_colaborador }}&nbsp;{{ $element->ap_paterno_colaborador }}&nbsp;{{ $element->ap_materno_colaborador }}  </td>
								<td> {{ $element->ti_documento }}  </td>
								<td class="tbl-action-col">
								@if(Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==3)
									<a href="{{ route('oficinaTrabajador-adm.edit' , ['id_ofi_trabajador' => $element->id_ofi_trabajador]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
									<a class="btn btn-primary" href="/web-adm/trabEquipos/{{ $element->id_ofi_trabajador }}"> Equipos Asignados</a>
								@else
								<a class="btn btn-primary" href="/web-adm/trabEquipos/{{ $element->id_ofi_trabajador }}"> Equipos Asignados</a>
								@endif
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
