@extends('web.common.base')

@section('cssadicional')
<!--Icon-Font-->
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
@stop

@section('classbody')
industrial-css
@stop

@section('content')
<a href="https://wa.link/f2il39" class="btn-wsp" target="_blank">
	    <i class="fa fa-whatsapp icono"></i>
</a>

<section class="b16 b16__industrial">
    <figure class="b16__figure g-banner" style="background-image: url('{{$data['producto']->imagenFondo}}');" img-desk="{{$data['producto']->imagenFondo}}" img-mob="{{$data['producto']->imagenFondoMobile}}"></figure>
    <div class="wancho b16__cnt">
        <div class="b16__left">
            <div class="b16__etiqueta__i">
                @if($data['producto']->check_exportacion)
                <i class="icon-baseline-airplanemode_active-24px"></i>
                <span>{{ \Helper::dictionary('exportacion') }}</span>
                @endif
            </div>
            <div class="b16__etiqueta">
                <span>{{$data['producto']->EtiquetaIndustrial->nombre}} - {{$data['producto']->SubcatIndustrial->nombre}}</span>
            </div>
            <div class="general__title" data-style="80">
                <h2>{{$data['producto']->nombre}}</h2>
            </div>
            @if ($data['producto']->enlaceFacebook != '' or $data['producto']->enlaceInstagram != '' or $data['producto']->enlaceWhatsapp != '')  
                <div class="redes-container-prod">
                            <h5 style="color: #fff">Siguenos:</h5>
                            <ul>        
                                    @if($data['producto']->enlaceFacebook != '')
                                    <li>
                                        <a href="{{$data['producto']->enlaceFacebook}}" class="icon-facebook2"></a>
                                    </li>
                                    @endif
                                    @if($data['producto']->enlaceInstagram != '')
                                    <li>
                                        <a href="{{$data['producto']->enlaceInstagram}}" class="icon-instagram"></a>
                                    </li>
                                    @endif
                                    @if($data['producto']->enlaceWhatsapp != '')
                                    <li>
                                        <a href="{{$data['producto']->enlaceWhatsapp}}" class="icon-whatsapp"></a>
                                    </li>
                                    @endif
                            </ul>
                </div>
            @endif
        </div>
        
    </div>
</section>

<section class="b17">
    <div class="wancho b17__cnt">
        <div class="b16__center">
            @if($data['producto']->arrayPresentaciones != '')
            @foreach ($data['producto']->arrayPresentaciones as $presentacion)
            <div class="b16__tab " data-tab="{{$loop->iteration}}">
                <img src="{{$presentacion['img1A']}}" width="841" height="521" alt="">
            </div>
            @endforeach
            @endif 
        </div>
        <div class="b16__right">
            <ul class="b16__cnt__tab">
                @if($data['producto']->arrayPresentaciones != '')
                @foreach ($data['producto']->arrayPresentaciones as $presentacion)
                    @if($presentacion['texto1A'] != '')
                    <li><a href="#{{$loop->iteration}}" class="">{{$presentacion['texto1A']}}</a></li>
                    @endif
                @endforeach
                @endif
            </ul>
            <div class="b16__ubica" style="display: block;">
                {!!$data['producto']->des!!}
            </div>
            <div class="b16__btn">
                <a href="" class="general__btn f-setearIDProdIndus" data-id="{{$data['producto']->id}}" data-style=" ">
                    <span>{{ \Helper::dictionary('solicitar-ahora') }}</span>
                </a>   
            </div>
        </div>
    </div>
</section>

<section class="b18">
    <div class="wancho b18__cnt">
        <div class="b18__left">
            <div class="general__title" data-style="70">
                <h2>{{ \Helper::dictionary('beneficios') }}</h2>
                
            </div>
            <ul class="b18__ul">
                @foreach ($data['producto']->arrayBeneficios as $beneficio)
                <li>
                    <span>{{$beneficio['txt1A']}}</span>
                    <p>{!!$beneficio['txt2A']!!}</p>
                </li> 
                @endforeach
            </ul>
            <div class="b18__btn">
                @if ($data['producto']->fichaPDF != '')
                <a href="{{$data['producto']->fichaPDF}}" class="general__btn" data-style="line  green">
                    <span>{{ \Helper::dictionary('ficha-de-producto') }}</span>
                </a>  
                @endif 
            </div>
        </div>  
        <div class="b18__right">
            <figure class="b18__figure">
                <img src="{{$data['producto']->imagenBeneficios}}" width="586" height="549" alt="">
                @if($data['producto']->imagenBeneficios2)
                <img src="{{$data['producto']->imagenBeneficios2}}" width="359" height="418" alt="">
                @endif
                
            </figure>
        </div>

    </div>
</section>

<section class="b15">
    <div class="wancho b15__cnt">
        <div class="b15__title">
                <div class="general__title" data-style="30">
                <h2>{{$data['producto']->tituloRelacionados}}</h2>
                
            </div>
        </div>
        <div class="b14__items">
            @foreach ($data['producto']->ProductosIndustrialesRelacionados as $producto)
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

        $(".f-setearIDProdIndus").click(function(e) {
            e.preventDefault();
			var idProductoIndustrial = $(this).attr('data-id');

			$.ajax({
				url: '{{route("setear-producto-industrial-id")}}',
				type: 'POST',
				dataType: 'json',
				data: {idProductoIndustrial: idProductoIndustrial},
				success: function(response){
					if(response.status){
						window.location.href="{{route('contactanos')}}";
					}else{
						//error
					}
				}
			});
        });

        var generalBanner = $('.g-banner')
        var imgDesk = $('.g-banner').attr('img-desk')
        var imgMob = $('.g-banner').attr('img-mob')
        if (generalBanner.length > 0) {
            if (matchMedia) {
                var mq = window.matchMedia("(max-width: 767px)");
                mq.addListener(WidthChange);
                WidthChange(mq);
            }
            function WidthChange(mq) {
                if (mq.matches ) {
                    console.log(imgDesk,'ESTAMOS DENTRO')
                    $('.g-banner').css('background-image','url("'+ imgMob +'")');
                }
                else {
                    console.log(imgMob,'ESTAMOS DENTRO')
                    $('.g-banner').css('background-image','url("'+ imgDesk +'")');
                };
            }
        }

    });
</script>
@stop











