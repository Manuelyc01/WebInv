@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Cargo Laboral </h2>
				<a href="{{ route('categoriaEquipo-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir nueva </a>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Id.Categoria Equipo </th>
						<th> Descripcion </th>
						<th> Estado </th>
						<th class="tbl-action-col"> Acciones </th>
					</thead>
					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_cat_equipos }}">
								<td> <strong> {{ $element->id_cat_equipos }} </strong></td>
								<td> <strong> {{ $element->des_cate_equipo }} </strong> </td>
								@if($element->esta_cate_equipo==0)
									<td style="background-color: red;color:white";> <strong> DESACTIVADO </strong> </td>
								@else
									<td style="background-color: green;color:white;"> <strong> ACTIVO </strong> </td>
								@endif
								
								<td class="tbl-action-col">
									<a href="{{ route('categoriaEquipo-adm.edit' , ['id_cat_equipos' => $element->id_cat_equipos]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
								</td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
