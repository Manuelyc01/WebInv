@extends('web.common.base')

@section('cssadicional')
	<link rel="stylesheet" type="text/css" href="{{ $STATIC_URL }}js/validationform/validationEngine.jquery.css">
@stop

@section('classbody')contacto-css
@stop
@section('content')

<!-- CONTENIDO PARA CLONAR NO BORRAR !! -->

<div class="b22-wrap-form clone nuevo">
	<span class="icon-outline-clear-24px b22-delete-form"></span>
		<div class="b22-resumen">
			<div class="b22-data">
				<h2><span></span></h2>
			</div>
			<div class="b22-icons">
				<a href="#" class="form-editar"><span class="icon-outline-create-24px"></span></a>
				<a href="#" class="form-eliminar"><span class="icon-outline-delete_sweep-24px"></span></a>
			</div>
		</div>
		<div class="form-group-item">
			<div class="b20__options">
				<ul>
					<li>
						<input checked="" type="radio" value="Persona interna" id="" data-radio="radio-check"  class="validate[required] formaCheck persona-interna" name="3">
						<label for="">
							<span></span>
							Persona interna
						</label>
					</li>
					<li>
						<input type="radio" id="" value="Persona externa" data-radio="radio-check"  class="validate[required] formaCheck persona-externa" name="3">
						<label for="">
							<span></span>
							Persona externa
						</label>
					</li>
				</ul>
			</div>
			<div class="b20__row">
				<div class="b20__input">
					
						<input type="text" name="nombres" id="nombres" class="input__fijar">
						<label for="nombres">Nombres</label>
					
				</div>
				<div class="b20__input">
					
						<input type="text" name="apellidos" id="apellidos" class="input__fijar">
						<label for="apellidos">Apellidos</label>
					
				</div>
			</div>
			<div class="b20__row">
				<div class="b20__input">
					
						<input type="text" name="relacionempresa" id="relacionempresa"  class="input__fijar">
						<label for="relacionempresa">Relación con la empresa</label>
					
				</div>
				<div class="b20__input">
					
						<input type="text" name="empresa" id="empresa"  class="input__fijar">
						<label for="empresa">Especificar empresa / cargo / otro</label>
					
				</div>
			</div>
			<div class="b20__textarea">
				 <textarea placeholder="Datos adicionales sobre la persona involucrada" name="comentario" id="comentario"  class="" cols="30" rows="10"></textarea>
			</div>
			<div class="form-btn">
				<a href="http://localhost:9002/es/nosotros/historia" class="g-btn-small general__btn j-submit">
		            <span>Guardar</span>
		        </a>
			</div>
		</div>
</div>
<!-- CONTENIDO PARA CLONAR NO BORRAR !! -->

