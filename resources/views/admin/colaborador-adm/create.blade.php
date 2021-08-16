@extends('adminems::panel')

@section('content')
    @if(isset($element))
        {!! Form::model($element, [ 'route' => ['colaborador-adm.update', $element->id_colaborador], 'method' => 'PUT', 'files'=>'true' , 'id' => 'admin-form' ,'enctype'=>'multipart/form-data']) !!}
    @else
        {!! Form::open(['route' => 'colaborador-adm.store', 'method' => 'POST' ,'files'=>'true', 'id' => 'admin-form','enctype'=>'multipart/form-data']) !!}
    @endif

    {{--@include('admin.colaborador-adm.forms.form')--}}



    <div class="panel panel-white ui-sortable-handle" style="opacity: 1;">
        <div class="panel-heading">
            <h3 class="panel-title form-title"> Crear & Editar - Colaboradores </h3>
            <div class="panel-control">
                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" class="panel-collapse" data-original-title="Expand/Collapse"><i class="icon-arrow-down"></i></a>
            </div>
        </div>
        <div class="panel-body form-horizontal">
        
            <div class="form-group">

                <label class="col-sm-2 control-label"><strong>Codigo<span class="required"> * </span></strong></label>
                <div class="col-sm-8">
                <input class="form-control" placeholder ="" data-toggle="tooltip"  data-placement ='right' data-trigger='focus' title = "No puede modificar este campo" readonly='true' value={{$codigo}}>
                    
                <span class="help-block"><strong></strong></span>
                </div>
            </div>
                
                
            




























    
            <div class="form-group {{ $errors->has('no_colaborador') ? 'has-error' : '' }}">
                {!! Form::stdText('Nombre', 0, 'no_colaborador', $errors) !!}
            </div>
    
            <div class="form-group {{ $errors->has('ap_paterno_colaborador') ? 'has-error' : '' }}">
                {!! Form::stdText('Ap. Paterno', 0, 'ap_paterno_colaborador', $errors) !!}
            </div>
    
            <div class="form-group {{ $errors->has('ap_materno_colaborador') ? 'has-error' : '' }}">
                {!! Form::stdText('Ap. Materno', 0, 'ap_materno_colaborador', $errors) !!}
            </div>

            <div class="form-group {{ $errors->has('ti_documento') ? 'has-error' : '' }}">
                <!-- {!! Form::stdText('Tipo Documento', 0, 'ti_documento', $errors) !!}-->
                <?php
                $ddlTipoDocumento=["2"=>"DNI","1"=>"RUC","0"=>"Pasaporte"];
                ?>
                {!! Form::stdSelect('Tipo Documento', 0, 'ti_documento', $ddlTipoDocumento, null) !!}
            </div>








    
            <div class="form-group {{ $errors->has('nu_documento') ? 'has-error' : '' }}">
                {!! Form::stdText('Num. Documento', 1, 'nu_documento', $errors) !!}
            </div>
    
            <div class="form-group {{ $errors->has('usuario') ? 'has-error' : '' }}">
                {!! Form::stdText('Usuario', 1, 'usuario', $errors) !!}
            </div>
    
            {{--<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                {!! Form::stdText('Contraseña', 1, 'password', $errors) !!}
            </div>--}}
    
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label"><strong> Contraseña <span class="required"> * </span> </strong></label>
                <div class="col-sm-8">
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                    {!! $errors->first('password', '<span class="help-block"><strong> :message </strong></span>') !!}
                </div>
            </div>
    
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::stdText('Correo', 1, 'email', $errors) !!}
            </div> 
    
            <div class="form-group">        
                <label class="col-sm-2 control-label"><strong> Subir Foto</strong></label>
                <input type="file" class="form-control-file" name="foto" id="foto" accept="image/*">
    
            </div>  
    
            <div class="form-group {{ $errors->has('tipo_usuario') ? 'has-error' : '' }}">
                <!-- {!! Form::stdText('Tipo', 0, 'tipo_usuario', $errors) !!}-->
                <?php
                $ddlTipo=["1"=>"ADMINISTRADOR","2"=>"USUARIO"];
                ?>
                {!! Form::stdSelect('Tipo', 0, 'tipo_usuario', $ddlTipo, null) !!}
            </div>
    
        </div>
    
        <div class="panel-footer text-right">
            <strong> <span class="required"> * </span> Campos obligatorios </strong>
        </div>
        
    </div>



    {!! Form::close() !!}

    @isset($element)
        {{ Form::open(['route' => ['colaborador-adm.destroy' , $element->id_colaborador] , 'method' => 'DELETE', 'id' => 'form-delete-detail']) }}
        {{ Form::close() }}
    @endisset

    <div class="col-md-12">
        <button id="submit-btn" class="btn btn-success btn-addon m-b-sm"><i class="glyphicon glyphicon-floppy-disk"></i>
        <b>Guardar cambios</b> </button>
        @isset($element)
            <button id="delete-btn" class="btn btn-danger btn-addon m-b-sm" data-toggle="modal" data-target="#delete-modal">
                <i class="glyphicon glyphicon-trash"></i> Eliminar </button>
        @endisset
        <a class="btn btn-info btn-addon m-b-sm" href="{{ route('colaborador-adm.index') }}">
        <i class="glyphicon glyphicon-circle-arrow-left"></i> <b>Volver al listado</b> </a>
    </div>
@stop
