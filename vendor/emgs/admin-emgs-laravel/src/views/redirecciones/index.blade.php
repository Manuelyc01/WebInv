@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> REDIRECCIONES </h2>
				<a href="{{ route('redirecciones.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir nuevo </a>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> URL antigua </th>
						<th> URL actual </th>

					</thead>

					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id }}">
								<td> {{ $element->old_url }} </td>
								<td> {{ $element->new_url }} </td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>

		</div>

	</div>

@stop
