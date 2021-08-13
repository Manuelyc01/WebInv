@extends('adminems::panel')

@section('content')
	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
				<h2 class="panel-title form-title"> SEO </h2>
			</div>

			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> URL </th>
						<th> Título </th>
						<th> Descripción </th>
						<th class="tbl-action-col"> Acciones </th>
					</thead>

					<tbody>
						@foreach ($routes as $element)
							<tr data-id="{{ $element->id }}">
								<td>  {{ $element->path }}  </td>
								<td> {{ $element->title }} </td>
								<td> {{ $element->description }} </td>
								<td class="tbl-action-col"> <a href="{{ route('seo.edit' , ['id' => $element->id]) }}" class="btn btn-info" > <i class="fa fa-edit"></i> </a></td>
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>
@stop
