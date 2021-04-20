@extends('adminems::panel')

@section('content')

    <div class="col-md-12">

        <div class="panel panel-white">
            <div class="panel-heading">
                <h2 class="panel-title form-title"> Trabajo </h2>
                <a href="{{ route('trabajo-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa
                fa-plus"></i>
                Añadir
                nuevo </a>
            </div>

            <div class="panel-body">
                <table id="table" class="display table table-hover dataTable">
                    <thead>
                    <th> Título </th>
                    <th> Descripción </th>
                    <th> Mostrar/Ocultar </th>
                    <th class="tbl-action-col">  Acciones </th>
                    </thead>
                    
                    <tbody>
                    @foreach ($elements as $element)
                        <tr data-id="{{ $element->id }}">
                        <td> {{ $element->titulo }}</td>
                        <td> {!! $element->des !!}</td>
                        <td> {{ Form::checkbox('Visible', isset($element) ? $element->id : '', isset($element) ? $element->visible : '', ['class' => 'form-control visible-trabajo']) }} </td>
                            <td class="tbl-action-col">
                                <a href="{{ route('trabajo-adm.edit' , ['slug' => $element->id]) }}" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('adminems::preview')

@stop

@section('scripts')
    <script>
        $(function(){
           
           $(".visible-trabajo").on("click", function(e){
               item = $(this);
               id = item.val();
               checked = item.is(":checked");
           $.ajax({
               url : "{{ route('visible-trabajo') }}",
               type : 'post',
               dataType : 'json',
               data: { id: id, checked: checked },
               success : function(resultado) {                    
               }
           });
       });
       });
    </script>
@endsection