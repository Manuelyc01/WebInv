@extends('adminems::panel')
@section('cssAdicional')
    <link rel="stylesheet" href="{{ asset('vendor/ems/css/estilos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"><!--imagenes-->
 @stop

@section('content')
    <div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Vista solicitud </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div> 
    <div class="panel-body form-horizontal">

        
        <div class="form-group">
			<label class="col-sm-2 control-label"><strong> Descripcion</strong></label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="" data-toggle="tooltip" data-placement="right" data-trigger="focus" name="descripcion_solicitud" type="text" value="{{$element->descripcion_solicitud}}"readonly>
            </div>
		</div>
        @if($element->id_solicitud==null)
        <div class="form-group ">
            <label class="col-sm-2 control-label"><strong> Tipo solicitud</strong></label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="" data-toggle="tooltip" data-placement="right" data-trigger="focus" name="nom_solicitud" type="text" value="NUEVO EQUIPO" readonly>
            </div>
        </div>
        @else
        <div class="form-group ">
            <label class="col-sm-2 control-label"><strong> Tipo solicitud</strong></label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="" data-toggle="tooltip" data-placement="right" data-trigger="focus" name="nom_solicitud" type="text" value="{{$element->nom_solicitud}}" readonly>
            </div>
        </div>
        @endif

        <div class="form-group ">
            <label class="col-sm-2 control-label"><strong> Estado </strong></label>
            <div class="col-sm-3">
            @if($element->esta_soli_soli_ofi_equi_traba==0)
			<input style="background-color: red;color:white;" class="form-control" placeholder="" type="text" value="FINALIZADO" readonly>
            @elseif($element->esta_soli_soli_ofi_equi_traba==1)
			<input style="background-color: blue;color:white;" class="form-control" placeholder="" type="text" value="EN PROCESO" readonly>
            @else
            <input style="background-color: green;color:white;" class="form-control" placeholder="" type="text" value="RECIBIDO" readonly>
            @endif
            </div>
            
        </div>
         @if($element->id_ofi_traba_equipo)
        <div class="form-group ">
        <label class="col-sm-2 control-label"><strong> Equipo     </strong></label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="" type="text" value="{{ $equipo->des_equipo }}&nbsp;({{ @$equipo->cod_opatrimonial }}/ {{ @$equipo->serie_equipo }})" readonly>
            </div>
        </div>
        @endif

        @if($element->id_ofi_trabajador)
        <div class="form-group ">
        <label class="col-sm-2 control-label"><strong> Trabajador     </strong></label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="" type="text" value="{{ $trabajador->ap_paterno_colaborador }}&nbsp;{{ $trabajador->ap_materno_colaborador }}&nbsp;{{ $trabajador->no_colaborador }}" readonly>
            </div>
        </div>
        @endif



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
                    </div>
                @endforeach
                </div>  
            </div>
		</div>
        <div class="container">
            <div class="row">
                <table>
                    <thead><th>Documentos</th>
						<th></th></thead>
                    <tbody>             
                        @foreach ($documentos as $documento)
                        <tr>
                            <td>
                            <span class="menu-icon glyphicon glyphicon-book" style="float:left; margin-bottom:4px"></span>
                            <a href="{{ $documento->url }}" target="_blank">{{ $documento->nom_documento }}</a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
@section('jsAdicional')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('vendor/ems/js/main.js') }}"></script>
@stop