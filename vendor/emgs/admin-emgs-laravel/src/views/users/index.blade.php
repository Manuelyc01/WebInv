@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Usuarios </h2>
				<a href="{{ route('usuarios.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir nuevo </a>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Usuario </th>
						<th> Fecha de creación </th>
						<th> Fecha de modificación </th>
						<th class="tbl-action-col"> Acciones </th>
					</thead>

					<tbody>
						@foreach ($users as $element)
							<tr data-id="{{ $element->id }}">
								<td> <strong> {{ $element->name }} </strong></td>
								<td> <strong> {{ $element->created_at->format('d/m/Y') }} </strong> </td>
								<td> <strong> {{ $element->updated_at->format('d/m/Y') }} </strong> </td>
								<td class="tbl-action-col">
									<a href="{{ route('usuarios.edit' , ['id' => $element->id]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
