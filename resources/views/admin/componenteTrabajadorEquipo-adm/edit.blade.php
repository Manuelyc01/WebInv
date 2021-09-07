@extends('adminems::panel')

@section('content')
    @if(isset($elementsCoEquiTraba))
        {!! Form::model($elementsCoEquiTraba, [ 'route' => ['componenteTrabajadorEquipo-adm.update', $elementsCoEquiTraba->id_ofi_traba_equi_compo], 'method' => 'PUT', 'id' => 'admin-form','enctype'=>'multipart/form-data' ]) !!}
    @else
        {!! Form::open(['route' => 'componenteTrabajadorEquipo-adm.store', 'method' => 'POST' , 'id' => 'admin-form','enctype'=>'multipart/form-data']) !!}
    @endif
    @include('admin.componenteTrabajadorEquipo-adm.forms.form')
    {!! Form::close() !!}

    @isset($elementsCoEquiTraba)
        {{ Form::open(['route' => ['componenteTrabajadorEquipo-adm.destroy' , $elementsCoEquiTraba->id_ofi_traba_equi_compo] , 'method' => 'DELETE', 'id' => 'form-delete-detail']) }}
        {{ Form::close() }}
    @endisset

    <div class="col-md-12">
        <button id="submit-btn" class="btn btn-success btn-addon m-b-sm"><i class="glyphicon glyphicon-floppy-disk"></i>
        <b>Guardar cambios</b> </button>
        @isset($elementsCoEquiTraba)
            <button id="delete-btn" class="btn btn-danger btn-addon m-b-sm" data-toggle="modal" data-target="#delete-modal">
                <i class="glyphicon glyphicon-trash"></i> Eliminar </button>
        @endisset
        <a class="btn btn-info btn-addon m-b-sm" href="{{ route('componenteTrabajadorEquipo-adm.index',['id_ofi_equi_trabajador' => $id_ofi_equi_trabajador]) }}">
        <i class="glyphicon glyphicon-circle-arrow-left"></i> <b>Volver al listado</b> </a>
    </div>
@stop
