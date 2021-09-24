@extends('adminems::panel')

@section('content')
    @if(isset($element))
        {!! Form::model($element, [ 'route' => ['SolOficinaEquipoTrab-adm.update', $element->id_soli_ofi_equi_tra], 'method' => 'PUT', 'id' => 'admin-form','enctype'=>'multipart/form-data' ]) !!}
    @else
        {!! Form::open(['route' => 'SolOficinaEquipoTrab-adm.store', 'method' => 'POST' , 'id' => 'admin-form','enctype'=>'multipart/form-data']) !!}
    @endif

    @include('admin.SolOficinaEquipoTrab-adm.forms.form')
    {!! Form::close() !!}

    @isset($element)
        {{ Form::open(['route' => ['SolOficinaEquipoTrab-adm.destroy' , $element->id_soli_ofi_equi_tra] , 'method' => 'DELETE', 'id' => 'form-delete-detail']) }}
        {{ Form::close() }}
    @endisset

    <div class="col-md-12">
        <button id="submit-btn" class="btn btn-success btn-addon m-b-sm"><i class="glyphicon glyphicon-floppy-disk"></i>
        <b>Guardar cambios</b> </button>
        @isset($element)
            <button id="delete-btn" class="btn btn-danger btn-addon m-b-sm" data-toggle="modal" data-target="#delete-modal">
                <i class="glyphicon glyphicon-trash"></i> Eliminar </button>
        @endisset
        <a class="btn btn-info btn-addon m-b-sm" href="{{ route('SolOficinaEquipoTrab-adm.index') }}">
        <i class="glyphicon glyphicon-circle-arrow-left"></i> <b>Volver al listado</b> </a>
        @if($element->id_ofi_trabajador==null)
        <a class="btn btn-info btn-addon m-b-sm" href="/web-adm/mantenimiento-adm/crear/{{ $element->id_soli_ofi_equi_tra}}/1">
        <i class="glyphicon glyphicon-circle-arrow-left"></i> <b>Dar Mantenimiento</b> </a>@endif
    </div>
@stop
