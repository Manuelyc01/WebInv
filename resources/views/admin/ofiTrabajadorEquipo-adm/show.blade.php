@extends('adminems::panel')
@section('cssAdicional')
    <link rel="stylesheet" href="{{ asset('vendor/ems/css/estilos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"><!--imagenes-->
 @stop

@section('content')
    <div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Asifnación de Equipo </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        
        <div class="form-group">
			<label class="col-sm-2 control-label"><strong> HostName</strong></label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="" data-toggle="tooltip" data-placement="right" data-trigger="focus" name="no_equipo" type="text" value="{{$element->no_equipo}}"readonly>
            </div>
		</div>

        <div class="form-group ">
            <label class="col-sm-2 control-label"><strong> Sistema Operativo</strong></label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="" data-toggle="tooltip" data-placement="right" data-trigger="focus" name="sis_operativo" type="text" value="{{$element->sis_operativo}}" readonly>
            </div>
        </div>

        <div class="form-group ">
            <label class="col-sm-2 control-label"><strong> Observaciones del equipo</strong></label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="" data-toggle="tooltip" data-placement="right" data-trigger="focus" name="estado_equipo" type="text" value="{{$element->estado_equipo}}"readonly>
            </div>
        </div>

        <div class="form-group ">
            <label class="col-sm-2 control-label"><strong> Estado </strong></label>
            <div class="col-sm-3">
            @if($element->esta_ofi_traba_equipo==0)
			<input style="background-color: red;color:white;" class="form-control" placeholder="" type="text" value="BAJA" readonly>
            @elseif($element->esta_ofi_traba_equipo==1)
			<input style="background-color: yellow;color:white;" class="form-control" placeholder="" type="text" value="MANTENIMIENTO" readonly>
            @else
            <input style="background-color: green;color:white;" class="form-control" placeholder="" type="text" value="ACTIVO" readonly>
            @endif
            </div>
            
        </div>
        <div class="form-group ">
        <label class="col-sm-2 control-label"><strong> Equipo </strong></label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="" type="text" value="{{$element->tipoBien}}" readonly>
            </div>
        </div>
        <div class="form-group ">
        <label class="col-sm-2 control-label"><strong> Colaborador </strong></label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="" type="text" value="{{ $element->no_colaborador }}&nbsp;{{ $element->ap_paterno_colaborador }}&nbsp;{{ $element->ap_materno_colaborador }} " readonly>
            </div>
        </div>
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