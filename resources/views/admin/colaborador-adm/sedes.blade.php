@extends('adminems::panel')

@section('content')

	<div class="col-md-12">

		<div class="panel panel-white">
			<div class="panel-heading">
                <input id="id_colaborador" value="{{ $x->id_colaborador }}" hidden>
				<h2 class="panel-title form-title"> SEDES ASIGNADAS A {{ $x->no_colaborador }} {{ $x->ap_paterno_colaborador }} </h2>
                @if(Auth::user()->id_roles==1)
                <div class="form-group pull-right">
                    <div class="col-sm-4 control-label"> 
                        <button class="btn btn-info" id="subSede"> Agregar Sede </button>
                    </div>
                    <div class="col-sm-8">
                        <input class="form-control" list="datalistOptionsSede" id="id_sede" placeholder="Buscar" autocomplete="off">
                        <datalist id="datalistOptionsSede">
                            @foreach($sedes as $sede)
                                <option value="{{@$sede->id_sede}}">{{@$sede->no_sede}}</option>
                            @endforeach
                        </datalist>
                    </div>
                </div>
                @endif
            </div>
			<div class="panel-body">
				<table id="table" class="display table table-hover dataTable">
					<thead>
						<th> Cod. Sede </th>
						<th> Nombre </th>
                        @if(Auth::user()->id_roles==1)
						<th> Acciones </th>
                        @endif
					</thead>
					<tbody id="sedes">
						@foreach ($elements as $element)
							<tr data-id="{{ $element->id_sede }}">
								<td> <strong> {{ $element->co_sede }} </strong></td>
								<td> <strong> {{ $element->no_sede  }} </strong> </td>
								@if(Auth::user()->id_roles==1)
                                <td >
                                <div class="col-md-6">
                                    <button type="button" id="btnDelete{{ $element->id_sede }}" onclick="deleteDoc('{{ $element->id_sede }}')">Eliminar</button>
                                    <label id="labDelete{{ $element->id_sede }}" style="color:red" hidden>Eliminar Sede Asignada?</label>
                                </div>
                                <div class="col-md-3" id="formDelete{{ $element->id_sede }}"  hidden>
                                    <button type="button" onclick="eliminarDoc('{{ $element->id_sede }}')"class="btnConfirm">Si</button>
                                    <button type="button" onclick="dontDelete('{{ $element->id_sede }}')" class="btnConfirm">No</button>
                                </div>
								</td>
                                @endif
							</tr>
						@endforeach

					</tbody>
				</table>
			</div>
		</div>

	</div>

    <script>
        function deleteDoc(id){
            document.getElementById('labDelete'+id).hidden = false;
            document.getElementById('btnDelete'+id).hidden = true;
            document.getElementById('formDelete'+id).hidden = false;
        }
        function dontDelete(id){
            document.getElementById('labDelete'+id).hidden = true;
            document.getElementById('btnDelete'+id).hidden = false;
            document.getElementById('formDelete'+id).hidden = true;
        }
        function eliminarDoc(idsede){
            var idcol= document.getElementById('id_colaborador').value;
            $(".btnConfirm").prop('disabled', true);
            $.ajax({
                type: 'GET', 
                url: '/web-adm/dropSede/'+idsede+'/'+idcol,
                success: function (data) {
                    table(data);
                },
                error: function(data) {
                    console.log(data); 
                    alert("No se pudo eliminar registro");
                }
            });
        }
        $(document).ready(function() {
            $("#subSede").on('click', function () {
               var dataOp= document.getElementById('id_sede');
               var idsede= document.getElementById('id_sede').value;
               var idcol= document.getElementById('id_colaborador').value;
               console.log(idsede);
               $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url: '/web-adm/addSedeCol/'+idsede+'/'+idcol,
                        success: function (data) {
                            if(data==2){
                                alert("Error de registro");
                                dataOp.value='';
                            }else{
                                table(data);
                            }
                        },
                        error: function(e) { 
                            console.log(e)
                            alert("Error de registro");
                        }
                    });
                $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url: '/web-adm/sedesDataList/'+idcol,
                    success:function(data){
                        const options=document.querySelector('#datalistOptionsSede');
                        options.innerHTML=``;
                        for(let i=0;i<data.length;i++){
                            options.innerHTML+=`
                            <option value=" ${data[i].id_sede}">${data[i].no_sede}</option>
                            `;
                        }  
                    },
                    error: function(e) { 
                            console.log(e)
                            alert("Error en eliminación");
                        }
                });
            });   
        });
        function table(data){
            var dataOp= document.getElementById('id_sede');
            dataOp.value='';
            const sedes=document.querySelector('#sedes');
            sedes.innerHTML=``;
            for(let i=0;i<data.length;i++){
            sedes.innerHTML+=`
            <tr data-id="${data[i].id_sede}">
                <td> <strong> ${data[i].co_sede} </strong></td>
                <td> <strong> ${data[i].no_sede} </strong> </td>
                <td>
                    <div class="col-md-6">
                        <button type="button" id="btnDelete${data[i].id_sede}" onclick="deleteDoc(${data[i].id_sede})">Eliminar</button>
                        <label id="labDelete${data[i].id_sede}" style="color:red" hidden>Eliminar Sede Asignada?</label>
                    </div>
                    <div class="col-md-3" id="formDelete${data[i].id_sede}"  hidden>
                        <button type="button" onclick="eliminarDoc(${data[i].id_sede})"class="btnConfirm">Si</button>
                        <button type="button" onclick="dontDelete(${data[i].id_sede})" class="btnConfirm">No</button>
                    </div>
                </td>
                </tr>                                                           
            `;
            }
        }
    </script>
   
@stop
