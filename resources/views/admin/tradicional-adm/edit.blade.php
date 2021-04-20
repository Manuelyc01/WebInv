@extends('adminems::panel')

@section('content')
	@if(isset($element))
		{!! Form::model($element, ['route' => ['tradicional-adm.update', $element->id], 'method' => 'PUT' , 'id' => 'admin-form']) !!}
	@else
		{!! Form::open(['route' => 'tradicional-adm.store', 'method' => 'POST' , 'id' => 'admin-form']) !!}
	@endif

	@include('admin.tradicional-adm.forms.form')
	{!! Form::close() !!}

	<div class="col-md-12">
		<button id="submit-btn" class="btn btn-success btn-addon m-b-sm"><i class="fa fa-plus"></i> Guardar cambios </button>
	</div>
@stop

@section('scripts')
	<script src="{{ asset('vendor/ems/plugins/ckeditor/adapters/jquery.js') }}"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $(function(){
            
            $(".add-to-collection-item1").click(function(e) {
                e.preventDefault();
                var container = $('.item1');
                var count = container.children().length;
                var item1  = '{!! Form::arrayTextoTextoTexto("Nro.", null, "Título", null, "Descripción") !!}'; 
                container.append(item1);
            });
			            
        });
    </script>
@endsection