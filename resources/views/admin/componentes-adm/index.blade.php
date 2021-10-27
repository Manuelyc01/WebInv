@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> COMPONENTES </h2>
				@if(Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==3)
				<a href="{{ route('componente-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa fa-plus"></i> Añadir componente </a>
				@endif
			</div>
			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Serie </th>
						<th> Descripción </th>
						<th> Estado </th>
						<th> Categoria </th>
						<th> Nombre Asignado </th>
						<th> Sede </th>
						@if(Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==3)
						<th class="tbl-action-col"> Acciones </th>v
						@endif
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
								<td> <strong> {{@$element->no_colaborador}}&nbsp;{{@$element->ap_paterno_colaborador}}&nbsp;{{@$element->ap_materno_colaborador}}<strong> &nbsp;{{@$colaboradore->de_sede}}</strong></td>
								<td> <strong> {{$element->de_sede }} </strong></td>
								@if(Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==3)
								<td class="tbl-action-col">
									<a href="{{ route('componente-adm.edit' , ['id_componente' => $element->id_componente]) }}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
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
