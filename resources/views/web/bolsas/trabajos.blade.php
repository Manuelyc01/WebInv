@extends('web.common.base')

@section('cssadicional')
@stop

@section('classbody')bolsa-css
@stop

@section('content')

<!-- Obtencion de ruta para activos -->
@php
	$dato = basename(Request::path());
	//dd($dato);
	//$ruta_completa = explode('/', Request::path());
@endphp
<section class="b21">
	<div class="wancho b21__cnt">
		<div class="b21__top">
			<div class="b21__title">
				<div class="general__title" data-style="40">
	                <h2>{{$info->tituloTrabajo}}</h2>
	            </div>
	            <p>{{$info->subtituloTrabajo}}</p>
			</div>
			<ul class="b14__nav">
				<li><a href="{{route('trabajo', [ 'slug' => 'todos' ] )}}" class="@if('todos' == $dato) ? active : '' @endif">Todo </a></li>
				@foreach ($data['departamento'] as $departamento)
				<li><a href="{{route('trabajo', [ 'slug' => $departamento->slug ] )}}" class="@if($departamento->slug == $dato) ? active : '' @endif">{{$departamento->nombre}}</a></li>
				@endforeach
            </ul>
		</div>
		<div class="b21__cnt__items">
			@if (count($data['trabajos']) > 0)
			@foreach ($data['trabajos'] as $trabajo)
			@if ($trabajo->url != null)
			<a href="{{$trabajo->url}}" target="_blank" class="b21__item">
				<div class="b21__time"><i class="icon-baseline-schedule-24px"></i><span>{{$trabajo->tipo}}</span></div>
				<div class="b21__text">
						<h3>{{$trabajo->titulo}}</h3>
						{!!$trabajo->des!!}
						<div class="b21__btn" >
							<div class="general__btn" data-style="line green">
							<span>{{ \Helper::dictionary('postula-aqui') }}</span>
						</div>
						</div>
				</div>
			</a>
			@else
			<a href="{{$trabajo->pdf}}" target="_blank" class="b21__item">
				<div class="b21__time"><i class="icon-baseline-schedule-24px"></i><span>{{$trabajo->tipo}}</span></div>
				<div class="b21__text">
						<h3>{{$trabajo->titulo}}</h3>
						{!!$trabajo->des!!}
						<div class="b21__btn" >
							<div class="general__btn" data-style="line green">
							<span>{{ \Helper::dictionary('postula-aqui') }}</span>
						</div>
						</div>
				</div>
			</a>
			@endif
			@endforeach
			@else
				<span>{{ \Helper::dictionary('no-trabajos') }}</span>
			@endif
		</div>
	</div>
</section>
	
@stop

@section('jsfinal')
@stop











