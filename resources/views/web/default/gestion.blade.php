@extends('web.common.base')

@section('cssadicional')
@stop

@section('classbody')gestion-css
@stop

@section('content')
<!-- Obtencion de ruta para activos -->
@php
	$dato = basename(Request::path());
	$ruta_completa = explode('/', Request::path());
@endphp

<section class="b23">
	<div class="b23__title"> 
		<div class="b3__title">
	        <div class="general__title" data-style="50">
	            <h2>{{$info->tituloGestion}}</h2>
	        </div>
	        <p>{{$info->subtituloGestion}}</p>
	    </div>
		 
	</div>
	<div class=" b23__background">
		<div class="wancho b23__cnt">
			<div class="b23__left">
				<div class="b23__buscador">
					<div class="b23__input">
					 	<input type="text" name="palabra" id="palabra" class="input__fijar b23_input_search">
						<label for="palabra">Escribe el nombre o título del documento a buscar</label>
					 </div>
	                 <div class="b23_list_result">
	                     
	                 </div>
				</div>
				<div class="b23__respon">
					<a href=""  class="general__btn b23__respon__click" data-style="line green">
		                <span>Ver blog</span>
		            </a>
				</div>
				<ul class="b23__cnt__list">
					{{-- @foreach ($data['gestiones'] as $gestion)
					<li class="b23__list">
						@if (count($gestion->GestionNivel2) > 0)
							<a class=" b23__item  @if($gestion->GestionNivel2[0]->slug == $dato) active @endif @if (count($gestion->GestionNivel2) > 1) b23__click @else
							
							@endif" href="{{route('gestion', [ 'slug' => $gestion->GestionNivel2[0]->slug ] )}}">{{$gestion->nombre}}</a>
						@else
							<a class=" b23__item" >{{$gestion->nombre}}</a>
						@endif
							@if (count($gestion->GestionNivel2) > 1)
							<ul class="b23__ul">
								@foreach ($gestion->GestionNivel2 as $gestion2)
								<li><a class="@if($gestion2->slug == $dato) active @endif" href="{{route('gestion', [ 'slug' => $gestion2->slug ] )}}">{{$gestion2->titulo}}</a></li>
								@endforeach
							</ul>
							@endif					
					</li>
					@endforeach --}}
					@foreach ($data['gestiones'] as $gestion)
						<!-- NIVEL 1 -->
						<li class="b23__list">
							<!-- NIVEL 2 -->	
							@if (count($gestion->GestionNivel2) > 0)
							<a class=" b23__item  @if($gestion->GestionNivel2[0]->slug == $dato) active @endif @if (count($gestion->GestionNivel2) > 1) b23__click @else
							
							@endif" href="{{route('gestion', [ 'slug' => $gestion->GestionNivel2[0]->slug ] )}}">{{$gestion->nombre}}</a>
							@else
								<a class=" b23__item" >{{$gestion->nombre}}</a>
							@endif						
							<ul class="b23__ul">
								<!-- LA CLASES B13-list existe solo si el listado cotneien un listado , es decir un NIVEL 3-->
								@foreach ($gestion->GestionNivel2 as $item2)
									@if (count($item2->GestionNivel3) > 0)
										<li class="b13-list">
											<a class="b23__item b23__click" href="#">{{ $item2->titulo }}</a>
											<ul class="b23__ul">
												@foreach ($item2->GestionNivel3 as $item3)
													<li><a href="{{route('gestion3', [ 'slug' => $item2->slug , 'slug2' => $item3->slug ] )}}">{{ $item3->nombre }}</a></li>
												@endforeach
											</ul>
										</li>
									@else
										<li><a href="{{route('gestion', [ 'slug' => $item2->slug ] )}}">{{ $item2->titulo }}</a></li>
									@endif
									
								@endforeach
							</ul>
						</li>
					@endforeach

					{{-- <!-- NIVEL 1 -->
					<li class="b23__list">
						<!-- NIVEL 2 -->						
						<a class=" b23__item b23__click" href="">Nivel 1</a>
						<ul class="b23__ul">
							<!-- LA CLASES B13-list existe solo si el listado cotneien un listado , es decir un NIVEL 3-->
							<li class="b13-list">
								<a class="b23__item b23__click" href="#">Data nivel 2</a>
								<ul class="b23__ul">
									<li><a href="#">Data nivel 3</a></li>
									<li><a href="#">Data nivel 3</a></li>
									<li><a href="#">Data nivel 3</a></li>
								</ul>
							</li>
							<li><a href="#">Data nivel 2</a></li>
							<li><a href="#">Data nivel 2</a></li>
						</ul>
					</li> --}}
				</ul>
			</div>
			<div class="b23__right">
				<h2>{{ $data['tituloGeneral'] }}</h2>
				<ul class="b23-list-detalle">
					@foreach ($data['gestion'] as $item)
						<li>
							@if($data['tituloGeneral'] != $item->titulo)
							<h3>{{$item->titulo}}</h3>
							@endif
							@if ($item->des != '')
							{!!$item->des!!}
							@endif
							@if ($item->array != null)
							<ul class="b23__load">
								@foreach ($item->array as $array)
								<li>
									<a href="{{$array['archivo1A']}}" target="_blank">
										<i class="icon-Group-11"></i>
										<p>{{$array['texto2A']}}</p>
									</a>
								</li>
								@endforeach
							</ul>
							@endif
						</li>	
					@endforeach				
				</ul>
				
			</div>
		</div>
	</div>
