@extends('web.common.base')

@section('cssadicional')
@stop

@section('classbody')gracias-css
@stop

@section('content')


<section class="b24">
	<div class="wancho b24__cnt">
		<div class="b24__text">
			<div class="b3__title">
		        <div class="general__title" data-style="130">
					@php
						$titulo = explode('//',$info->tituloGracias);
					@endphp
		            <h2>{{$titulo[0]}}</h2>
						</div>
						@if (count($titulo) > 1)
							<p>{{$titulo[1]}}</p>
						@endif
		        
		    </div> 
		    <div class="b24__paragraph">
				{!!$info->desGracias!!}
		    </div>
		    <div class="b24__btn" >
				<a href="{{route('home')}}" class="general__btn" data-style="">
					<span>{{ \Helper::dictionary('home') }}</span>
				</a>
				<a href="{{route('productos')}}" class="general__btn" data-style="">
					<span>{{ \Helper::dictionary('productos') }}</span>
				</a>
			</div>
		</div>
	</div>
</section>
@stop

@section('jsfinal')
@stop











