@extends('web.common.base')

@section('cssadicional')
<!--Icon-Font-->
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
@stop

@section('classbody')
trandicional-css
@stop

@section('content')
<a href="https://wa.link/f2il39" class="btn-wsp" target="_blank" data-tooltip="¿Necesitas ayuda?">
	    <i class="fa fa-whatsapp icono"></i>
    </a>

<section class="b16">
    <div class="wancho b16__cnt">
        <div class="b16__left">
            <div class="b16__etiqueta">
                <span>{{$data['producto']->EtiquetaTradicional->nombre}}</span>
            </div>
            <div class="general__title" data-style="70">
                <h2>{{$data['producto']->nombre}}</h2>
                
            </div>
            {!!$data['producto']->des!!}
        </div>
        <div class="b16__center">
            @foreach ($data['producto']->array as $tipo)
            <div class="b16__tab " data-tab="{{$loop->iteration}}">
                <img src="{{$tipo['img1A']}}" width="298" height="535" alt="">
            </div>
            @endforeach
            <img class="b16__adorno" src="{{$STATIC_URL}}img/nube-encimaOK.png" alt="">
        </div>
        <div class="b16__right">
            <ul class="b16__cnt__tab">
                @foreach ($data['producto']->array as $tipo)
                <li><a href="#{{$loop->iteration}}" class="">{{$tipo['texto1A']}}</a></li>
                @endforeach
            </ul>
            <div class="b16__ubica">
                <i class="icon-baseline-place-24px"></i>
                <p>
                    <strong>{{ \Helper::dictionary('zona-de-venta') }}:</strong> {{$data['producto']->zonaVenta}}    
                </p>
            </div>
            <div class="b16__btn">
               @if ($data['producto']->documento != '')
                    <a href="{{$data['producto']->documento}}" target="_blank" class="general__btn" data-style=" ">
                        <span>{{ \Helper::dictionary('ser-comerciante') }}</span>
                    </a> 
               @endif  
            </div>
        </div>
    </div>
    <div class="b1__nube1">
        <img src="{{$STATIC_URL}}img/nubefinal.png" alt="">  
    </div>
</section>


<section class="b15 b15__tradicionaldetalle">
    <div class="wancho b15__cnt">
        <div class="b15__title">
                <div class="general__title" data-style="30">
                <h2>{{$data['producto']->tituloRelacionados}}</h2>
                
            </div>
        </div>
        <div class="b14__items">
            @foreach ($data['producto']->ProductosTradicionalesRelacionados as $producto)
            <a href="{{route('detalletradicional', [ 'slug' => $producto->slug ] )}}" class="b14__item" data-item="1">
                <figure>
                    <img src="{{$producto->imagenListado}}" width="140" height="223" alt="">
                </figure>
                <div class="b14__item__text">
                    <div class="b14__etiqueta"><span>{{$producto->EtiquetaTradicional->nombre}}</span></div>
                    <div class="b14__title">
                        <h3>{{$producto->nombre}}</h3>
                    </div>
                    <div class="b14__item__btn">
                        <div class="general__btn" data-style="line green">
                            <span>{{ \Helper::dictionary('ver-detalle') }}</span>
                        </div>   
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>

</section>
@stop

@section('jsfinal')
<script type="text/javascript">
    
    $(function(){
        $('.b16__cnt__tab li:first-child a').addClass('active')
        $('.b16__tab:first-child').addClass('active')
        $('.b16__cnt__tab a').on('click', function(event) {
            event.preventDefault();
            var va__tab = $(this).attr('href');
                va__tab = va__tab.split('#')
                va__tab = va__tab[1]
            $('.b16__cnt__tab a').removeClass('active')
            $(this).addClass('active')
            $('.b16__tab').removeClass('active')
            $('.b16__tab[data-tab="'+va__tab+'"]').addClass('active')
        });
    });
</script>
@stop











