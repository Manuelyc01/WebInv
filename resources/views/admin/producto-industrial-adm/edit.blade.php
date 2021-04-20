@extends('adminems::panel')

@section('content')
    @if(isset($element))
        {!! Form::model($element, [ 'route' => ['producto-industrial-adm.update', $element->id], 'method' => 'PUT', 'id' => 'admin-form' ]) !!}
    @else
        {!! Form::open(['route' => 'producto-industrial-adm.store', 'method' => 'POST' , 'id' => 'admin-form']) !!}
    @endif

    @include('admin.producto-industrial-adm.forms.form')
    {!! Form::close() !!}

    @isset($element)
        {{ Form::open(['route' => ['producto-industrial-adm.destroy' , $element->id] , 'method' => 'DELETE', 'id' => 'form-delete-detail']) }}
        {{ Form::close() }}
    @endisset

    <div class="col-md-12">
        <button id="submit-btn" class="btn btn-success btn-addon m-b-sm"><i class="glyphicon glyphicon-floppy-disk"></i>
        <b>Guardar cambios</b> </button>
        @isset($element)
            <button id="delete-btn" class="btn btn-danger btn-addon m-b-sm" data-toggle="modal" data-target="#delete-modal">
                <i class="glyphicon glyphicon-trash"></i> Eliminar </button>
        @endisset
        <a class="btn btn-info btn-addon m-b-sm" href="{{ route('producto-industrial-adm.index') }}">
        <i class="glyphicon glyphicon-circle-arrow-left"></i> <b>Volver al listado</b> </a>
    </div>
@stop

@section('scripts')
	<script src="{{ asset('vendor/ems/plugins/ckeditor/adapters/jquery.js') }}"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $(function(){

            $('.multiple').select2({
				width: '100%'
			});
            
            $(".add-to-collection-item1").click(function(e) {
                e.preventDefault();
                var container = $('.item1');
                var count = container.children().length;
                var item1  = '{!! Form::arrayTextoImgImgImg("Imagen","img1A","'+count+'", null, "Imagen","img2A","'+count+'", null, "Imagen","img3A","'+count+'", null, "Texto") !!}'; 
                container.append(item1);
            });

            $(".add-to-collection-item2").click(function(e) {
                e.preventDefault();
                var container = $('.item2');
                var count = container.children().length;
                var item2  = '{!! Form::arrayTextoTexto2("Nro.", null, "Descripción") !!}'; 
                container.append(item2);
            });
			            
        });
    </script>
@endsection
