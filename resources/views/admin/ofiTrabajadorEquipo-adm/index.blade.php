@extends('adminems::panel')
@section('cssAdicional')
	<style type="text/css">
		.ulLi{
			color:black;

		}
		.ulLi:hover{
			color:black;
			font-size:106%;
			text-decoration: none;
		}
  	</style>
@stop
@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Asignaciones de Equipos </h2>
				@if(Auth::user()->tipo_usuario==1|| Auth::user()->tipo_usuario==3)
				<a href="{{ route('ofiTrabajadorEquipo-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir Asignacion </a>
				@endif
			</div>
				@if(Auth::user()->tipo_usuario==1|| Auth::user()->tipo_usuario==3)
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div align='center'  >
								<span><a href="/web-adm/ofiTrabajadorEquipo-adm" class="ulLi">Todos</a></span> / 
								<span><a href="/web-adm/equiposAsignados" class="ulLi">Asignados</a></span> / 
								<span><a href="/web-adm/equiposNoAsignados" class="ulLi">No asignados</a></span> / 
								<span><a href="/web-adm/equiposEnMantenimiento" class="ulLi">En Mantenimiento</a></span>
						</div>	
					</div>
					<div class="col-md-4"></div>
				</div>
				@endif
			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> HostName </th>
						<th> Sistema Operativo </th>
						<th> Observaciones Equipo</th>
						<th> Estado </th>
						<th> Categoria Equipo</th>
						@if(Auth::user()->tipo_usuario==1|| Auth::user()->tipo_usuario==3)
						<th> Colaborador</th>@endif
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
								@if(Auth::user()->tipo_usuario==1|| Auth::user()->tipo_usuario==3)
								<td> <strong>{{ $element->no_colaborador }}&nbsp;{{ $element->ap_paterno_colaborador }}&nbsp;{{ $element->ap_materno_colaborador }}&nbsp;(SEDE: {{ $element->no_sede }})</strong> </td>
								@endif
								<td class="tbl-action-col">
									@if(Auth::user()->tipo_usuario==1|| Auth::user()->tipo_usuario==3)
									<a href="{{ route('ofiTrabajadorEquipo-adm.edit' , ['id_ofi_traba_equipo' => $element->id_ofi_traba_equipo]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
									<a href="{{ route('componenteTrabajadorEquipo-adm.index' , ['id_ofi_traba_equipo' => $element->id_ofi_traba_equipo]) }}" class="btn btn-success"> <i class="fa fa-briefcase"></i> </a>
										@if($element->esta_ofi_traba_equipo==1)
									<a class="btn btn-primary" href="/web-adm/ofiTrabEqui-transf/{{ $element->id_ofi_traba_equipo }}"> Transferir</a>
									<a class="btn btn-info" href="/web-adm/mantenimientos/{{ $element->id_ofi_traba_equipo }}"> Mantenimiento</a>
										@else
									<a class="btn btn-primary" href=""disabled> Transferir</a>
									<a class="btn btn-info" href="" disabled> Mantenimiento</a>
										@endif
									@endif
									<a href="{{ route('ofiTrabajadorEquipo-adm.show' , ['id_ofi_traba_equipo' => $element->id_ofi_traba_equipo]) }}" class="btn btn-success"> <i class="fa fa-eye"></i> </a>
									
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
