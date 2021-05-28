@extends('web.common.base')

@section('cssadicional')
<!--Icon-Font-->
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
<script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
<script>
        window.addEventListener('load',function(){
            const car = document.querySelector(".glider");
            car.style.visibility = "visible";/*hacer visible una vez cargado*/ 
        document.querySelector('.glider').addEventListener('glider-slide-visible', function(event){
            var glider = Glider(this);
            console.log('Slide Visible %s', event.detail.slide)
        });
        document.querySelector('.glider').addEventListener('glider-slide-hidden', function(event){
            console.log('Slide Hidden %s', event.detail.slide)
        });
        document.querySelector('.glider').addEventListener('glider-refresh', function(event){
            console.log('Refresh')
        });
        document.querySelector('.glider').addEventListener('glider-loaded', function(event){
            console.log('Loaded')
        });

        window._ = new Glider(document.querySelector('.glider'), {
            slidesToShow: 1, //'auto',
            slidesToScroll: 1,
            itemWidth: 630,
            
            draggable: true,
            scrollLock: false,
            dots: '#dots',
            rewind: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
            responsive: [
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 'auto',
                        slidesToScroll: 'auto'
                    }
                }
            ]
        });
      });
    </script>
<style type="text/css">
    .glider-contain {
        width: 90%;
        max-width: 997px;
        margin: 0 auto;
    }
    .glider-slide img {
        width: 100%;
    }
    .glider-track {
    transform: translateZ(0);
    width: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    z-index: 1;
    }
    .glider.draggable {
    user-select: none;
    cursor: -webkit-grab;
    cursor: grab;
    }
    .glider.draggable .glider-slide img {
    user-select: none;
    pointer-events: none;
    }
    .glider.drag {
    cursor: -webkit-grabbing;
    cursor: grabbing;
    }
    .glider-slide {
    user-select: none;
    justify-content: center;
    align-content: center;
    width: 100%;
    
    }
    .glider-slide img {
    max-width: 100%;
    
    }
    .glider::-webkit-scrollbar {
    opacity: 0;
    height: 0;
    }
    .glider-prev,.glider-next {
    user-select: none;
    position: absolute;
    outline: none;
    background: none;
    padding: 0;
    z-index: 2;
    font-size: 40px;
    text-decoration: none;
    left: -23px;
    border: 0;
    top: 40%;
    cursor: pointer;
    color: #666;
    opacity: 1;
    line-height: 1;
    transition: opacity .5s cubic-bezier(.17,.67,.83,.67),
                color .5s cubic-bezier(.17,.67,.83,.67);
    }
    .glider-prev:hover,
    .glider-next:hover,
    .glider-prev:focus,
    .glider-next:focus {
    color: #a89cc8;
    }
    .glider-next {
    right: -23px;
    left: auto;
    }
    .glider-next.disabled,
    .glider-prev.disabled {
    opacity: .25;
    color: #666;
    cursor: default;
    }
    .glider-slide {
    min-width: 150px;
    }
    .glider-hide {
    opacity: 0;
    }
    .glider-dots {
    user-select: none;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 0 auto;
    padding: 0;
    }
    .glider-dot {
    border: 0;
    padding: 0;
    user-select: none;
    outline: none;
    display: block;
    cursor: pointer;
    color: #ccc;
    border-radius: 999px;
    background: #ccc;
    width: 12px;
    height: 12px;
    margin: 7px;
    }
    .glider-dot:hover,
    .glider-dot:focus,
    .glider-dot.active {
    background: #a89cc8;
    }
    @media(max-width: 36em){
    .glider::-webkit-scrollbar {
        opacity: 1;
        -webkit-appearance: none;
        width: 7px;
        height: 3px;
    }
    .glider::-webkit-scrollbar-thumb {
        opacity: 1;
        border-radius: 99px;
        background-color: rgba(156, 156, 156, 0.25);
        box-shadow: 0 0 1px rgba(255,255,255,.25);
    }
    }
</style>
@stop

@section('classbody')
categoria-css
@stop

@section('content')
<!-- Obtencion de ruta para activos -->
@php
	$dato = basename(Request::path());
	//dd($dato);
	//$ruta_completa = explode('/', Request::path());
@endphp
@php
    $locale = app()->getLocale();
    $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';
    
@endphp
<a href="https://wa.link/f2il39" class="btn-wsp" target="_blank" data-tooltip="¿Necesitas ayuda?">
	    <i class="fa fa-whatsapp icono"></i>
    </a>

<section class="b13">
<div class="wancho b13__cnt">
    <div class="glider-contain">
        <div class="glider"  style="visibility:hidden;">
            @foreach($data['industrial-banners'] as $banner)
                @if($banner->locale==$locale)
                    <div><img src="{{$banner->banner}}" ></div>
                @endif
            @endforeach
        </div>
        <button class="glider-prev">&laquo;</button>
        <button class="glider-next">&raquo;</button>
        <div id="dots"></div>
        </div>
    </div>
</div>
</section>
<section class="b14">
<div class="wancho b14__cnt">
    <ul class="b14__nav">
        <li><a href="{{route('industrial', [ 'slug' => 'todos' ] )}}" class="@if('todos' == $dato) ? active : '' @endif">Todo</a></li> 
        @foreach ($data['etiqueta'] as $etiqueta)
        <li><a href="{{route('industrial', [ 'slug' => $etiqueta->slug ] )}}" class="@if($etiqueta->slug == $dato) ? active : '' @endif">{{$etiqueta->nombre}}</a></li> 
        @endforeach
    </ul>
    <div class="b14__items">
        @if (count($data['productos']) > 0)
        @foreach ($data['productos'] as $producto)
        <a href="{{route('detalleindustrial', [ 'slug' => $producto->slug ] )}}" class="b14__item" data-item="1">
            <figure>
                <img src="{{$producto->imagenListado}}" width="340" height="223" alt="">
            </figure>
            <div class="b14__item__text">
                <div class="b14__etiqueta"><span>{{$producto->EtiquetaIndustrial->nombre}}</span></div>
                <div class="b14__title">
                    <h3>{{$producto->nombre}}</h3>
                    <span>{{$producto->SubcatIndustrial->nombre}}</span>
                </div>
                <div class="b14__item__btn">
                    <div class="general__btn" data-style="line green">
                        <span>{{ \Helper::dictionary('ver-detalle') }}</span>
                    </div>   
                </div>
            </div>
        </a>
        @endforeach
        @else
        <span>{{ \Helper::dictionary('no-productos') }}</span>
        @endif
    </div>
    
        {{ $data['productos']->links('vendor.pagination.custom') }}
  
</div>
</section>
@stop

@section('jsfinal')
<script type="text/javascript">
    
    $(function(){
        

    });
</script>
@stop











