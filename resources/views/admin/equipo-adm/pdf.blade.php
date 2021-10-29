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
    <p class="Centrar">SEGUIMIENTO DE EQUIPO</p>
    <p>Fecha: <?php echo date("Y-m-d");?></p>
    <hr>
    <p>DATOS EQUIPO</p>
    <table id="tabla1">
        <tbody>
            <tr>
                <td>Serie:</td>
                <td>{{ $element->serie_equipo }} </td>
            </tr>
            <tr>
                <td>Codigo Patrimonial:</td>
                <td>{{ $element->cod_opatrimonial }}</td>
            </tr>
            <tr>
                <td>Descripcion:</td>
                <td>{{$element->des_equipo}}</td>
            </tr>
            <tr>
                <td>Tipo de bien :</td>
                <td>{{$element->tipoBien}}</td>
            </tr>
            <tr>
                <td>Fecha de Creacion:</td>
                <td>{{$element->created_at}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <p>ASIGANCIONES</p>
    <table id="tabla2">
        
            <tr>
                <th id="A">Fecha</th>
                <th id="A">Nombre</th>
                <th id="A">Sistema Opertarivo</th>
                <th id="A">Estado</th>   
                <th id="A">Colaborador</th>
            </tr>
            @foreach ($asignaciones as $asignacione)
            <tr>
                <td id="A">{{$asignacione->created_at}}</td>
                <td id="A">{{$asignacione->no_equipo}}</td>
                <td id="A">{{$asignacione->sis_operativo}}</td>
                <td id="A">{{$asignacione->estado_equipo}}</td> 
                <td id="A">{{ $asignacione->no_colaborador }}&nbsp;{{ $asignacione->ap_paterno_colaborador }}&nbsp;{{ $asignacione->ap_materno_colaborador }}</td>
            </tr>
            @endforeach
        
    </table>
    <br>
    <br>

    <p>MANTENIMIENTOS</p>

    <table id="tabla3">
        
            <tr>
                <th id="A">Fecha</th>
                <th id="A">Nombre</th>
                <th id="A">Sistema Opertarivo</th>
                <th id="A">Estado Mantenimiento</th>  
                <th id="A">Descripcion Mantenimiento</th>   
                <th id="A">Colaborador</th>
            </tr>
            @foreach ($mantenimientos as $mantenimiento)
            <tr>
                <td id="A">{{$mantenimiento->created_at}}</td>
                <td id="A">{{$mantenimiento->no_equipo}}</td>
                <td id="A">{{$mantenimiento->sis_operativo}}</td>
                @if($mantenimiento->estado==0)
                <td id="A">Iniciado</td>
                @else
                    @if($mantenimiento->estado==1)
                    <td id="A">En Proceso</td>
                    @else
                    <td id="A">Finalizado</td>
                    @endif
                @endif    
                <td id="A">{{$mantenimiento->descripcion}}</td> 
                <td id="A">{{$mantenimiento->no_colaborador }}&nbsp;{{ $mantenimiento->ap_paterno_colaborador }}&nbsp;{{ $mantenimiento->ap_materno_colaborador }}</td>
            </tr>
            @endforeach
        
    </table>

    


                
</body>
</html>