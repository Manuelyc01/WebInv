@extends('web.common.base')

@section('cssadicional')
 <link rel="stylesheet" href="{{ $STATIC_URL }}js/validationform/validationEngine.jquery.css">
@stop

@section('classbody') ayuda-css
@stop

@section('content')

<section class="b20 b20__ayuda">
	<div class="b2__cnt">
        <div class="b2__text b2__text__historia">
            <div class="general__title" data-style="50">
				<h2>{{$info->tituloSugerencia}}</h2>
            </div>
        </div>
    </div>
	<div class="b20__cnt">
		<form action="">
	        <div class="b20__row">
	        	 <div class="b20__select b20__select1">

	                <select name="tipo" id="b20__select" >
						<option value="">{{ \Helper::dictionary('tipo-consulta') }}*</option>
						@foreach ($data['tipos'] as $item)
							<option value="{{$item->id}}">{{$item->nombre}}</option>
						@endforeach
	                </select>
	                <div class="b20__selectBox">
	                    <a href="" class="b20__clickSelect f-perfil"><span>{{ \Helper::dictionary('tipo-consulta') }}*</span></a>
	                    <ul class="b20__selectList">
							@foreach ($data['tipos'] as $item)
								<li class="b20__data" data-position="{{$item->id}}">	                            
									<span>{{$item->nombre}}</span>
								</li>
							@endforeach	                        
	                    </ul>
	                </div>
	            </div>
	            <div class="b20__input">
	                <input type="email"  id="email" name="correo" class=" input__fijar validate[required]">
	                <label for="email">{{ \Helper::dictionary('email') }}*</label>
	            </div>
	        	
	        </div>
	        <div class="b20__row">
	        	<div class="b20__input">
	                <input type="text"  id="nombre" name="nombres" class=" input__fijar validate[required]">
	                <label for="nombre">{{ \Helper::dictionary('nombre') }}*</label>
	            </div>
	        	
	        	<div class="b20__input">
	                <input type="tel"  id="telefono" name="telefono"  class=" input__fijar validate[required]">
	                <label for="telefono">{{ \Helper::dictionary('telefono') }}*</label>
	            </div>
	            
	        </div>
	        <div class="b20__row">
	            <div class="b20__input">
	                <input type="tel"  id="dni" name="documento" class=" input__fijar validate[required]">
	                <label for="dni">{{ \Helper::dictionary('dni-o-identificacion') }}*</label>
	            </div>
	            <div class="b20__input">
	                <input type="text"  id="nacionalidad" name="nacionalidad" class=" input__fijar validate[required]">
	                <label for="nacionalidad">{{ \Helper::dictionary('nacionalidad') }}*</label>
	            </div>
	        	
	        </div>

            <div class="b20__textarea">
                <textarea name="mensaje" placeholder="Comentarios*  " id="" cols="30" rows="10"></textarea>
            </div>
            <div class="b20__options">
            	<span>{{ \Helper::dictionary('forma-de-contacto') }}</span>
            	<ul>
            		<li>
            			<input checked type="radio" value="Email"  id="email2" class="validate[required] formaCheck" name="1">
            			<label for="email2">
            				<span></span>
            				{{ \Helper::dictionary('email') }}
            			</label>
            		</li>
            		<li>
            			<input type="radio" id="telefono2" value="Teléfono" class="validate[required] formaCheck" name="1">
            			<label for="telefono2">
            				<span></span>
            				{{ \Helper::dictionary('telefono') }}
            			</label>
            		</li>
            	</ul>
			</div>
			<input type="hidden" value="Email" id="forma" name="forma">
            <div class="b20__terminos">
	        	
		        <div class="b20__item__termino">
		        	<div class="b20__relative">
		        		<input class="validate[required]" type="checkbox" id="acepto" name="acepto">
		                <label for="acepto">
								{{ \Helper::dictionary('acepto') }}
							<a href="{{$info->terminosPDF}}" target="_blank">{{ \Helper::dictionary('terminos-y-condiciones') }}</a>
		                </label>    
		        	</div>
		        	<div class="b20__relative">
		        		<input class="validate[required]" type="checkbox" id="acepto2" name="acepto2">
		                <label for="acepto2">
								{{ \Helper::dictionary('acepto-autorizacion') }}
		                </label>    
		        	</div>
		        </div>
	            <div class="b20__btn">
	                <button class="general__btn b20__boton f-guardarSugerencia">
	                    <span>{{ \Helper::dictionary('enviar') }}</span>
	                </button>
	            </div>

            </div>
        </form>
	</div>
</section>
@stop

@section('jsfinal')

    <script src="{{ $STATIC_URL }}js/validationform/jquery.validationEngine.js"></script>
<script type="text/javascript">
    
    $(function(){
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


        $("form").validationEngine('attach', {
            promptPosition : "topLeft",
            autoHidePrompt: true,
            autoHideDelay: 3000,
            binded: false,
            scroll: false
        });

		$(".formaCheck").change(function(e){			
			e.preventDefault();
			console.log("dasd");
			var valor = $('input[name=1]:checked').val();
			$("#forma").val(valor);
		});

        $(".f-guardarSugerencia").click(function(e) {
            e.preventDefault();
            var item = $(this);
            var form = item.closest('form');
            var valid = form.validationEngine('validate');
            data = form.serialize();

            if (!valid){
                console.log('No');
            } else{

				$.ajax({
					url: '{{route("guardar-contacto-sugerencia")}}',
					type: 'POST',
					dataType: 'json',
					data: data,
					success: function(response){
						if(response.status){
							window.location.href="{{route('gracias')}}";
						}else{
							//error
						}
					}
				});
                
            }
        });

    });
</script>
@stop











