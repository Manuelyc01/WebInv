@extends('adminems::panel')

@section('content')
<script>
$(document).ready(function() {
    $("#btnExcel").click(function(){
		$("#btnExcel").html('<i class="fa fa-edit"></i>Generando Excel');
		$("#btnExcel").attr('disabled', true);
		$.ajax({
			type: 'GET', //THIS NEEDS TO BE GET
			url: 'reporte-solicitudes',
			success: function (data) {
				$("#btnExcel").attr("href", "{{ asset('ReporteSoliOficinaEquipoTrabajar.xlsx') }}");
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
				<h2 class="panel-title form-title"> Bandeja de Solicitudes </h2>
			</div>
			<div class="panel-heading">
				<a href="#" id="btnExcel" class="btn btn-info"><i class="fa fa-edit"></i>Generar Excel</a>
			</div>
			@if(Auth::user()->tipo_usuario==1|| Auth::user()->tipo_usuario==3)
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div align='center'  >
								<span><a href="/web-adm/SolOficinaEquipoTrab-adm" class="ulLi">Todos</a></span> / 
								<span><a href="/web-adm/solicitudesRecibidas" class="ulLi">Recibidos</a></span> / 
								<span><a href="/web-adm/solicitudesFinalizadas" class="ulLi">Finalizados</a></span> / 
								<span><a href="/web-adm/solicitudesEnProceso" class="ulLi">En Proceso</a></span>
						</div>	
					</div>
					<div class="col-md-4"></div>
				</div>
			@endif
			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Descripcion Solicitud</th>
						<th> Estado de la solicitud</th>
						<th> Sede</th>
						<th> Fecha Recepción</th>
						<th> Fecha de Actualización</th>
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
								<td>
								{{ $element->no_sede }}	
								</td>
								<td>
								{{ $element->created_at }} 
								</td>
								<td>
								{{ $element->updated_at }} 	
								</td>
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
