@extends('web.common.base')

@section('cssadicional')
@stop

@section('classbody')sedes-css 
@stop

@section('content')
<!-- Obtencion de ruta para activos -->
@php
	$dato = basename(Request::path());
	//dd($dato);
	//$ruta_completa = explode('/', Request::path());
@endphp
<section class="b19" style="overflow:hidden">
	<div class="wancho b19__cnt">
		<div class="b19__left">
			<div class="general__title" data-style="40">
                <h2>{{$info->tituloSedes}}</h2>
            </div>
            <ul class="b19__list">
				@foreach ($data['sedes'] as $sede)
				<li><a href="{{route('sedes', [ 'slug' => $sede->slug ] )}}" class="@if($sede->slug == $dato) ? active : '' @endif">{{$sede->nombre}}</a></li>
				@endforeach
            </ul>
		</div>
		<div class="b19__right">
			<div class="b19__top">
				<div class="general__title" data-style="50">
	                <h2>{{$data['sede']->nombre}}</h2>
	            </div>
	            <div class="b19__img">
	            	<img src="{{$data['sede']->imagenMapa}}" width="120" height="82" alt="">
	            </div>
			</div>
			<ul class="b19__nav">
				@php
					$activo = 0;
				@endphp
				@if ($data['sede']->arraySucursal != null)
					<li><a href="#1" class="active">{{ \Helper::dictionary('sucursal') }}</a></li>
					@php
						$activo = 1;
					@endphp
				@endif
				@if ($data['sede']->arrayAgencia != null)	
					@if ($activo == 1)				
						<li><a href="#2">{{ \Helper::dictionary('agencia') }}</a></li>
					@else
						<li><a href="#2"  class="active">{{ \Helper::dictionary('agencia') }}</a></li>
						@php
							$activo = 1;
						@endphp
					@endif					
				@endif
				@if ($data['sede']->arrayUnidad != null)
					@if ($activo == 1)				
						<li><a href="#3">{{ \Helper::dictionary('unidad') }}</a></li>
					@else
						<li><a href="#3" class="active">{{ \Helper::dictionary('unidad') }}</a></li>
					@endif					
				@endif				
			</ul>
			<div class="b19__cnt__tab">
				@if ($data['sede']->arraySucursal != null)
					<div class="b19__tab" data-tab="1">
						@foreach ($data['sede']->arraySucursal as $sucursal)
						<div class="b19__item">
							<i class="b19__icon icon-baseline-store_mall_directory-24px-3"></i>
							<div class="b19__text">
								<h3>{{$sucursal['txt1A']}} <strong>{{$sucursal['txt2A']}}</strong></h3>
								<ul>
									@if ($sucursal['txt3A'] != '')
									<li>
										<strong>{{ \Helper::dictionary('direccion') }}:</strong> <p>{{$sucursal['txt3A']}}</p>
									</li>
									@endif
									@if ($sucursal['txt4A'] != '')
									<li>
										<strong>{{ \Helper::dictionary('telefono') }}:</strong><p> <a href="">{{$sucursal['txt4A']}}</a> </p>
									</li>
									@endif
									@if ($sucursal['txt5A'] != '')
									<li>
										<strong>{{ \Helper::dictionary('correo') }}: </strong><p><a href="">{{$sucursal['txt5A']}}</a></p>
									</li>
									@endif
								</ul>
								<div class="b19__btn">
									@if ($sucursal['txt6A'] != '')
									<a target="_blank" href="{{$sucursal['txt6A']}}">
										<i class="icon-baseline-place-24px"></i>
										<span>{{ \Helper::dictionary('encuentranos-aqui') }}</span>
									</a>
									@endif
								</div>
							</div>
						</div>
						@endforeach
					</div>	
				@endif
				@if ($data['sede']->arrayAgencia != null)
					<div class="b19__tab" data-tab="2">
						@foreach ($data['sede']->arrayAgencia as $agencia)
						<div class="b19__item">
							<i class="b19__icon icon-baseline-store_mall_directory-24px-3"></i>
							<div class="b19__text">
								<h3>{{$agencia['t1A']}} <strong>{{$agencia['t2A']}}</strong></h3>
								<ul>
									@if ($agencia['t3A'] != '')
									<li>
										<strong>{{ \Helper::dictionary('direccion') }}:</strong> <p>{{$agencia['t3A']}}</p>
									</li>
									@endif
									@if ($agencia['t4A'] != '')
									<li>
										<strong>{{ \Helper::dictionary('telefono') }}:</strong><p> <a href="">{{$agencia['t4A']}}</a> </p>
									</li>
									@endif
									@if ($agencia['t5A'] != '')
									<li>
										<strong>{{ \Helper::dictionary('correo') }}: </strong><p><a href="">{{$agencia['t5A']}}</a></p>
									</li>
									@endif
								</ul>
								<div class="b19__btn">
									@if ($agencia['t6A'] != '')
									<a target="_blank" href="{{$agencia['t6A']}}">
										<i class="icon-baseline-place-24px"></i>
										<span>{{ \Helper::dictionary('encuentranos-aqui') }}</span>
									</a>
									@endif
								</div>
							</div>
						</div>
						@endforeach
					</div>
				@endif

				@if ($data['sede']->arrayUnidad != null)
					<div class="b19__tab" data-tab="3">
						@foreach ($data['sede']->arrayUnidad as $unidad)
						<div class="b19__item">
							<i class="b19__icon icon-baseline-store_mall_directory-24px-3"></i>
							<div class="b19__text">
								<h3>{{$unidad['tx1A']}} <strong>{{$unidad['tx2A']}}</strong></h3>
								<ul>
									@if ($unidad['tx3A'] != '')
									<li>
										<strong>{{ \Helper::dictionary('direccion') }}:</strong> <p>{{$unidad['tx3A']}}</p>
									</li>
									@endif
									@if ($unidad['tx4A'] != '')
									<li>
										<strong>{{ \Helper::dictionary('telefono') }}:</strong><p> <a href="">{{$unidad['tx4A']}}</a> </p>
									</li>
									@endif
									@if ($unidad['tx5A'] != '')
									<li>
										<strong>{{ \Helper::dictionary('correo') }}: </strong><p><a href="">{{$unidad['tx5A']}}</a></p>
									</li>
									@endif
								</ul>
								<div class="b19__btn">
									@if ($unidad['tx6A'] != '')
									<a target="_blank" href="{{$unidad['tx6A']}}">
										<i class="icon-baseline-place-24px"></i>
										<span>{{ \Helper::dictionary('encuentranos-aqui') }}</span>
									</a>
									@endif
								</div>
							</div>
						</div>
						@endforeach
					</div>
				@endif
				
				
				
			</div>
		</div>
	</div>
</section>

@stop
@section('jsfinal')
<script type="text/javascript">
    
    $(function(){
        $('.b19__tab:first-child').addClass('active')
        $('.b19__nav a').on('click', function(event) {
            event.preventDefault();
            var va__tab = $(this).attr('href');
                va__tab = va__tab.split('#')
                va__tab = va__tab[1]
            $('.b19__nav a').removeClass('active')
            $(this).addClass('active')
            $('.b19__tab').removeClass('active')
            $('.b19__tab[data-tab="'+va__tab+'"]').addClass('active')
        });
    });
</script>
@stop











