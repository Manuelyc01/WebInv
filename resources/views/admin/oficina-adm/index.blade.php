@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> OFICINAS </h2>
				<a href="{{ route('oficina-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir nueva </a>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Cod. Oficina </th>
						<th> Nombre </th>
						<th> Descripcion </th>
						<th class="tbl-action-col"> Acciones </th>
					</thead>

					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_oficina }}">
								<td> <strong> {{ $element->co_oficina }} </strong></td>
								<td> <strong> {{ $element->no_oficina }} </strong> </td>
								<td> <strong> {{ $element->de_oficina }} </strong> </td>
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