<div class="b20 b20__denuncias" id="b22">
	<div class="">
		
		<div class="wancho">
			<div class="b2__cnt">
				<div class="b2__text b2__text__historia">
					<div class="general__title" data-style="50">
						<h2>{{$info->tituloDenuncia}}</h2>
					</div>
					<div class="b22-info">
						{!!$info->desDenuncia!!}
					</div>
				</div>
			</div>
		</div>
		<div class="b20__cnt">
			<form action="" class="b20__form1">
				<div class="b20__row">
					<div class="b20__select b20__select1">
						<select name="sede"  class="validate[required] formaCheck">
							<option value="">Sedes de la empresa*</option>
							@foreach ($data['sedes'] as $item)
								<option value="{{$item->id}}">{{$item->nombre}}</option>
							@endforeach
						</select>
						<div class="b20__selectBox">
							<a href="" class="b20__clickSelect f-perfil"><span>Sedes de la empresa*</span></a>
							<ul class="b20__selectList">
								@foreach ($data['sedes'] as $item)
									<li class="b20__data" data-position="{{$item->id}}">	                            
										<span>{{$item->nombre}}</span>
									</li> 
								@endforeach									                 
							</ul>
						</div>
					</div>
					<div class="b20__select b20__select1">
						<select name="tipo"  class="validate[required] formaCheck">
							<option value="">Tipo de denuncia*</option>
							@foreach ($data['tipos'] as $item)
								<option value="{{$item->id}}">{{$item->nombre}}</option>
							@endforeach
						</select>
						<div class="b20__selectBox">
							<a href="" class="b20__clickSelect f-perfil"><span>Tipo de denuncia*</span></a>
							<ul class="b20__selectList" >	
								@foreach ($data['tipos'] as $item)
									<li class="b20__data" data-position="{{$item->id}}">	                            
										<span>{{$item->nombre}}</span>
									</li> 
								@endforeach	   
							</ul>
						</div>
					</div>
				</div>
				<div class="b20__options deseo">
					<span>¿Desea identificarse?</span>
					<ul>
						<li>
							<input checked="" type="radio" value="Sí" id="email2" class="validate[required] identificarseCheck" name="1">
							<label for="email2">
								<span></span>
								Sí
							</label>
						</li>
						<li>
							<input type="radio" id="telefono2" value="No" class="validate[required] identificarseCheck" name="1">
							<label for="telefono2">
								<span></span>
								No
							</label>
						</li>
					</ul>
					<input type="hidden" name="identificarse" id="identificarse" value="Sí">{{--  Identificarse --}}
				</div>

				<div class="b20__options informe">
					<span>Datos del informante</span>
				</div>

				<div class="b20__row">
					
					<div class="b20__input">
						<input type="email" id="nombresapellidos" name="nombresapellidos" class=" input__fijar validate[required]">
						<label for="email">Nombres y Apellidos*</label>
					</div>
					<div class="b20__input">
						<input type="email" id="dni" name="dni" class=" input__fijar validate[required,custom[onlyNumberSp]]">
						<label for="email">DNI*</label>
					</div>

				</div>
				<div class="b20__row">
					<div class="b20__input">
						<input type="email" id="telefono" name="telefono" class=" input__fijar validate[required,custom[onlyNumberSp]]">
						<label for="email">Teléfono*</label>
					</div>
					<div class="b20__input">
						<input type="email" id="correo" name="correo" class=" input__fijar validate[required,custom[email]]">
						<label for="email">Correo*</label>
					</div>

				</div>

				<div class="b20__options quien">
					<span>¿Quiénes son las personas involucradas? (no es obligatorio completar todos los campos)</span>
				</div>

		            <div class="b20__btn">
		                <button class="general__btn b20__boton f-guardarGlobal b20-boton-form">
		                    <span>Enviar</span>
		                </button>
		            </div>

				<div class="b20-block-last">
					<div class="b20__options write">
						<span>Escribe tu denuncia aquí</span>
					</div>
					<div class="b20__textarea">
		                <textarea class="validate[required]" name="denunciaMensaje" placeholder="Escribe aquí*  " id="" cols="30" rows="10"></textarea>
		            </div>
					<div class="b22-file">
						<input style="opacity:0;position:absolute" class="validate[required]" type="file" id="file" name="archivo" accept=".doc,.docx,application/pdf, application/msword,.png,.jpg">
						<h2><span class="icon-Group-6 "></span><strong class="fz-15 g-r name-file">Adjuntar archivo</strong></h2>
					</div>

					<div class="b20__terminos">
			        	
			        	<div class="b20__relative">
			        		<input class="validate[required] input__fijar" type="checkbox" id="acepto" name="acepto">
			                <label for="acepto">
			                    Acepto
			                    <a href="{{$info->terminosPDF}}" target="_blank">Términos y Condiciones</a>
			                </label>    
			        	</div>

		            </div>
				</div>
			</form>
			<div class="b20__form2">
				<div class="b22-form">
					<div class="form-group">
						<div class="b22-wrap-form principal nuevo" data-pos="0" data-form="form-1">
								<div class="b22-resumen">
									<div class="b22-data">
										<h2><span></span></h2>
									</div>
									<div class="b22-icons">
										<a href="#" class="form-editar"><span class="icon-outline-create-24px"></span></a>
										<a href="#" class="form-eliminar"><span class="icon-outline-delete_sweep-24px"></span></a>
									</div>
								</div>
								<div class="form-group-item">
									<div class="b20__options">
										<ul>
											<li>
												<input checked="" type="radio" value="Persona interna" data-radio="radio-check" id="personainterna" class="validate[required] formaCheck persona-interna" name="3">
												<label for="personainterna">
													<span></span>
													Persona interna
												</label>
											</li>
											<li>
												<input type="radio" id="personaexterna" value="Persona externa" data-radio="radio-check" class="validate[required] formaCheck persona-externa" name="3">
												<label for="personaexterna">
													<span></span>
													Persona externa
												</label>
											</li>
										</ul>
									</div>
									<div class="b20__row">
										<div class="b20__input">
											
												<input type="text" name="nombres" id="nombres" class="input__fijar">
												<label for="nombres">Nombres</label>
											
										</div>
										<div class="b20__input">
											
												<input type="text" name="apellidos" id="apellidos" class="input__fijar">
												<label for="apellidos">Apellidos</label>
											
										</div>
									</div>
									<div class="b20__row">
										<div class="b20__input">
											
												<input type="text" name="relacionempresa" id="relacionempresa"  class="input__fijar">
												<label for="relacionempresa">Relación con la empresa</label>
											
										</div>
										<div class="b20__input">
											
												<input type="text" name="empresa" id="empresa"  class="input__fijar">
												<label for="empresa">Especificar empresa / cargo / otro</label>
											
										</div>
									</div>
									<div class="b20__textarea">
										 <textarea  placeholder="Datos adicionales sobre la persona involucrada" name="comentario" id="comentario"  class="" cols="30" rows="10"></textarea>
									</div>
									<div class="form-btn">
										<a href="http://localhost:9002/es/nosotros/historia" class="g-btn-small general__btn j-submit">
								            <span>Guardar</span>
								        </a>
									</div>
								</div>
						</div>
					</div>
					<!-- <div class="form-group-clone" >

					</div> -->
					<div class="form-add">
						<a href="" class="form-add-item">
							<i class="icon-Group-4-2"></i>
							<span>Añadir contacto adicional</span>
						</a>
					</div>


				
					<div class="b20__options sospecha">
					<span>¿Sospechas que algún Jefe Inmediato al involucrado esta coludido a la denuncia?</span>
				</div>

				<div class="b20__options">
					<ul>
						<li>
							<input checked="" type="radio" value="Sí" id="si3" class="validate[required] sospechaCheck" name="2">
							<label for="si3">
								<span></span>
								Sí
							</label>
						</li>
						<li>
							<input type="radio" id="no3" value="No" class="validate[required] sospechaCheck" name="2">
							<label for="no3">
								<span></span>
								No
							</label>
						</li>
						<li>
							<input type="radio" id="nosabe" value="No sabe" class="validate[required] sospechaCheck" name="2">
							<label for="nosabe">
								<span></span>
								No sabe
							</label>
						</li>
						<li>
							<input type="radio" id="nodesea" value="No desea revelarlo" class="validate[required] sospechaCheck" name="2">
							<label for="nodesea">
								<span></span>
								No desea revelarlo
							</label>
						</li>
					</ul>
					<input type="hidden" name="sospecha" id="sospecha" value="Sí">{{--  Sospecha --}}
				</div>
				
				<!-- <div class="b20__terminos">
		        	
		        	<div class="b20__relative">
		        		<input class="validate[required] input__fijar" type="checkbox" id="acepto" name="acepto">
		                <label for="acepto">
		                    Acepto
		                    <a href="{{$info->terminosPDF}}" target="_blank">Términos y Condiciones</a>
		                </label>    
		        	</div>

	            </div> -->
			</div>
			
		</div>
	</div>
