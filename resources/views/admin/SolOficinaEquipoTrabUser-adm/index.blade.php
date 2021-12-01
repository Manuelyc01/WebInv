@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Bandeja de Solicitudes </h2>
				<a href="{{ route('SolOficinaEquipoTrabUser-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Nueva solicitud </a>
			</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div align='center'  >
								<span><a href="/web-adm/ConOfiTraEquipoUser" class="ulLi">Solicitud mantenimiento</a></span> / 
								<span><a href="/web-adm/SinOfiTraEquipoUser" class="ulLi">Solicitud de Equipos Nuevos</a></span>
						</div>	
					</div>
					<div class="col-md-4"></div>
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
								<td>  {{ $element->descripcion_solicitud }} </td>
								@if($element->esta_soli_soli_ofi_equi_traba==0)
									<td style="color:red";><strong>  FINALIZADO  </strong></td>
								@elseif($element->esta_soli_soli_ofi_equi_traba==1)
									<td style="color:blue;"> <strong> EN PROCESO  </strong></td>
								@else
									<td style="color:green;">  <strong>RECIBIDO  </strong></td>
								@endif
								
								<td class="tbl-action-col">
									<a href="{{ route('SolOficinaEquipoTrabUser-adm.show' , ['id_soli_ofi_equi_tra' => $element->id_soli_ofi_equi_tra]) }}" class="btn btn-success"> <i class="fa fa-eye"></i> </a>
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
