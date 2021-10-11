@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Cargo Laboral </h2>
				@if(Auth::user()->tipo_usuario==1)
				<a href="{{ route('cargoLaboral-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir nueva </a>
				@endif
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Cod.Cargo Laboral </th>
						<th> Nombre </th>
						<th> Descripcion </th>
						@if(Auth::user()->tipo_usuario==1)
						<th class="tbl-action-col"> Acciones </th>
						@endif
					</thead>
					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_cargo_laboral }}">
								<td> <strong> {{ $element->co_cargo_laboral }} </strong></td>
								<td> <strong> {{ $element->no_cargo_laboral }} </strong> </td>
								<td> <strong> {{ $element->de_cargo_laboral }} </strong> </td>
								@if(Auth::user()->tipo_usuario==1)
								<td class="tbl-action-col">
									<a href="{{ route('cargoLaboral-adm.edit' , ['id_cargo_laboral' => $element->id_cargo_laboral]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
								</td>				@endif
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
