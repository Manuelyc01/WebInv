@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> Categoria Componente </h2>
				@if(Auth::user()->tipo_usuario==1)
				<a href="{{ route('categoriaComponente-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir nueva </a>
				@endif
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Id.Categoria Componente </th>
						<th> Descripcion </th>
						<th> Estado </th>
						@if(Auth::user()->tipo_usuario==1)
						<th class="tbl-action-col"> Acciones </th>
						@endif
					</thead>
					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_cat_componentes }}">
								<td>  {{ $element->id_cat_componentes }} </td>
								<td>  {{ $element->des_cate_componentes }}  </td>
								@if($element->esta_cate_componentes==0)
									<td style="color:red";><strong>  DESACTIVADO </strong> </td>
								@else
									<td style="color:green;"><strong>  ACTIVADO </strong>  </td>
								@endif
								@if(Auth::user()->tipo_usuario==1)
								<td class="tbl-action-col">
									<a href="{{ route('categoriaComponente-adm.edit' , ['id_cat_componentes' => $element->id_cat_componentes]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
								</td>						@endif
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

@stop
