@extends('adminems::panel')

@section('content')
<script>
$(document).ready(function() {
    $("#btnExcel").click(function(){
		$("#btnExcel").html('<i class="fa fa-edit"></i>Generando Excel');
		$("#btnExcel").attr('disabled', true);
		$.ajax({
			type: 'GET', //THIS NEEDS TO BE GET
			url: 'reporte-mantenimiento',
			success: function (data) {
				$("#btnExcel").attr("href", "{{ asset('ReporteMantenimientoEquipos.xlsx') }}");
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
				<h2 class="panel-title form-title"> Mantenimientos de Equipo</h2>
				@if(isset($id))
				<a class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md" href="/web-adm/mantenimiento-adm/crear/{{ $id}}/0"> Nuevo Registro</a>
				@endif
				@if(isset($idsoli))
				<a class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md" href="/web-adm/mantenimiento-adm/crear/{{ $idsoli}}/1"> Nuevo Registro</a>
				@endif
			</div>
			<div class="panel-heading">
				<a href="#" id="btnExcel" class="btn btn-info"><i class="fa fa-edit"></i>Generar Excel</a>
			</div>
			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Descripcion</th>
						<th> Estado </th>
						<th> Bien Asignado</th>
						<th> Sede</th>
						<th> Solicitud Descripcion</th>
						<th> Fecha de Creación</th>
						<th> Fecha de Actualización</th>
						<th class="tbl-action-col">Acciones</th>
					</thead>

					<tbody>
					@foreach ($elements as $element)
							<tr data-id="{{ $element->id_oficina }}">
								<td>  {{ $element->descripcion }} </td>
								@if($element->estado==0)
									<td style="background-color: green;color:white";>  Iniciado  </td>
								@else
									@if($element->estado==1)
										<td style="background-color: orange;color:white;">  En Proceso  </td>
									@else
										<td style="background-color: red;color:white;">  Finalizado  </td>
									@endif
								@endif
								<td>  {{$element->tipoBien}}  /  {{$element->no_colaborador}}{{$element->ap_paterno_colaborador}}  </td>
								<td>{{ $element->no_sede }}</td>
								<td>  {{ $element->descripcion_solicitud }}  </td>
								<td>{{ $element->created_at }}</td>
								<td>{{ $element->updated_at }}</td>
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
