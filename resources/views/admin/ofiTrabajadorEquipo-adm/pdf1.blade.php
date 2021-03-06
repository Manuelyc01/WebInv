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
    <B class="verde">ENACO S.A.</B>
    <p class="Centrar">ASIGNACION DE EQUIPO</p>
    <p>Sede: {{ $element->no_sede }} | {{ $element->co_sede }} </p>
    <p>Fecha: <?php echo date("Y-m-d");?></p>
    <hr>
    <table id="tabla1">
        <tbody>
            <tr>
                <td>Colaborador:</td>
                <td>{{ $element->no_colaborador }}&nbsp;{{ $element->ap_paterno_colaborador }}&nbsp;{{ $element->ap_materno_colaborador }} </td>
            </tr>
            <tr>
                <td>Ubicación:</td>
                <td>{{ $element->no_sede }},{{ $element->no_oficina }}</td>
            </tr>
            <tr>
                <td>Nombre Equipo:</td>
                <td>{{$element->no_equipo}}</td>
            </tr>
            <tr>
                <td>Sistema Operativo:</td>
                <td>{{$element->sis_operativo}}</td>
            </tr>
            <tr>
                <td>Equipo:</td>
                <td>{{$element->des_equipo}}</td>
            </tr>
            <tr>
                <td>Cod. Patrimonial / SN:</td>
                <td>{{@$element->cod_opatrimonial}} / {{@$element->serie_equipo}}</td>
            </tr>
            <tr>
                <td>Observaciones:</td>
                <td>{{$element->estado_equipo}}</td>
            </tr>
            <tr>
                <td>Estado:</td>
                
                @if($element->esta_ofi_traba_equipo==0)
                    <td>NO ASIGNADO</td>
                @else
                    <td>ASIGNADO</td>
                @endif
            </tr>
            <tr>
                <td>Componentes:</td>                                                                                                                                                                       
                <td>
                @foreach ($compos as $compo)                     
                        <br>-{{ $compo->des_componente }}&nbsp;Serie:&nbsp;{{ $compo->serie_componente }}</br>     
                @endforeach
                </td>
            </tr>
            <tr>
                <td>Mantenimientos:</td>
                <td>
                @foreach ($mantenimientos as $mantenimiento)                     
                        @if($mantenimiento->estado==0)
                        <br>-{{$mantenimiento->descripcion }}:&nbsp;Iniciado</br>
								@else
									@if($mantenimiento->estado==1)
                                         <br>-{{ $mantenimiento->descripcion }}:&nbsp;En Proceso</br>
                                        
									@else
                                         <br>-{{ $mantenimiento->descripcion }}:&nbsp;Finalizado</br>
									@endif
								@endif   
                @endforeach
                </td>
            </tr>
            <tr>
                <td>Fecha de creación:</td>
                <td>{{ $element->created_at }}</td>
            </tr>
            <tr>
                <td>Fecha de actualización:</td>
                <td>{{ $element->updated_at }}</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-light">
        <tbody>
            <tr>
                <td>Imagenes:</td>
            </tr>
            <tr>
                <td>
                @foreach ($imagenes as $imagen)
                    <div class="col s12 m4 l3">
                        <div class="material-placeholder">
                            <img src="{{public_path($imagen->url)}}" alt="" class="responsive-img materialboxed"  width="300" height="250">
                        </div>
                    </div>
                @endforeach
                </td>
            </tr>
            <tr>
                <td>Documentos:</td>
            </tr>
            <tr>
                <td>
                @foreach ($documentos as $documento)
                            
                    <div class="col-sm-4">-  {{ $documento->nom_documento }} </div>
                            
                         
                @endforeach
                </td>
            </tr>
        </tbody>
    </table>



                
</body>
</html>