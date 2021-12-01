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
						<th> Categoria </th>
						<th> Nombre Asignado </th>
						<th> Sede </th>
						<th> Estado </th>
						@if(Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==3)
						<th class="tbl-action-col"> Acciones </th>v
						@endif
					</thead>
					<tbody>
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_componente}}">
								<td>  {{ $element->serie_componente }} </td>
								<td>  {{ $element->des_componente }}  </td>
								<td>  {{ $element->des_cate_componentes }}  </td>
								<td>  {{@$element->no_colaborador}}&nbsp;{{@$element->ap_paterno_colaborador}}&nbsp;{{@$element->ap_materno_colaborador}} &nbsp;{{@$colaboradore->de_sede}}</td>
								<td>  {{$element->de_sede }} </td>
								@if($element->esta_componente==0)
									<td style="color:red";><strong>  DESACTIVADO </strong> </td>
								@else
									@if($element->esta_componente==1)
										<td style="color:green;"><strong>  ACTIVO  </strong></td>
									@else
										<td style="color:orange;"><strong>  ASIGNADO </strong> </td>
									@endif
								@endif
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
