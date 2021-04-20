@extends('adminems::panel')

@section('content')
	@if(isset($element))
		{!! Form::model($element, ['route' => ['info-adm.update', $element->id], 'method' => 'PUT' , 'id' => 'admin-form']) !!}
	@else
		{!! Form::open(['route' => 'info-adm.store', 'method' => 'POST' , 'id' => 'admin-form']) !!}
	@endif

	@include('admin.info-adm.forms.form')
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
                var item1  = '{!! Form::arrayTextoTextoTextoTextoTexto("Título", null, "Teléfono", null, "Celular", null, "Dirección", null, "Lugar") !!}'; 
                container.append(item1);
            });

			$(".add-to-collection-item2").click(function(e) {
                e.preventDefault();
                var container = $('.item2');
                var count = container.children().length;
                var item2  = '{!! Form::arrayTextoTextoTextoTextoTexto2("Título", null, "Teléfono", null, "Celular", null, "Dirección", null, "Lugar") !!}'; 
                container.append(item2);
            });
			            
        });
    </script>
@endsection