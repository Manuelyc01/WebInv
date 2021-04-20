@extends('adminems::panel')

@section('content')
	@if(isset($element))
		{!! Form::model($element, ['route' => ['historia-adm.update', $element->id], 'method' => 'PUT' , 'id' => 'admin-form']) !!}
	@else
		{!! Form::open(['route' => 'historia-adm.store', 'method' => 'POST' , 'id' => 'admin-form']) !!}
	@endif

	@include('admin.historia-adm.forms.form')
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
                console.log("entree1");
                var container = $('.item1');
                var count = container.children().length;
                var item1  = '{!! Form::arrayArchivoArchivoTexto("Imagen","archivo1A","'+count+'", null, "Imagen Hover","archivo2A","'+count+'", null, "Texto") !!}'; 
                container.append(item1);
            });

			$(".add-to-collection-item2").click(function(e) {
                e.preventDefault();
                var container = $('.item2');
                var count = container.children().length;
                var item2  = '{!! Form::arrayImgTextoTextoDes("Imagen","imgA","'+count+'", null, "Año", null, "Título", null, "Descripción") !!}'; 
                container.append(item2);
            });

			$(".add-to-collection-item3").click(function(e) {
                e.preventDefault();
                var container = $('.item3');
                var count = container.children().length;
                var item3  = '{!! Form::arraySoloUnArchivo("Imagen","archivoOne1A","'+count+'") !!}'; 
                container.append(item3);
            });

			$(".add-to-collection-item4").click(function(e) {
                e.preventDefault();
                var container = $('.item4');
                var count = container.children().length;
                var item4  = '{!! Form::arraySoloUnArchivo1("Imagen","archivoOne1A1","'+count+'") !!}'; 
                container.append(item4);
            });

			$(".add-to-collection-item5").click(function(e) {
                e.preventDefault();
                var container = $('.item5');
                var count = container.children().length;
                var item5  = '{!! Form::arraySoloUnArchivo2("Imagen","archivoOne1A2","'+count+'") !!}'; 
                container.append(item5);
            });
			            
        });
    </script>
@endsection