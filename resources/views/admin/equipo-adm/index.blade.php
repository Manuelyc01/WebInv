@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> EQUIPOS </h2>
				<a href="{{ route('equipo-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir equipo </a>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Serie </th>
						<th> Cod. Patrimonial </th>
						<th> Descripción </th>
						<th> Tipo Bien </th>
						<th> Categoria </th>
						<th class="tbl-action-col"> Acciones </th>
					</thead>

					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_equipo }}">
								<td> <strong> {{ $element->serie_equipo }} </strong></td>
								<td> <strong> {{ $element->cod_opatrimonial }} </strong> </td>
								<td> <strong> {{ $element->des_equipo }} </strong> </td>
								<td> <strong> {{ $element->tipoBien }} </strong> </td>
								<td> <strong> {{ $element->id_cat_equipos }} </strong> </td>
								<td class="tbl-action-col">
									<a href="{{ route('equipo-adm.edit' , ['id_equipo' => $element->id_equipo]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
									<a href="{{ route('equipo-adm.show' , ['id_equipo' => $element->id_equipo]) }}" class="btn btn-success"> <i class="fa fa-eye"></i> </a>
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
