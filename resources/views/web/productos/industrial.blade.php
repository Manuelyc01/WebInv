@extends('web.common.base')

@section('cssadicional')
<!--Icon-Font-->
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
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
<a href="https://wa.link/f2il39" class="btn-wsp" target="_blank" data-tooltip="¿Necesitas ayuda?">
	    <i class="fa fa-whatsapp icono"></i>
    </a>

<section class="b13">
<div class="wancho b13__cnt">
    <div class="b9__text">
        <div class="general__title" data-style="75">
            <h2>{{$data['industrial']->tituloB1}}</h2>
        </div>
        <div class="b9__paragraph">
            {!!$data['industrial']->desB1!!}
        </div>
    </div>
    <figure class="b13__figure">
        <img src="{{$data['industrial']->imagenFondo}}" width="474"  alt="">
    </figure>
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











