<div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
    <div class="panel-heading">
        <h3 class="panel-title form-title"> Crear & Editar - Mantenimiento </h3>
        <div class="panel-control">
            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
        </div>
    </div>
    <div class="panel-body form-horizontal">
        @if(!isset($element))
        @if(isset($x))
        <input type="text" name="soli" value="{{$x->id_soli_ofi_equi_tra}}" hidden>
        @endif
        <input id="id_ofi_traba_equipo" name="id_ofi_traba_equipo" type="hidden" value="{{$equipoAsignado->id_ofi_traba_equipo}}">
        <div class="form-group ">
        <label class="col-sm-2 control-label"><strong> Equipo / Colaborador</strong></label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="" type="text" value="{{$equipoAsignado->des_equipo}}  /  {{$equipoAsignado->no_colaborador}}{{$equipoAsignado->ap_paterno_colaborador}}" disabled>
            </div>
        </div>
        @else
        @if(isset($x))
        <input type="text" name="soli" value="{{$x->id_soli_ofi_equi_tra}}" hidden>
        @endif
        <div class="form-group ">
        <label class="col-sm-2 control-label"><strong> Equipo / Colaborador</strong></label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="" type="text" value="{{$element->des_equipo}}  /  {{$element->no_colaborador}}{{$element->ap_paterno_colaborador}}" disabled>
            </div>
        </div>
        @endif
        <div class="form-group {{ $errors->has('co_oficina') ? 'has-error' : '' }}">
            {!! Form::stdText('Descripcion', 0, 'descripcion', $errors) !!}
        </div>

        <div class="form-group {{ $errors->has('estado') ? 'has-error' : '' }}">
                <?php
                $list=["0"=>"Iniciado","1"=>"En Proceso","2"=>"Finalizado"];
                ?>
                {!! Form::stdSelect('Estado', 1, 'estado', $list, null) !!}
        </div>
        @if(!isset($element))
        <div class="form-group">
            <label class="col-sm-2 control-label"><strong> Subir Imagenes</strong></label>
            <input type="file" class="form-control-file" name="imagenes[]" id="imagenes[]" multiple accept="image/*">
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"><strong> Subir Documentos</strong></label>
            <input type="file" class="form-control-file" name="documentos[]" id="documentos[]" multiple accept=".pdf,.doc,.docx,.xlsx">
        </div>
        @else
        <div class="container">
            <div class="row" >
                <table  class="display table table-hover dataTable">
                    <thead>
						<th>Documentos</th>
						<th></th>
                    </thead>
                    <tbody id="docs">
                    @foreach ($documentos as $doc)
                        <tr>
                            <td><span class="menu-icon glyphicon glyphicon-book" style="float:left; margin-bottom:4px"></span>
                            <a href="{{ $doc->url }}" target="_blank">{{ $doc->nom_documento }}</a> 
                            </td>
                            <td>
                            <div class="col-md-3">
                                <button type="button" id="btnDelete{{ $doc->id_documento }}" onclick="deleteDoc('{{ $doc->id_documento }}')">Eliminar</button>
                                <label id="labDelete{{ $doc->id_documento }}" style="color:red" hidden>Eliminar Documento?</label>
                            </div>
                            <div class="col-md-3" id="formDelete{{ $doc->id_documento }}"  hidden>
                                <button type="button" onclick="eliminarDoc('{{ $doc->id_documento }}')"class="btnConfirm">Si</button>
                                <button type="button" onclick="dontDelete('{{ $doc->id_documento }}')" class="btnConfirm">No</button>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">   
                <div class="form-group">
                <label class="col-sm-2 control-label"><strong> Subir Documentos</strong></label>
                <input type="file" class="form-control-file" name="documentos[]" id="documentos[]" multiple accept=
                            "application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                            text/plain, application/pdf,">
                </div>
            </div>
        </div>
        <div class="form-group">
            <br>
            <div class="col-sm-2"></div>
            <div class="col-sm-4"><a class="btn btn-success btn-addon m-b-sm" href="/web-adm/mantenimiento-img/{{ $element->id_mantenimiento }}"target="_blank" class="btn btn-secondary"> Imagenes</a></div>
        </div> 
        @endif
    </div>

    <div class="panel-footer text-right">
        <strong> <span class="required"> * </span> Campos obligatorios </strong>
    </div>

</div>