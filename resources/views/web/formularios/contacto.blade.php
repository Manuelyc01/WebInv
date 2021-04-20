@extends('web.common.base')

@section('cssadicional')
 <link rel="stylesheet" href="{{ $STATIC_URL }}js/validationform/validationEngine.jquery.css">
@stop

@section('classbody')
contacto-css
contacto-padding
@stop

@section('content')
<section class="b20">
	<div class="b2__cnt">
        <div class="b2__text b2__text__historia">
            <div class="general__title" data-style="50">
                <h2>{{$info->tituloContactanos}}</h2>
            </div>
            {!!$info->desContactanos!!}
            
        </div>
    </div>
	<div class="b20__cnt">
		<form action="">
	        <div class="b20__row">
	        	<div class="b20__input">
	                <input type="text"  id="nombre" name="nombres" class=" input__fijar validate[required]">
	                <label for="nombre">{{ \Helper::dictionary('nombre') }}</label>
	            </div>
	            <div class="b20__input">
	                <input type="text"  id="apellido" name="apellidos" class=" input__fijar validate[required]">
	                <label for="apellido">{{ \Helper::dictionary('apellido') }}</label>
	            </div>
	        </div>
	        <div class="b20__row">
	        	<div class="b20__input">
	                <input type="text"  id="empresa" name="empresa" class=" input__fijar validate[required]">
	                <label for="empresa">{{ \Helper::dictionary('empresa') }}</label>
	            </div>
	            <div class="b20__input">
	                <input type="tel"  id="ruc" id="ruc" name="ruc" class=" input__fijar validate[required]">
	                <label for="ruc">{{ \Helper::dictionary('ruc') }}</label>
	            </div>
	        </div>
	        <div class="b20__row">
	        	<div class="b20__input">
	                <input type="tel"  id="telefono" name="telefono"  class=" input__fijar validate[required]">
	                <label for="telefono">{{ \Helper::dictionary('telefono') }}</label>
	            </div>
	            <div class="b20__input">
	                <input type="email" name="correo"  id="email" class=" input__fijar validate[required]">
	                <label for="email">{{ \Helper::dictionary('email') }}</label>
	            </div>
	            
	        	
            </div>
            <div class="b20__select__ctn">
                <select name="producto" id="" class="input__fijar">
                    <option value="">Producto industrial</option>
                    @foreach ($data['productosIndustrial'] as $item)
                    @if ($item->id == $data['idProdIndus'])
                        <option value="{{$item->nombre}}" selected>{{$item->nombre}}</option>
                    @else
                        <option value="{{$item->nombre}}">{{$item->nombre}}</option>
                    @endif
                        
                    @endforeach
                </select>
            </div>

            <div class="b20__textarea">
                <textarea name="mensaje" placeholder="Mensaje  " id="" cols="30" rows="10"></textarea>
            </div>
            <div class="b20__terminos">
	        	
	        	<div class="b20__relative">
	        		<input class="validate[required]" type="checkbox" id="acepto" name="acepto">
	                <label for="acepto">
                            {{ \Helper::dictionary('acepto') }}
	                    <a href="{{$info->terminosPDF}}" target="_blank">{{ \Helper::dictionary('terminos-y-condiciones') }}</a>
	                </label>    
	        	</div>
	            <div class="b20__btn">
	                <button class="general__btn b20__boton f-guardarGlobal">
	                    <span>{{ \Helper::dictionary('enviar') }}</span>
	                </button>
	            </div>

            </div>
        </form>
	</div>
    <div class="wancho b20__cnt__items">
        @if ($info->arrayContactanos != null)
            <ul>
                @foreach ($info->arrayContactanos as $item)
                    <li class="b20__item">
                        <figure class="icon-baseline-store_mall_directory-24px-2"></figure>
                        <div class="b20__text">
                            <p>{{$item['tx1A']}}</p>
                            <p>
                                @if ($item['tx2A'] != '')
                                    Telf. <a href="tel:{{$item['tx2A']}}">{{$item['tx2A']}}</a>
                                @endif 
                                @if ($item['tx2A'] != '' && $item['tx3A'] != '')
                                /
                                @endif   
                                @if ($item['tx3A'] != '')
                                    Cel. <a href="tel:{{$item['tx3A']}}">{{$item['tx3A']}}</a>
                                @endif 
                            </p>
                            <p>{{$item['tx4A']}}</p>
                            <p>{{$item['tx5A']}}</p>
                        </div>
                    </li>
                @endforeach            
            </ul> 
        @endif
        @if ($info->array2Contactanos != null)
            <ul>
                @foreach ($info->array2Contactanos as $item)
                    <li class="b20__item">
                        <figure class="icon-Group-4"></figure>
                        <div class="b20__text">
                            <p>{{$item['tx1A2']}}</p>
                            <p>
                                @if ($item['tx2A2'] != '')
                                    Telf. <a href="tel:{{$item['tx2A2']}}">{{$item['tx2A2']}}</a>
                                @endif 
                                @if ($item['tx2A2'] != '' && $item['tx3A2'] != '')
                                /
                                @endif                                
                                @if ($item['tx3A2'] != '')
                                    Cel. <a href="tel:{{$item['tx3A2']}}">{{$item['tx3A2']}}</a>
                                @endif 
                            <p>{{$item['tx4A2']}}</p>
                            <p>{{$item['tx5A2']}}</p>
                        </div>
                    </li>
                @endforeach            
            </ul>
        @endif
        
        
    </div>
    <div class="wancho b20__redes">
        <div class="b20__facebook">
            <i class="icon-facebook-app-logo"></i><p>{{ \Helper::dictionary('encuentranos-en-fb-como') }} <strong>Enaco / Delisse / Kintu</strong></p>
        </div>
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
        $(".f-guardarGlobal").click(function(e) {
            e.preventDefault();
            var item = $(this);
            var form = item.closest('form');
            var valid = form.validationEngine('validate');
            data = form.serialize();

            if (!valid){
                console.log('No');
            } else{

				$.ajax({
					url: '{{route("guardar-contacto-global")}}',
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











