@extends('web.common.base')

@section('cssadicional')
@stop

@section('classbody')bolsa-css
@stop

@section('content')
<!-- Obtencion de ruta para activos -->
@php
	$dato = basename(Request::path());
	
	$ruta_completa = explode('/', Request::path());
	//dd($ruta_completa);
@endphp
<section class="b21">
	<div class="wancho b21__cnt">
		<div class="b21__top">
			<div class="b21__title">
				<div class="general__title" data-style="40">
	                <h2>{{$info->tituloServiciosB1}}</h2>
	            </div>
	            <p>{{$info->subtituloServiciosB1}}</p>
			</div>
			<ul class="b14__nav">
	        	@foreach ($data['categorias'] as $categoria)
				<li><a href="{{route('servicios', [ 'slug' => $categoria->slug ] )}}" class="@if($categoria->slug == $ruta_completa[2]) ? active : '' @endif">{{$categoria->nombre}} </a></li> 
				@endforeach
            </ul>
            <div class="b20__select b20__select1">

                <select name="tipo" id="b20__select">
					<option value="">{{ \Helper::dictionary('escoger-departamento') }}</option>
					@foreach ($data['departamento'] as $departamento)
						<option value="{{$departamento->slug}}">{{$departamento->nombre}}</option>
					@endforeach
                </select>
                <div class="b20__selectBox">
                    <a href="" class="b20__clickSelect f-perfil"><span>{{ \Helper::dictionary('escoger-departamento') }}</span></a>
                    <ul class="b20__selectList ">
						@foreach ($data['departamento'] as $departamento)
						<li class="b20__data depa" data-position="{{$departamento->slug}}" data-categoria="{{$data['categoria']->slug}}">	                            
							<span>{{$departamento->nombre}}</span>
						</li>  
						@endforeach                      
                    </ul>
                </div>
            </div>
		</div>
		<div class="b21__cnt__items">
			@if (count($data['servicios']) > 0)
			@foreach ($data['servicios'] as $servicio)
			@if ($servicio->url != '')
			<a href="{{$servicio->url}}" target="_blank" class="b21__item">
				<div class="b21__time"><i class="icon-baseline-schedule-24px"></i><span>{{$servicio->tipo}}</span></div>
				<div class="b21__text">
						<h3>{{$servicio->titulo}}</h3>
						{!!$servicio->des!!}
						<div class="b21__btn" >
							<div class="general__btn" data-style="line green">
							<span>{{ \Helper::dictionary('postula-aqui') }}</span>
						</div>
						</div>
				</div>
			</a>
			@else
				@if ($servicio->pdf != '')
					<a href="{{$servicio->pdf}}" target="_blank" class="b21__item">
						<div class="b21__time"><i class="icon-baseline-schedule-24px"></i><span>{{$servicio->tipo}}</span></div>
						<div class="b21__text">
								<h3>{{$servicio->titulo}}</h3>
								{!!$servicio->des!!}
								<div class="b21__btn" >
									<div class="general__btn" data-style="line green">
									<span>{{ \Helper::dictionary('postula-aqui') }}</span>
								</div>
								</div>
						</div>
					</a>
				@endif
			@endif
			@endforeach
			@else
				<span>{{ \Helper::dictionary('no-servicio') }}</span>
			@endif
		</div>
		<div class="b21-franja">
			<div class="b21-parrafo">
				<h1>{{$info->tituloServiciosB2}}</h1>
				<div class="b21-text">
					{!!$info->desServiciosB2!!}
				</div>
			</div>
			<a href="{{$info->pdfServiciosB2}}" target="_blank" class="general__btn" data-style="line green">
				<span>{{ \Helper::dictionary('ver-mas-informacion-servicio') }}</span>
			</a>
		</div>
	</div>
</section>
	
@stop

@section('jsfinal')
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

		$("body").on('click','.depa',function(e){
			e.preventDefault();
			var categoria = $(this).attr('data-categoria');
			var departamento = $(this).attr('data-position');
			var idioma = '{{$ruta_completa[0]}}';
			console.log(categoria);
			console.log(departamento);
			window.location.href="/"+idioma+"/bolsa-de-servicios/"+categoria+"/"+departamento;
			
		});
    });
</script>
@stop











