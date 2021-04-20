@extends('web.common.base')

@section('cssadicional')
<link rel="stylesheet" type="text/css" href="{{ $STATIC_URL }}js/boxlight/boxlight.css">
@if($data['integrantes'][0]->imagen == "")
<style>
.b11__item__presidente .b11__text {
    max-width: 400px;
  }
.b11__text {
    max-width: 400px;
}

</style>

<!-- <link rel="stylesheet" href="{{ $STATIC_URL }}css/animate.css" /> -->
@endif
@stop

@section('classbody')
equipo-css
@stop

@section('content')
<section class="b11">
    <div class="b11__cnt">
        <div class="b11__title">
            <div class="general__title" data-style="40">
                <h2>{{$data['equipo']->titulo}}</h2>
                <p>{{$data['equipo']->subtitulo}}</p>
            </div>
            
        </div>
        <div class="wancho b11__cnt__items">
            @foreach ($data['integrantes'] as $integrante)
                @if ($integrante->Niveles->slug != '')
					
                <a href="#popup-{{$loop->iteration}}" class="b11__item open-boxlight {{$integrante->Niveles->slug}}">
                    @if ($integrante->imagen != '')
                    <figure>
                        <img src="{{$integrante->imagen}}" width="158" height="192" alt="">
                    </figure>
                    @endif
                    <div class="b11__text">
                        <h3>{{$integrante->Cargo->nombre}}</h3>
						@if ($integrante->Cargo->nombre == 'Directores')
							<p>este campos es una prueba</p>
						@endif
						
                    </div>
                </a>
				
                @endif
            @endforeach
        </div>
        <div class="b11__btn">
            <a href="#popup-organigrama"  class="general__btn open-boxlight" data-style="line green">
                <span>{{$data['equipo']->textoBtn}}</span>
            </a>   
        </div>
    </div>
</section>

@stop
@section('jsfinal')

<div style="display: none;">
    @foreach ($data['integrantes'] as $integrante)
    <div id="popup-{{$loop->iteration}}" class="boxlight popup__cnt">
        <div class="popup__center">
            <figure>
                @if ($integrante->imagen != '')
                <img src="{{$integrante->imagen}}" width="158" height="192" alt="">
                @endif
            </figure>
            <div class="b11__text" style="max-width: 400px;">
                <h3>{{$integrante->Cargo->nombre}}</h3>
                <h2>{{$integrante->nombreCompleto}}</h2>
                @if ($integrante->telefono != '' or $integrante->correo != '' or $integrante->direccion != '' or $integrante->des != '')
                <ul>
                    @if ($integrante->telefono != '')
                        <li>
                            <a href="tel:{{$integrante->telefono}}">
                                <i class="icon-baseline-local_phone-24px"></i>
                                <span>Telf. : {{$integrante->telefono}}</span>
                            </a>
                        </li>
                    @endif
                    @if ($integrante->correo != '')
                        <li>
                            <a href="mailto:{{$integrante->correo}}">
                                <i class="icon-baseline-local_post_office-24px"></i>
                                <span>{{$integrante->correo}}</span>
                            </a>
                        </li>
                    @endif
                    @if ($integrante->direccion != '')
                        <li>
                            <a href="https://www.google.com/maps/search/{{$integrante->direccion}}" target="_blank">
                                <i class="icon-baseline-store_mall_directory-24px-3"></i>
                                <span>{{$integrante->direccion}}</span>
                            </a>
                        </li>
                    @endif
                </ul>

                @if ($integrante->des and $integrante->des != '')
                {!!$integrante->des!!}
                @endif
            </div>
            @endif
        </div>
    </div>
    @endforeach


    <div id="popup-organigrama" class="boxlight popup__cnt">
        <div class="popup__center organigrama">
            <figure>
                <img src="{{$data['equipo']->imagen}}"  alt="">
            </figure>
            
        </div>
    </div>
</div>


<script src="{{ $STATIC_URL }}js/boxlight/boxlight.js"></script>
<script src="{{ $STATIC_URL }}js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript">
    
    $(function(){
        items = $(".b11__item.nivel-1");
        items2 = $(".b11__item.nivel-2");
        grupode = 1
        grupode2 = 3
        for(var i = 0; i < items2.length; i+=grupode2) {
            items2.slice(i, i+grupode2).prependTo('.b11__cnt__items').wrapAll("<div class='b11__item__gerente'></div>");
        };
        for(var i = 0; i < items.length; i+=grupode) {
            items.slice(i, i+grupode).prependTo('.b11__cnt__items').wrapAll("<div class='b11__item__presidente'></div>");
            // $(".b11__item__presidente.b11__text").attr("style", "max-width: 400px;");
        };

        $(".b11__item__presidente .b11__text").attr("style", "max-width:100%;");
        $(".b11__item__presidente .b11__text h3").attr("style", "font-size:18px;");
        $(".b11__item__presidente .b11__text p").attr("style", "font-size:12px;");
        $(".b11__item__presidente").attr("style", "height:153px;");
        $(".b11__item__gerente .b11__text").attr("style", "width:70%;");
        // alert("a");
        $('.open-boxlight').boxlight();
    });
</script>
@stop











