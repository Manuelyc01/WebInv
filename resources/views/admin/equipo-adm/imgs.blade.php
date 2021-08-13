@extends('adminems::panel')
@section('cssAdicional')
    <link rel="stylesheet" href="{{ asset('vendor/ems/css/estilos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"><!--imagenes-->
 @stop
 @section('content')
    <div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> EQUIPO </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col s12 center-align">
                        <label >Imagenes</label>
                    </div>
                </div>
                <div class="row galeria">
                @foreach ($imagenes as $imagen)
                    <div class="col s12 m4 l3">
                        <div class="material-placeholder">
                            <img src="{{ $imagen->url }}" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="card-footer">
                            <form action="{{ route('imagen-adm.destroy' , ['id' => $imagen->id]) }}" class="d-inline" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                @endforeach
                </div>  
            </div>
            <form action="{{ route('imagen-adm.store' , []) }}" enctype="multipart/form-data" class="d-inline" method="post">
            <div class="form-group">    
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <input type="hidden" value="{{ $element->id_equipo }}" name="id_equipo">
                <label class="col-sm-2 control-label"><strong> Subir Imagenes</strong></label>
                <input type="file" class="form-control-file" name="imagenes[]" id="imagenes[]" multiple accept="image/*">
            </div>
            <div class="form-group">
                <div class="col s12 center align">
                <button type="submit">Guardar imagenes</button>
                </div>
            </div>
            </form> 
		</div>
    </div>
@stop
@section('jsAdicional')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('vendor/ems/js/main.js') }}"></script>
@stop