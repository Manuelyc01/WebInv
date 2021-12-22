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
<script>
$(document).ready(function() {
    $("#btnExcel").click(function(){
		$("#btnExcel").html('<i class="fa fa-edit"></i>Generando Excel');
		$("#btnExcel").attr('disabled', true);
		$.ajax({
			type: 'GET', //THIS NEEDS TO BE GET
			url: 'reporte-oficina-traba-equipo',
			success: function (data) {
				$("#btnExcel").attr("href", "{{ asset('ReporteOficinaTrabajadorEquipo.xlsx') }}");
				//$("#btnExcel").attr("download", "ReporteSoliOficinaEquipoTrabajar");
				$("#btnExcel").attr('disabled', false);
				$("#btnExcel").html('<i class="fa fa-edit"></i> Descargue Excel');
				//$("#btnExcel")[0].click();	
				//$('#btnExcel').off('click');
			},
			error: function() { 
				console.log(data);
			}
		});
        
    }); 
});
</script>
	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Asignaciones de Equipos </h2>
				@if(Auth::user()->id_roles==1|| Auth::user()->id_roles==3)	
					@if(isset($ylist))
					<a href="{{ route('ofiTrabajadorEquipo-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir </a>	
					@endif
				@endif
			</div>
			@if(isset($ylist))
			<div class="panel-heading">
				<a href="#" id="btnExcel" class="btn btn-info"><i class="fa fa-edit"></i>Generar Excel</a>
			</div>
			@endif
				@if(Auth::user()->id_roles==1|| Auth::user()->id_roles==3)
					@if(isset($ylist))
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
				@endif
			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Des. Equipo </th>
						<th> Observaciones Equipo</th>
						<th> Categoria Equipo</th>
						@if(Auth::user()->id_roles==1|| Auth::user()->id_roles==3)
						<th> Colaborador</th>@endif
						<th>Sede</th>
						<th> Estado </th>
						<th class="tbl-action-col"> Acciones </th>
					</thead>

					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_ofi_traba_equipo }}">
								<td> {{ $element->des_equipo }}</td>
								<td> {{ $element->estado_equipo }} </td>
								<td> {{ $element->des_cate_equipo }} </td>
								@if(Auth::user()->id_roles==1|| Auth::user()->id_roles==3)
								<td> {{ $element->no_colaborador }}&nbsp;{{ $element->ap_paterno_colaborador }}&nbsp;{{ $element->ap_materno_colaborador }}&nbsp; </td>
								@endif
								<td>{{ $element->no_sede }}</td>
								@if($element->esta_ofi_traba_equipo==0)
									<td style="color: red";> <strong> SIN ASIGNAR </strong> </td>
								@else
									<td style="color: green;"><strong> ASIGNADO </strong></td>
								@endif
								<td class="tbl-action-col">
									@if(Auth::user()->id_roles==1|| Auth::user()->id_roles==3)
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
