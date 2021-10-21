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
   <div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Equipo Asignado </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">

        <div class="form-group">
            <div class="col-sm-2"></div>
            <div class="col-sm-4"><h4><strong>Fecha de creación:</strong>   {{ $element->created_at }}</h4> </div>
            <div class="col-sm-4"><h4><strong>Fecha de actualización:</strong>   {{ $element->updated_at }}</h4></div>
        </div>
        <div class="form-group">

                <div class="col-sm-4"><h4><strong>HostName:</strong>   {{$element->no_equipo}}</h4></div>
            
		</div>

        <div class="form-group ">
            <div class="col-sm-4"><h4><strong>Sistema Operativo:</strong>   {{$element->sis_operativo}}</h4></div>
        </div>

        <div class="form-group ">
            <div class="col-sm-4"><h4><strong>Observaciones del equipo:</strong>   {{$element->estado_equipo}}</h4></div>
        </div>

        <div class="form-group ">
            <div class="col-sm-3">
            @if($element->esta_ofi_traba_equipo==0)
            <div class="col-sm-4"><h4><strong>Estado:</strong>   NO ASIGNADO</h4></div>
	
            @else
            <div class="col-sm-4"><h4><strong>Estado:</strong>   ASIGNADO</h4></div>
            @endif
            </div>
            
        </div>
        <div class="form-group ">
             <div class="col-sm-4"><h4><strong>Equipo:</strong>   {{$element->tipoBien}}</h4></div>
        </div>
        <div class="form-group ">
            <div class="col-sm-4"><h4><strong>Colaborador:</strong>   {{ $element->no_colaborador }}&nbsp;{{ $element->ap_paterno_colaborador }}&nbsp;{{ $element->ap_materno_colaborador }} &nbsp;(Ubicación:{{ $element->no_sede }},{{ $element->no_oficina }} </h4></div>
            <div class="col-sm-4"><h4><strong>Ubicación:</strong>   {{ $element->no_sede }},{{ $element->no_oficina }} </h4></div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <table>
                    <div class="form-group ">
                        <label class="col-sm-2 control-label"><strong> Componentes: </strong></label>      
                        @foreach ($compos as $compo)
                        
                        <div class="col-sm-4"><h4><strong>-</strong>   {{ $compo->serie_componente }}&nbsp;{{ $compo->des_componente }} </h4></div>
                        
                        @endforeach
                    </div>
                   
                </table>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <table>
                 <div class="form-group ">
                        <div class="col-sm-4"><h4><strong>Mantenimientos:</strong> </h4></div>     
                        </div>  
                    <tbody>   
                       
                           
                        @foreach ($mantenimientos as $mantenimiento)
                        <tr>
                            <td>
                                
                            </td>
                            @if($mantenimiento->estado==0)
									<div class="col-sm-4"><h4><strong>-{{$mantenimiento->descripcion }}:</strong>   Iniciado</h4></div>
								@else
									@if($mantenimiento->estado==1)
                                        <div class="col-sm-4"><h4><strong>-{{ $mantenimiento->descripcion }}</strong>  Proceso</h4></div>
									@else
                                        <div class="col-sm-4"><h4><strong>-{{ $mantenimiento->descripcion }}</strong>  Finalizado</h4></div>
									@endif
								@endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4"><h4><strong>Imagenes:</strong></h4></div>
                </div>
                <div class="row galeria">
                @foreach ($imagenes as $imagen)
                    <div class="col s12 m4 l3">
                        <div class="material-placeholder">
                            <img src="https://quierolaborar.com/wp-content/uploads/2019/05/Vacantes-Disponibles-para-Enaco-S.a-750x450.png" alt="" class="responsive-img materialboxed"  width="300" height="250">
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
						<div class="col-sm-4"><h4><strong>Documentos:</strong></h4></div>                 
                        @foreach ($documentos as $documento)
                            
                            <div class="col-sm-4"><h4><strong>-</strong>   {{ $documento->nom_documento }} </h4></div>
                            
                         
                        @endforeach
                    </div>
                </table>
            </div>
        </div>
    </div> 
    
</body>
</html>