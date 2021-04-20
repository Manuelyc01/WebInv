@extends('web.common.base')

@section('cssadicional')
@stop

@section('classbody')
@stop

@section('content')
<section class="b24">
	<div class="wancho b24__cnt">
		<div class="b24__text">
			<div class="b3__title">
		        <div class="general__title" data-style="130">
		            <h2>{{$info->tituloGraciasDe}}</h2>
		        </div>
		        <p>{{$data['nombresDenuncia']}}</p>
		    </div> 
		    <div class="b24__paragraph">
				{!!$info->desGraciasDe!!}
		    	<span>{{ \Helper::dictionary('denuncia') }} {{$data['identificadorDenuncia']}}</span>
		    </div>
		    <div class="b24__btn" >
				<a href="{{route('home')}}" class="general__btn" data-style="">
					<span>{{ \Helper::dictionary('home') }}</span>
				</a>				
			</div>

			
		</div>
	</div>
</section>
@stop

@section('jsfinal')
@stop











