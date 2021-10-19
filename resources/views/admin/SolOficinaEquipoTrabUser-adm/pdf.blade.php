<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud</title>
    <link rel="stylesheet" href="{{ public_path('vendor/ems/css/estilos.css') }}">
</head>
<body>
    <h2>Datos Solicitud</h2> 
    <div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    
    <div class="panel-body form-horizontal">

        
        <div class="form-group">
			<label class="col-sm-2 control-label"><strong> Descripcion</strong></label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="" data-toggle="tooltip" data-placement="right" data-trigger="focus" name="descripcion_solicitud" type="text" value="{{$element->descripcion_solicitud}}"readonly>
            </div>
		</div>

        <div class="form-group ">
            <label class="col-sm-2 control-label"><strong> Tipo solicitud</strong></label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="" data-toggle="tooltip" data-placement="right" data-trigger="focus" name="nom_solicitud" type="text" value="{{$element->nom_solicitud}}" readonly>
            </div>
        </div>

        <div class="form-group ">
            <label class="col-sm-2 control-label"><strong> Estado </strong></label>
            <div class="col-sm-3">
            @if($element->esta_soli_soli_ofi_equi_traba==0)
			<input style="" class="form-control" placeholder="" type="text" value="FINALIZADO" readonly>
            @elseif($element->esta_soli_soli_ofi_equi_traba==1)
			<input style="" class="form-control" placeholder="" type="text" value="EN PROCESO" readonly>
            @else
            <input style="" class="form-control" placeholder="" type="text" value="RECIBIDO" readonly>
            @endif
            </div>
            
        </div>

        @if($element->id_ofi_traba_equipo)
        <div class="form-group ">
        <label class="col-sm-2 control-label"><strong> Trabajador-Equipo     </strong></label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="" type="text" value="{{ $equipotrajador->ap_paterno_colaborador }}&nbsp;{{ $equipotrajador->ap_materno_colaborador }}&nbsp;{{ $equipotrajador->no_colaborador }}&nbsp;{{ $equipo->des_equipo }}&nbsp;{{ $equipotrajador->no_equipo }} " readonly>
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
                            <img src="{{ public_path($imagen->url) }}" alt="" class="responsive-img materialboxed"  width="300" height="250">
                        </div>
                    </div>
                @endforeach
                </div>  
            </div>
		</div>
        <div class="container">
            <div class="row">
                <table>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label"><strong> Documentos </strong></label>      
                        @foreach ($documentos as $documento)
                        
                        <div class="col-sm-8">
                            <input class="form-control" placeholder="" type="text" value="{{ $documento->nom_documento }}" readonly>
                        </div>
                        
                        @endforeach
                    </div>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>