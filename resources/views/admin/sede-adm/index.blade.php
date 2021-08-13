@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Sedes </h2>
				<a href="{{ route('sede-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir nueva </a>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Cod. Sede </th>
						<th> Nombre </th>
						<th> Descripcion </th>
						<th class="tbl-action-col"> Acciones </th>
					</thead>
					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_sede }}">
								<td> <strong> {{ $element->co_sede }} </strong></td>
								<td> <strong> {{ $element->no_sede }} </strong> </td>
								<td> <strong> {{ $element->de_sede }} </strong> </td>
								<td class="tbl-action-col">
									<a href="{{ route('sede-adm.edit' , ['id_sede' => $element->id_sede]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop