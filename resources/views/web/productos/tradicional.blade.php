@extends('web.common.base')

@section('cssadicional')
<!--Icon-Font-->
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
@stop

@section('classbody')
categoria-css
@stop

@section('content')
<a href="https://wa.link/f2il39" class="btn-wsp" target="_blank" data-tooltip="¿Necesitas ayuda?">
	    <i class="fa fa-whatsapp icono"></i>
    </a>

<section class="b2 b2__tradicional">
    <div class="b2__cnt">
        <figure class="b2__figure">
            <img src="{{$data['tradicional']->imagenIzqB1}}" alt="">
        </figure>
        <div class="b2__text">
            <div class="b2__text__tradicional">
                    <div class="general__title" data-style="40">
                    <h2>{{$data['tradicional']->tituloB1}}</h2>
                </div>
                {!!$data['tradicional']->desB1!!}
            </div>
            <div class="b7__center">
                @foreach ($data['tradicional']->arrayB1 as $indicacion)
                <div class="b7__item">
                    <span>{{$indicacion['txt1A']}}</span>
                    <div class="general__title" data-style="35">
                        <h2>{{$indicacion['txt2A']}}</h2>
                    </div>
                    {!!$indicacion['txt3A']!!}
                </div>
                @endforeach
            </div>
        </div>
        <figure class="b2__figure2">
            <img src="{{$data['tradicional']->imagenDerB1}}" alt="">
        </figure>
    </div>
</section>

<section class="b15">
<div class="wancho b15__cnt">
    <div class="b15__title">
            <div class="general__title" data-style="75">
            <h2>{{$data['tradicional']->tituloB2}}</h2>
            {!!$data['tradicional']->desB2!!}
        </div>
    </div>
    <div class="b14__items">
        @foreach ($data['productos'] as $tradicional)
        <a href="{{route('detalletradicional', [ 'slug' => $tradicional->slug ] )}}" class="b14__item" data-item="1">
            <figure>
                <img src="{{$tradicional->imagenListado}}" width="140" height="223" alt="">
            </figure>
            <div class="b14__item__text">
                <div class="b14__etiqueta"><span>{{$tradicional->EtiquetaTradicional->nombre}}</span></div>
                <div class="b14__title">
                    <h3>{{$tradicional->nombre}}</h3>
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
        

    });
</script>
@stop











