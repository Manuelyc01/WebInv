@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> COMPONENTES </h2>
				<a href="{{ route('componente-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir componente </a>
			</div>
			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Serie </th>
						<th> Descripción </th>
						<th> Estado </th>
						<th> Categoria </th>
						<th class="tbl-action-col"> Acciones </th>
					</thead>
					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_componente}}">
								<td> <strong> {{ $element->serie_componente }} </strong></td>
								<td> <strong> {{ $element->des_componente }} </strong> </td>
								@if($element->esta_componente==0)
									<td style="background-color: red;color:white";> <strong> DESACTIVADO </strong> </td>
								@else
									@if($element->esta_componente==1)
										<td style="background-color: green;color:white;"> <strong> ACTIVO </strong> </td>
									@else
										<td style="background-color: orange;color:white;"> <strong> ASIGNADO </strong> </td>
									@endif
								@endif
								<td> <strong> {{ $element->des_cate_componentes }} </strong> </td>
								<td class="tbl-action-col">
									<a href="{{ route('componente-adm.edit' , ['id_componente' => $element->id_componente]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