</div>
@stop

@section('jsfinal')
<script type="text/javascript" src="{{ $STATIC_URL }}js/validationform/jquery.validationEngine.js"></script>
<script>
	// var inputs = document.getElementsByClassName('input__fijar');

	$(function(){
		$('#file').on('change', function (event, files, label) {
           var file_name = this.value.replace(/\\/g, '/').replace(/.*\//, '');
           console.log(file_name)
           $('.name-file').text(file_name)
        });

		$('.b20__clickSelect').on('click', function(event) {
			event.preventDefault();
			$('.b20__selectList').stop(false).slideUp(150);
			$(this).toggleClass('active');
			$(this).closest('.b20__selectBox').find('.b20__selectList').stop(false).slideToggle(150);
		});
		$('body').on('click', '.b20__selectList li', function(event) {
			event.preventDefault();
			var valor_html = $(this).html();
            // var valor_this = $(this).attr('data-id');
            var dataPosition = $(this).attr('data-position');

            // if (dataPosition !=='init') {
            //     $('.b20__slider').trigger('to.owl.carousel',[dataPosition,300]);
            // }
            // console.log(valor)
            $(this).closest('.b20__select').find('select option').removeAttr('selected')
            $(this).closest('.b20__select').find('select option[value="'+dataPosition+'"]').attr('selected','selected');
            $(this).closest('.b20__selectBox').find('.b20__clickSelect').html(valor_html)
            $(this).closest('.b20__selectList').stop(false).slideUp(150)
            $('.b20__selectList li').removeClass('active')
            $(this).addClass('active')
            $('.b20__clickSelect').removeClass('active')
        });
        // $('.b20__select1 .b20__data:first').trigger('click');
        // $('.b20__select2 .b20__data:first').trigger('click');

        $(document).on("click",function(e){
        	var container = $(".b20__selectBox");
        	if (!container.is(e.target) && container.has(e.target).length === 0) {
        		$('.b20__selectList').stop(false).slideUp(150)
                // $('.b20__selectList li').removeClass('active')
                $('.b20__clickSelect').removeClass('active')
                // $('.menu-overlay2').removeClass('active')
            }
        });

        var arrayForm = [];
		var arrayText = [];
		var array_names = ['nombres', 'apellidos', 'relacionempresa', 'empresa', 'comentario']
		$('body').on('click', '.form-add-item', function(e){
			e.preventDefault()

			var item1 = $('.form-group-item').length
			// $('.form-group-item').eq(0).clone().appendTo('.form-group-clone')
			// $('.b22-wrap-form').eq(0).append('.form-group-item.clone');
			$('.b22-wrap-form').eq(0).clone().appendTo('.form-group')
			$('.form-group .b22-wrap-form').removeClass('clone')
			for(var i = 0; i < array_names.length; i++){

				// $('.form-group-item').eq(item1).find('input').eq(i).attr('name', array_names[i] + i)
				//$('.form-group-item').eq(item1).find('input').eq(i).attr('name', array_names[i])
				$('.b22-wrap-form .b20__row').eq(item1).find('input').text('')
				$('.b22-wrap-form .b20__row').eq(item1).find('input').val('')
				$('.b22-wrap-form .b20__row').eq(item1).find('input').keyup()
				$('.b22-wrap-form .b20__row').eq(item1).find('.form-group-item').removeClass('active')
				$('.b22-wrap-form .b20__row').eq(item1).find('.b22-resumen').removeClass('active')

				//$('.form-group-item').eq(item1).find('input').eq(i).attr('name', array_names[i] + i)

			}
			var cantForms = $('.form-group .form-group-item').length;
			animSelect();
			for (var i = 0; i < cantForms; i++) {
				$('.b22-wrap-form').eq(item1).attr('data-pos', i)
			
					j = i + 1;
					$('.form-group .form-group-item').eq(i).find('.b22-title-form').text('AÑADIR NUEVO CONTACTO')

					setTimeout(function(){
					$('.b22-wrap-form').eq(item1).attr('data-form','form-'+j)
					$('.b22-wrap-form').eq(item1).find('.persona-externa').attr('id','personaexterna-'+j)
					$('.b22-wrap-form').eq(item1).find('.persona-externa').next().attr('for','personaexterna-'+j)
					$('.b22-wrap-form').eq(item1).find('.persona-interna').attr('id','personainterna-'+j)
					$('.b22-wrap-form').eq(item1).find('.persona-interna').next().attr('for','personainterna-'+j)

					},340)
					
			
			}

			$(this).removeClass('active')

		})
		$("form").validationEngine('attach', {
			promptPosition: "topLeft",
			autoHidePrompt: true,
            autoHideDelay: 3000,
            binded: false,
            scroll: false,
            validateNonVisibleFields: true
		});

		$(".identificarseCheck").change(function(e){			
			e.preventDefault();
			var valor = $('input[name=1]:checked').val();
			$("#identificarse").val(valor);
		});

		$(".sospechaCheck").change(function(e){			
			e.preventDefault();
			var valor = $('input[name=2]:checked').val();
			$("#sospecha").val(valor);
		});

	
		$('body').on('click', '.b22-delete-form', function(event) {
			$(this).closest('.b22-wrap-form').remove();
			$('.form-add-item').addClass('active')
		});
		$('body').on('click', '.form-editar', function(event) {
			event.preventDefault();
			console.log('dentro')
			$(this).closest('.b22-wrap-form').find('.form-group-item').removeClass('active')
			$(this).closest('.b22-wrap-form').find('.b22-resumen').removeClass('active')

			$('.form-add-item').removeClass('active')

			$(this).closest('.b22-wrap-form').find('.j-submit span').text('Guardar contacto')

			$(this).closest('.b22-wrap-form').addClass('editando')
			$(this).closest('.b22-wrap-form').removeClass('guardado')
			$(this).closest('.b22-wrap-form').removeClass('nuevo')


		});
	
		$('body').on('click', '.form-eliminar', function(event) {
			event.preventDefault();
			console.log('dentro')
			$(this).closest('.b22-wrap-form').remove();

			// $('.form-add-item').removeClass('active')

			var getDatapos = parseInt($(this).closest('.b22-wrap-form').attr('data-pos'));
			delete arrayForm[getDatapos]
			console.log(arrayForm);

		});

		$(".btn-continuar").click(function(e) {
			e.preventDefault();
			var item = $(this);
			var form = item.closest('form');
			var valid = form.validationEngine('validate');
			
			if (!valid){
				//error
				console.log("llenar todo")
			}else{
				
				var element = $(this).closest('.b22');
                $('html, body').animate({
                  scrollTop: element.offset().top
                }, 10);
				$('.b22-tab-click').click();
				$('.b22-tab-click-wrap').removeClass('disabled');
			}
		});

		var arratFinal = arrayForm.length;
		$(".f-guardarGlobal").click(function(e) {
			console.log(arrayForm);
            e.preventDefault();
            var item = $(this);
            var form = item.closest('form');
            var valid = form.validationEngine('validate');
            if (!valid){
                //console.log('no entre al ajax');
            }else{
				$(this).find("span").text('Espere por favor ...').prop('disabled', true);
				// ALMACENANDO DATA FINAL
						var dataTotal =""
						for (var i = 0; i < arratFinal; i++) {
							for (var j = 0; j < 8; j++) {
								if (j < 7) {
									dataTotal = dataTotal + arrayForm[i][j] + ',';
								}else if (j == 7) {
									dataTotal = dataTotal + arrayForm[i][j];
								}
							}
							dataTotal = dataTotal + ';'
						}
						// ALMACENANDO DATA FINAL - USAR dataTotal;

                var formData = new FormData();

                var sede = $('select[name="sede"] option:selected').val();
                var tipo = $('select[name="tipo"] option:selected').val();
                var identificarse = $('input[name="identificarse"]').val();
                var nombres = $('input[name="nombresapellidos"]').val();
                var dni = $('input[name="dni"]').val();
                var telefono = $('input[name="telefono"]').val();
                var correo = $('input[name="correo"]').val();
                var arrayInvolucrados = dataTotal;
                var sospecha = $('input[name="sospecha"]').val();
                var denunciaMensaje = $('textarea[name="denunciaMensaje"]').val();
                var acepto = $('input[name="acepto"]').val();
                var archivo = $('input[name="archivo"]').get(0).files[0];

                formData.append('sede', sede);
                formData.append('tipo', tipo);
                formData.append('identificarse', identificarse);
                formData.append('nombres', nombres);
                formData.append('dni', dni);
                formData.append('telefono', telefono);
                formData.append('correo', correo);
                formData.append('arrayInvolucrados', arrayInvolucrados);
                formData.append('sospecha', sospecha);
                formData.append('denunciaMensaje', denunciaMensaje);
                formData.append('acepto', acepto);
                formData.append('archivo', archivo);
                console.log(formData);

                $.ajax({
                    url: '{{route("guardar-contacto-denuncia")}}',
                    type: 'POST',
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    cache: false,
                    data: formData,
                    success: function(response){
                        if(response.status){
                            window.location.href="{{route('gracias-denuncias')}}";
                        } else {
                            alert(response.message);
                        }
                    }
                });
            }
        });

		$('.f-input').click(function(event) {
			setTimeout(function() {
                $('#id-input').focus();
            }, 200);
		});

		// VARIABLE PARA BACKEND
		$('body').on('keypress', '#id-input', function(event) {
		// 	event.preventDefault();
		// 	/* Act on the event */
		// });
		// $('#id-input').keypress(function(event) {
			var data =  event.which || event.keycode;
			// console.log(data,'value')
			if(data === 13){

				var valueInput = $(this).val();
				var cantCaracter = $(this).val().length;
				if (cantCaracter > 1) {
					// $('.f-input ul').insertBefore('<li>'+ valueInput +'</li>');
					$('<li class="tag-servicio" name="otros" data-valor="'+ valueInput +'">'+ valueInput +'<span class="icon-delete-button"></span></li>').insertBefore('.text-tab')	
					$(this).val('');

					setTimeout(function() {
		                $('#id-input').focus();
		            }, 200);
		           
		            arrayText.push(valueInput);
		           
				}else{

					setTimeout(function() {
		                $('#id-input').focus();
		            }, 200);
				}
				 console.log(arrayText)

				if($(".btn-continuar").validationEngine('validate')){
					return false;
				}
			}
		});

		$('body').on('click', '.icon-delete-button', function(event) {
			// event.preventDefault();
			$(this).parent().remove();
		});
		// $('.icon-delete-button')

		$('body').on('click', '.j-submit', function(event) {
			event.preventDefault();
			var item = $(this);
			var form = item.closest('form');
			var valid = form.validationEngine('validate');
			
			if (!valid){
					
			}else{

				var classNuevo = $(this).closest('.b22-wrap-form').hasClass('nuevo')
				var classEditando = $(this).closest('.b22-wrap-form').hasClass('editando')
				var classFinal = $(this).hasClass('final')

				// ALMACENANDO IN ARRAY **************************
						var posEditando = parseInt($(this).closest('.b22-wrap-form').attr('data-pos'));
				var getAttrform = $(this).closest('.b22-wrap-form').attr('data-form');
				var getOption = $(this).closest('.b22-wrap-form').find('input[data-radio="radio-check"]').val();
				var getNombres = $(this).closest('.b22-wrap-form').find('input[id="nombres"]').val();
				var getApellidos = $(this).closest('.b22-wrap-form').find('input[id="apellidos"]').val();
				var getEmail = $(this).closest('.b22-wrap-form').find('input[id="relacionempresa"]').val();
				var getTelefono = $(this).closest('.b22-wrap-form').find('input[id="empresa"]').val();
				var getCargo = $(this).closest('.b22-wrap-form').find('textarea[id="comentario"]').val();


				if (classNuevo) {
						console.log('nuevo formulario')
				   		arrayForm.push([posEditando,getAttrform,getNombres,getApellidos,getEmail,getTelefono,getCargo,getOption]);
						console.log(arrayForm)	
				
				}
				if (classEditando) {

						console.log('EDITANDO FORMULARIO')
						arrayForm[posEditando] = new Array(posEditando,getAttrform,getNombres,getApellidos,getEmail,getTelefono,getCargo,getOption)
						console.log(arrayForm)	
						console.log(posEditando)	
				}
				// ALMACENANDO IN ARRAY **************************

				if (classFinal) {
					var cantTerminado = $('.form-group .b22-wrap-form.guardado').length;
					var cantFormexist = $('.form-group .b22-wrap-form').length;

					if (cantTerminado == cantFormexist) {
						console.log('SE PUEDE GUARDAR')
						

					}else{
						console.log('NO SE PUEDE GUARDAR')
					}

				}

				$(this).closest('.b22-wrap-form').find('.j-submit span').text('AGREGAR CONTACTO')
				
				$(this).closest('.b22-wrap-form').find('.form-group-item').addClass('active')
				$(this).closest('.b22-wrap-form').find('.b22-resumen').addClass('active')

				if ($('.b22-wrap-form').hasClass('editando') || $(this).hasClass('final')) {
					$('.form-add-item').removeClass('active')
					$(this).closest('.b22-wrap-form').removeClass('editando')
					$(this).closest('.b22-wrap-form').addClass('guardado')

					if (classPrincinap = "principal") {
						$('.form-add-item').addClass('active')
					}
				}else{
					$(this).closest('.b22-wrap-form').addClass('guardado')
					$('.form-add-item').addClass('active')
				}

				var nombreform = $(this).closest('.b22-wrap-form').find('input[id="nombres"]').val();
				var apellidoform = $(this).closest('.b22-wrap-form').find('input[id="apellidos"]').val();
				var cargoform = $(this).closest('.b22-wrap-form').find('textarea[id="comentario"]').val();

				 $(this).closest('.b22-wrap-form').find('.b22-data').html('<h2>'+ nombreform + ' ' + apellidoform +'<span>' + cargoform +'</span></h2>')
			}

		});
	    $('.b22-tab-click').on('click', function(e){
	    	e.preventDefault()
			var th = $(this);
			var dat = th.attr('id');

			$('.b22-tab-wrap').removeClass('active')
			$('.b22-tab-wrap[data-id="' + dat + '"]').addClass('active')

			$('.b22-tab-click-wrap').removeClass('active')
			$(this).parent().addClass('active')
		})

		 $('.b22-box-radio.default').find('input').attr('checked','checked')
	    $('.b22-box-radio.default').click();
		// //input file img
		// var gPreview=document.querySelector(".img-file"); //CONSTRUTOR IMG BASE64
		// var gFile=document.getElementById("g-file");// CHANGE FILE
		// var formFileCampo =document.querySelector(".name-img-file");// NAME FILE
		// var formInfoFile =document.querySelector(".form-img-input");// NAME FILE

		// var useBlob   = false;
		// function readImage (files) {
		// 	var files=files[0];
		// 	// if(files.type=="image/png"){
		// 	if(gPreview.children[0]!=undefined){
		// 		gPreview.children[0].remove();
		// 	}
		// 	var reader = new FileReader();
		// 	reader.onload = function (e) {
		// 		// console.log(e.target.result,"file reader");
		// 		var image  = new Image();
		// 		image.onload = function (e) {
		// 			var imageInfo = files.name,
		// 				imageWidth =image.width,
		// 				imageHeight =image.height,
		// 				imageType =files.type,
		// 				imageSize =Math.round(files.size/1024) +'KB';
		// 			formFileCampo.textContent=imageInfo;
		// 			console.log(imageInfo, 'funcccc')
		// 			$('.b22 .form-text-file').addClass('hidden');
		// 			// && imageType=="image/png"
		// 			// if(imageWidth==130 && imageHeight==94 ){
		// 			if(imageWidth!="" && imageHeight!=""){
		// 				gPreview.appendChild(this);
		// 				formInfoFile.classList.add('active')
		// 			}else{
		// 				gFile.value="";
		// 				gPreview.appendChild(this);
		// 				formInfoFile.classList.add('active')
		// 			}
		// 			if (useBlob) {
		// 				window.URL.revokeObjectURL(image.src);
		// 			}
		// 		}
		// 		image.src=reader.result;
		// 		gPreview.style.backgroundImage = 'url(' + reader.result + ')'
		// 	}
		// 	// https://developer.mozilla.org/en-US/docs/Web/API/FileReader/readAsDataURL
		// 	reader.readAsDataURL(files);
		// 	// }else{
		// 	//     formFileCampo.textContent=files.name;
		// 	//     gFile.value="";
		// 	// }
		// }
		// gFile.addEventListener("change", function() {
		// 	var files  = this.files;
		// 	// https://developer.mozilla.org/en-US/docs/Web/API/FileList
		// 	// if(files[0].type=="image/png"){//SI AL ARCHIVO CARGADO ES DE FORMATO PNG
		// 	if(files[0].type=="image/png" || files[0].type=="image/jpeg"){ //type image
		// 		readImage(files);
		// 	}else{
		// 		formFileCampo.textContent="Ninguna imagen seleccionada";
		// 		formInfoFile.classList.remove('active')
		// 	}
		// 	// }else{//SI ES DIFERENTE QUE PNG PERO SI EXISTE UN PNG CARGADO(LIMPIAMOS)
		// 	//   if(gPreview.children[0]!=undefined){
		// 	//       gPreview.children[0].remove();
		// 	//   }
		// 	//   formFileCampo.textContent=files[0].name;
		// 	//   gFile.value="";
		// 	// }
		// });

	    $('body').on('click', '.b22-box-check', function() {

	    }).on('change','.b22-box-check',function(event){
			event.preventDefault();
    		var getAttr = $(this).attr('data-category');
			var getClass = $(this).hasClass('active');
			if (!getClass) {
				$(this).addClass('active')
				$('.b22-check-rubro').removeClass('active')
				
				$('.b22-check-rubro[data-category="'+ getAttr +'"]').addClass('active');

				var cantActives = $('.b22-box-rubro.active').length;
				for (var i = 0; i < cantActives; i++) {
					var getValue = $('.b22-box-rubro.active').eq(i).attr('data-category');
					$('.b22-check-rubro[data-category="'+ getValue +'"]').addClass('active');
				
				}
			
			}else{
				var cantActiveactual = $('.b22-box-check.b22-box-rubro.active').length;
				if (cantActiveactual <= 1) {
					$(this).addClass('active')
				}else{
					$(this).removeClass('active')
					$(this).removeClass('contador')
					$('.b22-box-check[data-category="'+ getAttr +'"] label span i').text(0);
					$('.b22-check-rubro[data-category="'+ getAttr +'"]').removeClass('fijo')
					$('.b22-check-rubro[data-category="'+ getAttr +'"]').find('input').prop('checked', false);
					$('.b22-check-rubro[data-category="'+ getAttr +'"]').removeClass('active');
				}
			}
		});


		$('.b22-box-radio').on('click', function() {
			var getID = $(this).find('input').attr('id');
			var cantCheckts = $('.b22-box-check').length;
			if (getID === 'b22-radio-2') {
				$('.b22-box-check').addClass('disabled')
				$('.b22-box-check.freelance').removeClass('disabled')
				$('.b22-box-check').find('input').attr('disabled','disabled')
				$('.b22-box-check.freelance').find('input').removeAttr('disabled')
				$('.b22-box-check').find('input').removeAttr('checked')
				$('.b22-box-check.freelance').find('input').attr('checked','checked')

				$('.b22-box-check').removeClass('active')
				$('.b22-check-rubro').removeClass('fijo')
				$('.b22-check-rubro').find('input').prop('checked', false);
				$('.b22-box-rubro').find('input').prop('checked', false);
				$('.b22-check-rubro').removeClass('active');
				$('.b22-box-check:last-child').click().change();
				$('.b22-box-check').removeClass('contador')
				$('.b22-box-check label span i').text(0);
			}else{
				$('.b22-check-rubro').removeClass('fijo')
				$('.b22-box-check').find('input').removeAttr('disabled')
				$('.b22-box-check.freelance').find('input').attr('disabled','disabled')
				$('.b22-box-check').removeClass('disabled')
				$('.b22-box-check.freelance').addClass('disabled')
				$('.b22-box-check.freelance').find('input').removeAttr('checked')
				$('.b22-box-check:first-child').click().change();
				$('.b22-box-check').removeClass('contador')
				$('.b22-box-check label span i').text(0);
			}

		});


		$('body').on('click', '.b22-check-rubro', function() {
		
		}).on('change','.b22-check-rubro',function(event){
			event.preventDefault();
			var getClassCheck = $(this).hasClass('fijo')
			if (!getClassCheck) {
				console.log('SUMAR')

				$(this).addClass('fijo')
				var getData = $(this).attr('data-category');
				$('.b22-box-check[data-category="'+ getData +'"]').addClass('contador');

				var inicialValue = $('.b22-box-check[data-category="'+ getData +'"] label span i').text();
				var inicialValue = parseInt(inicialValue);
				var inicialValue = inicialValue + 1
				$('.b22-box-check[data-category="'+ getData +'"] label span i').text(inicialValue);

				if (inicialValue == 0) {
					$('.b22-box-check[data-category="'+ getData +'"]').removeClass('contador');
				}

			}else{
				console.log('RESTAR')
				var getData = $(this).attr('data-category');

				var inicialValue = $('.b22-box-check[data-category="'+ getData +'"] label span i').text();
				var inicialValue = parseInt(inicialValue);
				var inicialValue = inicialValue - 1
				$('.b22-box-check[data-category="'+ getData +'"] label span i').text(inicialValue);
				$(this).removeClass('fijo')

				if (inicialValue == 0) {
					$('.b22-box-check[data-category="'+ getData +'"]').removeClass('contador');
				}
			}

			// $(this).addClass('contador')

			// if ($(this).hasClass('fijo')) {
			// }else{

			// }
		});

		$('.b22-box-check:last-child').addClass('freelance')
		$('.b22-box-check:last-child').addClass('disabled')
		$('.b22-box-check:last-child input').attr('disabled','disabled')

		$('.b22-box-radio:first-child input').prop('checked', true);
		$('.b22-box-check:first-child input').click();
       
		// var countform = $('.input__fijar').length;
		// for (var i = 0; i < countform.length; i++) {
		// 	// inputs[i].addEventListener('keyup',function() {
		// 		$('body').on('keyup', '.input__fijar', function(event) {
		// 		if(this.value.length>=1){
		// 			this.nextElementSibling.classList.add('fijar');
		// 			this.parentElement.classList.add('active');
		// 		}else{
		// 			this.nextElementSibling.classList.remove('fijar');
		// 			this.parentElement.classList.remove('active');
		// 		}
		// 	});
		// 	// inputs[i].addEventListener("change", function() {
		// 		$('body').on('keyup', '.input__fijar', function(event) {
		// 		if(this.value == ""){
		// 			this.nextElementSibling.classList.remove('fijar');
		// 			this.parentElement.classList.remove('active');
		// 		}else{
		// 			this.nextElementSibling.classList.add('fijar');
		// 			this.parentElement.classList.add('active');
		// 		}
		// 	});
		// }
    })
</script>
@stop











