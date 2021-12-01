@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Categoría Equipos </h2>
				@if(Auth::user()->tipo_usuario==1)
				<a href="{{ route('categoriaEquipo-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir nueva </a>
				@endif
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Id.Categoria Equipo </th>
						<th> Descripcion </th>
						<th> Estado </th>
						@if(Auth::user()->tipo_usuario==1)
						<th class="tbl-action-col"> Acciones </th>
						@endif
					</thead>
					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_cat_equipos }}">
								<td>  {{ $element->id_cat_equipos }} </td>
								<td>  {{ $element->des_cate_equipo }}  </td>
								@if($element->esta_cate_equipo==0)
									<td style="color:red";><strong>  DESACTIVADO  </strong></td>
								@else
									<td style="color:green;"><strong>  ACTIVO </strong> </td>
								@endif
								@if(Auth::user()->tipo_usuario==1)
								<td class="tbl-action-col">
									<a href="{{ route('categoriaEquipo-adm.edit' , ['id_cat_equipos' => $element->id_cat_equipos]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
								</td>
								@endif
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