</section>
@stop

@section('jsfinal')
   <script src="{{ $STATIC_URL }}js/jquery-ui/jquery-ui.min.js"></script>

<script type="text/javascript">
    
    $(function(){
		var text__item = $('.b23__right h2').text();
		$('.b23__respon .general__btn').text(text__item)
		// if ($('.b23__item.active').hasClass('b23__click')) {
		// 	console.log('llego clcik')
		// 	var text__item = $('.b23__item.active').closest('.b23__list').find('.b23__respon a.active').text();
		// 	$('.b23__respon .general__btn').text(text__item)


		// }else {
			
		// }
		
		// inicio - buscador autocomplete

		function convertToSlug(str)
		{
			str = str.replace(/^\s+|\s+$/g, ''); // trim
			str = str.toLowerCase();

			// remove accents, swap ñ for n, etc
			var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
			var to   = "aaaaaeeeeeiiiiooooouuuunc------";
			for (var i=0, l=from.length ; i<l ; i++) {
				str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
			}

			str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
				.replace(/\s+/g, '-') // collapse whitespace and replace by -
				.replace(/-+/g, '-'); // collapse dashes

			return str;
		}

        $('body').on('keyup','#palabra', function(evt) {			
			event.preventDefault()
			var palabra = convertToSlug($(this).val());
			console.log('Palabra: ', palabra);
			console.log('Cantidad: ', palabra.length);
			//if(palabra.length > 1){
				//Ajax
				$.ajax({
					url: '{{route("buscador-documentos")}}',
					type: 'POST',
					dataType: 'json',
					data: {palabra: palabra},
					success: function(response){
						if(response.status){
							// buscador autocomplete
							
							data2 = response.array;

							$(".b23_input_search").autocomplete({
								open: function( event, ui ) {
									$('.b23__buscador').addClass('active');
								},
								close: function( event, ui ) {
									$('.b23__buscador').removeClass('active');  
								},
								appendTo: ".b23_list_result",
								delay: 1,
								source: data2,
							}).data("ui-autocomplete")._renderItem = function(ul, item) {
								var html_item = '<a href="'+item.archivo+'" target="_blank" class="b23_item_list">'+
													'<div class="b23_item_categoria">'+
														'<span> '+item.category+'</span>'+
													'</div>'+
													'<div class="b23_item_descri">'+
														'<span>'+item.label+'</span>'+
													'</div>'+
												'</a>';
								return $( "<li>" )
								.data( "ui-autocomplete-item", item )
								.append(html_item)
								.appendTo( ul );
							};	

						}else{
							$("#palabra").attr('');
						}
					}
			  	});
			//}
            
        });














		$('.b23__respon__click').on('click', function(event) {
            event.preventDefault();
			$(this).toggleClass('active');
			$(this).closest('.b23__left').find('.b23__cnt__list').toggleClass('active');
        });
		$('.b23__click').on('click', function(event) {
            event.preventDefault();
            $('.b23__ul').css('height','auto')
            $(this).next().stop(false).slideUp(150);
            $(this).removeClass('active')
            $(this).toggleClass('active');
            $(this).next().stop(false).slideToggle(150);
        });
        
    });
</script>
@stop











