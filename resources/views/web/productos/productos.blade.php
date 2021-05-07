@extends('web.common.base')

@section('cssadicional')
@stop

@section('classbody')
equipo-css
@stop

@section('content')
<section class="b12 scroll-wrap">
    <div class="b3__hoja1">
        <img src="{{$STATIC_URL}}img/hoja.png" width="120" height="125" alt="">
    </div>
    <div class="b3__hoja2">
        <img src="{{$STATIC_URL}}img/hoja2.png" width="204" height="281" alt="">
    </div>
    <div class="b3__title">
        <div class="general__title" data-style="40">
            <h2>{{$info->tituloProductos}}</h2>
        </div>
        <p>{{$info->subtituloProductos}}</p>
    </div>
    <div class="wancho b3__cnt">
    <div class="b3__item scroll-item">
            <span class="b3__line"></span>
            <div class="b3__figure">
                <img class="b3__img" src="{{$data['listo_consumir']->imagenCaladaListado}}" width="570" height="412" alt="">  
                <div class="b3__figure__absolute">
                    <img src="{{$data['listo_consumir']->imagenFondoListado}}" width="472"  alt="">  
                </div>
            </div>
            
            <div class="b3__text">
                <h2>{{$data['listo_consumir']->tituloListado}}</h2>
                {!!$data['listo_consumir']->desListado!!}
                <div class="b3__btn">
                    @php
                        $etiqueta="";
                        
                        if($idiom == 'es'){
                            $etiqueta='listos-para-consumir';
                        }
                        else{
                            $etiqueta='ready-to-consume';
                        }
                    @endphp
                    <a href="{{route('industrial', [ 'slug' => $etiqueta ] )}}" class="general__btn" data-style="lineal">
                        <span>{{ \Helper::dictionary('ver-productos') }}</span>
                    </a>   
                </div>
            </div>
        </div>
        
        <div class="b3__item scroll-item">
            <span class="b3__line"></span>
            <div class="b3__figure">
                <img class="b3__img" src="{{$data['insumo_industrial']->imagenCaladaListado}}" width="570" height="412" alt="">  
                <div class="b3__figure__absolute">
                    <img src="{{$data['insumo_industrial']->imagenFondoListado}}" width="472"  alt="">  
                </div>
            </div>
            <div class="b3__text">
                <h2>{{$data['insumo_industrial']->tituloListado}}</h2>
                {!!$data['insumo_industrial']->desListado!!}
                <div class="b3__btn">
                    @php
                        $etiqueta="";
                        if($idiom == 'es'){
                            $etiqueta='insumos-industriales';
                        }
                        else{
                            $etiqueta='insumos-industriales';
                        }
                    @endphp
                    <a href="{{route('industrial', [ 'slug' => $etiqueta ] )}}" class="general__btn" data-style="lineal">
                        <span>{{ \Helper::dictionary('ver-productos') }}</span>
                    </a>   
                </div>
            </div>
        </div>
        <div class="b3__item scroll-item">
            <span class="b3__line"></span>
            <div class="b3__figure">
                <img class="b3__img" src="{{$data['tradicional']->imagenCaladaListado}}" width="570" height="412" alt="">  
                <div class="b3__figure__absolute">
                    <img src="{{$data['tradicional']->imagenFondoListado}}" width="472"  alt="">  
                </div>
            </div>
            <div class="b3__text">
                <h2>{{$data['tradicional']->tituloListado}}</h2>
                {!!$data['tradicional']->desListado!!}
                <div class="b3__btn">
                    <a href="{{route('tradicional')}}" class="general__btn" data-style="lineal">
                        <span>{{ \Helper::dictionary('ver-productos') }}</span>
                    </a>   
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('jsfinal')
<script type="text/javascript">
    
    $(function(){
        // SCROLL TOP 
        function getScroll(){
              var $topB1 = $(window),
                windowTop = $(window).scrollTop(),
                heightB1 = $topB1.height(),
                totalTop = heightB1 + windowTop - ($(window).height()/4*1.6);

            if ($topB1) {
               var cantWrap = $('.scroll-wrap').length

                for (var j = 0; j < cantWrap; j++) {
                    var $elemenWraptop = $('.scroll-wrap').eq(j);
                    var elemtsChiilds = $('.scroll-wrap').eq(j).find('.scroll-item')
                    for (var i = 0; i < elemtsChiilds.length; i++) {
                       
                        var $elementItemTop = $('.scroll-item').eq(i)
                        var topItem = elemtsChiilds.eq(i).offset().top;
                            // topItem = topItem.top;
                        // console.log(topItem,'POSITION ELEMENT ITEM')
                        if(totalTop > topItem ) {
                           $elemenWraptop.find('.scroll-item').eq(i).addClass('active-top')
                           $elemenWraptop.find('.scroll-item').eq(i).css('transition-delay', i/8 + 's')
                        }
                        // else if(totalTop < topItem ){
                        //    $elemenWraptop.find('.scroll-item').eq(i).removeClass('active-top')
                        //    $elemenWraptop.find('.scroll-item').eq(i).removeAttr('style')
                        // }
                    }
                }
            }
        }
        $(window).on('scroll',  function() {
            getScroll()
        });
        getScroll()


    });
</script>
@stop











