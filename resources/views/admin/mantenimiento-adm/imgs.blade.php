@extends('adminems::panel')
@section('cssAdicional')
    <link rel="stylesheet" href="{{ asset('vendor/ems/css/estilos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"><!--imagenes-->
 @stop
 @section('content')
    <div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Mantenimientos </h3>
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
                <div class="row galeria" id="gal">
                @foreach ($imagenes as $imagen)
                    <div class="col s12 m4 l3">
                        <div class="material-placeholder">
                            <img src="{{ $imagen->url }}" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="card-footer">
                        <div class="col-md-6">
                            <button id="btnDelete{{ $imagen->id }}" onclick="deleteImg('{{ $imagen->id }}')">Eliminar</button>
                            <label id="labDelete{{ $imagen->id }}" style="color:red" hidden>Eliminar Imagen?</label>
                        </div>
                        <div class="col-md-6" id="formDelete{{ $imagen->id }}" hidden>
                            <button onclick="eliminarImagen('{{ $imagen->id }}')"class="btnConfirm">Si</button>
                            <button onclick="dontDelete('{{ $imagen->id }}')" class="btnConfirm">No</button>
                        </div>
                        </div>
                    </div>
                @endforeach
                </div>  
            </div>
            <form action="{{ route('imagen-adm.store' , []) }}" enctype="multipart/form-data" class="d-inline" method="post">
            <div class="form-group">    
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <input type="hidden" name="type" value="{{ $type }}">
                <input type="hidden" value="{{ $element->id_mantenimiento }}" name="id_mantenimiento">
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
    <script >
        function deleteImg(id){
            document.getElementById('labDelete'+id).hidden = false;
            document.getElementById('btnDelete'+id).hidden = true;
            document.getElementById('formDelete'+id).hidden = false;
        }
        function dontDelete(id){
            document.getElementById('labDelete'+id).hidden = true;
            document.getElementById('btnDelete'+id).hidden = false;
            document.getElementById('formDelete'+id).hidden = true;
        }
        function eliminarImagen(id){
            $(".btnConfirm").prop('disabled', true);
            $.ajax({
                type: 'GET', 
                url: '/web-adm/deleteImagen/'+id+'/1',
                success: function (data) {
                    const galeria = document.querySelector('#gal');
                    galeria.innerHTML=``;
                    for(let i=0;i<data.length;i++){
                        galeria.innerHTML+=`
                    <div class="col s12 m4 l3">
                        <div class="material-placeholder">
                            <img src="${data[i].url}" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="card-footer">
                        <div class="col-md-6">
                            <button id="btnDelete${data[i].id}" onclick="deleteImg('${data[i].id}')">Eliminar</button>
                            <label id="labDelete${data[i].id}" style="color:red" hidden>Eliminar Registro?</label>
                        </div>
                        <div class="col-md-6" id="formDelete${data[i].id}" hidden>
                            <button onclick="eliminarImagen(${data[i].id})" class="btnConfirm">Si</button>
                            <button onclick="dontDelete(${data[i].id})" class="btnConfirm">No</button>
                        </div>
                        </div>
                    </div>
                    `;
                    }
                },
                error: function() { 
                console.log("No se pudo eliminar");
                }
            });
        }
    </script>
@stop