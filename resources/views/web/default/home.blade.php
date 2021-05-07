@extends('web.common.base')

@section('cssadicional')
<link rel="stylesheet" href="{{ $STATIC_URL }}js/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="{{ $STATIC_URL }}css/animate.css" />
@stop

@section('classbody')
home-css
@stop

@section('content')
@php
    if($data['home']->enlaceVideoB4 != ''){
        $video = explode('=',$data['home']->enlaceVideoB4);
        $codigo = $video[1];
    }else{
        $codigo = '';
    }
   
@endphp
@php
    $url = URL::current();
    $idioma = explode("/",$url);
    $idiom = 'es';
    foreach ($idioma as $key => $value) {
        if($value == 'en' || $value == 'es')
        $idiom = $value;
    }
        
@endphp
<!-- Obtencion de ruta para activos -->
@php
    $dato = basename(Request::path());
    $ruta_completa = explode('/', Request::path());
    // dd($ruta_completa);
@endphp
{{-- BANNERS --}}
<section class="b1 ">
    <div class="b1__slider">
        @foreach ($data['banners'] as $banner)
        <div class="b1__slide" data-img="{{ $banner->fondoDesktop }},{{ $banner->fondoMobile }}">
            <figure ></figure>
            <div class="wancho b1__cnt">
                <div class="b1__text">
                    <div class="general__title" data-style="75">
                        <h2>{{$banner->titulo}}</h2>
                    </div>
                    {!!$banner->des!!}
                    @if ($banner->enlaceBtn != '' && $banner->textoBtn != '')
                        <div class="b1__btn">
                            <a href="{{$banner->enlaceBtn}}" class="general__btn">
                                <span>{{$banner->textoBtn}}</span>
                            </a>   
                        </div>
                    @endif
                </div>
                @if ($banner->enlaceFacebook != '' or $banner->enlaceInstagram != '' or $banner->enlaceWhatsapp != '')  
                <div class="redes-container">
                            <ul>        
                                    @if($banner->enlaceFacebook != '')
                                    <li>
                                        <a href="{{$banner->enlaceFacebook}}" class="icon-facebook2"></a>
                                    </li>
                                    @endif
                                    @if($banner->enlaceInstagram != '')
                                    <li>
                                        <a href="{{$banner->enlaceInstagram}}" class="icon-instagram"></a>
                                    </li>
                                    @endif
                                    @if($banner->enlaceWhatsapp != '')
                                    <li>
                                        <a href="{{$banner->enlaceWhatsapp}}" class="icon-whatsapp"></a>
                                    </li>
                                    @endif
                            </ul>
                </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
 <!--   <div class="b1__nube1 ">
        <img src="{{$STATIC_URL}}img/nubefinal.png" alt="">  
    </div> *QUITAR NUBE DE SLIDER*-->
<!--     <div class="b1__nube2 ">
        <img src="{{$STATIC_URL}}img/nube2.png" alt="">  
    </div> -->
</section>
{{-- BLOQUE DOS - CONÓCENOS --}}
<section class="b2 scroll-wrap">
    <div class="b2__cnt">
        <figure class="b2__figure scroll-item">
            <img src="{{$data['home']->imgIzqB2}}" alt="">
        </figure>
        <div class="b2__text scroll-item">
            <div class="general__title" data-style="50">
                <h2>{{$data['home']->tituloB2}}</h2>
            </div>
            {!!$data['home']->desB2!!}
            <div class="b2__btn">
                <a href="{{route('historia')}}" class="general__btn" data-style="line green">
                    <span>{{$data['home']->textoBtnB2}}</span>
                </a>   
            </div>
        </div>
        <figure class="b2__figure2 scroll-item">
            <img src="{{$data['home']->imgDerB2}}" alt="">
        </figure>
    </div>
</section>
{{-- BLOQUE TRES - PRODUCTOS --}}
<section class="b3 scroll-wrap">
    <div class="b3__hoja1 scroll-item">
        <img src="{{$data['home']->imgHojaB3}}" width="120" height="125" alt="">
    </div>
    <div class="b3__hoja2 scroll-item">
        <img src="{{$STATIC_URL}}img/hoja2.png" width="204" height="281" alt="">
    </div>
    <div class="b3__title scroll-item">
        <div class="general__title" data-style="50">
            <h2>{{$data['home']->tituloB3}}</h2>
        </div>
        <p>{{$data['home']->subtituloB3}}</p>
    </div>
    <div class="wancho b3__cnt">
        @php
            $etiqueta="";
            if($idiom == 'es'){
                $etiqueta='listos-para-consumir';
            }
            else{
                $etiqueta='ready-to-consume';
            }
        @endphp
        <div class="b3__item scroll-item">
            <span class="b3__line"></span>
            <div class="b3__figure">
                <img class="b3__img" src="{{$data['listo_consumir']->imagenCaladaListado}}" width="570"  alt="">  
                <div class="b3__figure__absolute">
                    <img src="{{$data['listo_consumir']->imagenFondoListado}}" width="472"  alt="">  
                </div>
            </div>
            <div class="b3__text">
                <h2>{{$data['listo_consumir']->tituloListado}}</h2>
                {!!$data['listo_consumir']->desListado!!}
                <div class="b3__btn">
                    <a href="{{route('industrial', [ 'slug' => $etiqueta ] )}}" class="general__btn" data-style="lineal">
                        <span>{{ \Helper::dictionary('ver-detalle') }}</span>
                    </a>   
                </div>
            </div>
        </div>
        <div class="b3__item scroll-item">
            <span class="b3__line"></span>
            <div class="b3__figure">
                <img class="b3__img" src="{{$data['insumo_industrial']->imagenCaladaListado}}" width="570"  alt="">  
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
                        if($dato == 'es'){
                            $etiqueta='insumos-industriales';
                        }
                        else{
                            $etiqueta='industrial-inputs';
                        }
                                        
                    @endphp
                    <a href="{{route('industrial', [ 'slug' => $etiqueta ] )}}" class="general__btn" data-style="lineal">
                        <span>{{ \Helper::dictionary('ver-detalle') }}</span>
                    </a>   
                </div>
            </div>
        </div>
        <div class="b3__item scroll-item">
            <span class="b3__line"></span>
            <div class="b3__figure">
                <img class="b3__img" src="{{$data['tradicional']->imagenCaladaListado}}" width="570"  alt="">  
                <div class="b3__figure__absolute">
                    <img src="{{$data['tradicional']->imagenFondoListado}}" width="472"  alt="">  
                </div>
            </div>
            <div class="b3__text">
                <h2>{{$data['tradicional']->tituloListado}}</h2>
                {!!$data['tradicional']->desListado!!}
                <div class="b3__btn">
                    <a href="{{route('tradicional')}}" class="general__btn" data-style="lineal">
                        <span>{{ \Helper::dictionary('ver-detalle') }}</span>
                    </a>   
                </div>
            </div>
        </div>
    </div>
    <div class="b3__btn__bottom">
        <a href="{{route('productos')}}" class="general__btn" data-style="">
            <span>{{ \Helper::dictionary('ver-productos') }}</span>
        </a>
    </div>
</section>
{{-- BLOQUE CUATRO --}}
<section class="b4 scroll-wrap">
    <figure style="background-image: url({{$data['home']->imgFondoB4}});"></figure>
    <div class="wancho b4__title scroll-item">
        <div class="general__title" data-style="50">
            <h2>{{$data['home']->tituloB4}}</h2>
        </div>
    </div>
</section>
{{-- BLOQUE CINCO - VIDEO --}}
<section class="b5">
    <div class="b5__hoja1">
        <img src="{{$data['home']->imgHojaB5}}" width="174" height="180" alt="">
    </div>
    <div class="b5__cnt__background">
        <div class="b5__background" style="background-image: url('{{$data['home']->coverVideoB4}}');"></div>
            @if ($data['home']->enlaceVideoB4 != '')
                <div class="b5__video"></div>
            @endif
    </div>
    <div class="wancho b5__cnt">
        <div class="b5__text">
            {!!$data['home']->desB4!!}
            <div class="b5__btn">
                <a href="" class="general__btn" data-style="line white">
                    <span>{{$data['home']->textoBtnB4}}</span>
                </a>
            </div>
        </div>
    </div>
</section>
{{-- BLOQUE SEIS - BLOG --}}
<section class="b6">
    <div class="wancho b6__cnt">
        <div class="b6__top">
            <div class="b6__title">
                <div class="general__title" data-style="50">
                    <h2>{{$data['home']->tituloB5}}</h2>
                </div>
                <p>{{$data['home']->subtituloB5}}</p>
            </div>
            <div class="b6__controls__nav">
                @foreach (array_reverse($data['categoria']) as $categoria)
                    <li><a class="blog-post tipo-{{$loop->iteration}}" data-slug="{{$categoria->slug}}" href="">{{$categoria->name}}</a></li>
                @endforeach
            </div>
        </div>
        <div class="b6__cnt__slider">
            <div class="b6__slider" id="posts">
                    
            </div>
        </div>
        <div class="b6__btn__bottom">
            <a href="{{$data['home']->enlaceBtnB5}}" target="_blank" class="general__btn" data-style="line green">
                <span>{{$data['home']->textoBtnB5}}</span>
            </a>
        </div>
    </div>
{{-- BLOQUE SIETE - FORMULARIO SUSCRIPCIÓN --}}
    <div class="wancho footer__suscripcion">
        <h2>{{$data['home']->tituloB6}}</h2>
        <form action="">
            <div class="general__input">
                <input type="text" name="correo" id="suscripcion" class="input__fijar">
                <label for="suscripcion">{{$data['home']->placeHolderB6}}</label>
            </div>
            <button class="general__btn f-guardarSuscriptor" data-style="">
                <span>{{$data['home']->textoBtnB6}}</span>
            </button>
        </form>
    </div>
</section>
@stop

@section('jsfinal')
<script src="{{ $STATIC_URL }}js/owl-carousel/owl.carousel.js"></script>
<script src="{{ $STATIC_URL }}js/validationform/jquery.validationEngine.js"></script>
<script type="text/javascript">
    //video youtube
    function detectMobil() {
        var isMobile = !1;
        if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge|maemo|midp|mmp|netfront|opera m(ob|in)i|palm(os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows(ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp(i|ip)|hs\-c|ht(c(\-||_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac(|\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt(|\/)|klon|kpt|kwc\-|kyo(c|k)|le(no|xi)|lg(g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-||o|v)|zz)|mt(50|p1|v)|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v)|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-|)|webc|whit|wi(g|nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
            isMobile = !0
        }
        return isMobile
    }
    dispositivo_movil = detectMobil();
    var videoId = "{{$codigo}}";
    if (dispositivo_movil) {
        // en movil no carga video
        $('.b5__background').addClass('mobile');
    }else{
        if(videoId == ''){
            $('.b5__background ').addClass('mobile');
        }
        $('.b5__cnt__background ').addClass('desktop');
        $('<div id="player" class="video-iframe"></div>').appendTo('.b5__video');
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        var player,
            playerDefaults = {autoplay: 0, autohide: 1, modestbranding: 0, rel: 0, showinfo: 0, controls: 0, disablekb: 1, enablejsapi: 0, iv_load_policy: 3};
        var vid = [
                    {'videoId': videoId },
                    {'videoId': videoId },
                    {'videoId': videoId },
                    {'videoId': videoId }
                ],
                randomvid = Math.floor(Math.random() * (vid.length - 1 + 1));
        function onYouTubePlayerAPIReady(){
            player = new YT.Player('player', {
                events: {'onReady': onPlayerReady, 'onStateChange': onPlayerStateChange}, 
                playerVars: playerDefaults});
        }
        function onPlayerReady(){
            player.loadVideoById(vid[randomvid]);
            player.mute();
        }
        function onPlayerStateChange(e) {
            if (e.data === 1){
                // $('#player').addClass('active');
            } else if (e.data === 0){
                player.seekTo(vid[randomvid].startSeconds)
            }
        }

    };
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


        itemcarrusel_1 = $('.b1__slide').length
        if (itemcarrusel_1 >= 2) {
            $('.b1').removeClass('carrusel-desktop');
            $('.b1__slider').addClass('owl-carousel');
            $('.b1__slider').addClass('b1__owlcarousel');
            $('.b1__owlcarousel').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                dots: true,
                items: 1,
                smartSpeed: 800,
                autoplayTimeout: 4500,
                autoplay: true,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                responsive: {
                    0: {
                        items: 1
                    }
                }
            });

        }

        function medidas_img(){
            var dot = $('.b1__slide');
            for (var i = 0; i < dot.length; i++) {
                var urlimg = dot.eq(i).attr('data-img'),
                img = urlimg.split(','),
                screen = $(window).width(),
                bgi = 'background-image:url(',
                cierre = ')';
                // insertando imagen segun medida
                if (screen > 768) {
                    dot.eq(i).find('figure').attr('style', bgi+img[0]+cierre);
                };
                if (screen <= 768) {
                    dot.eq(i).find('figure').attr('style', bgi+img[1]+cierre);
                };
            }
        };
        medidas_img();
        $(window).resize(function(event) {
            medidas_img();
        });






        function sliderOw__b6() {
            $('.b6__slider').addClass('owl-carousel');
            $('.b6__slider').addClass('b6__owl__carousel');
            var owlB1 = $('.b6__owl__carousel');
            owlB1.owlCarousel({
                loop: true,
                margin: 180,
                dots:false,
                nav: true,
                smartSpeed: 1000,
                autoplay: true,
                items:2,
                // stagePadding:500,
                // mouseDrag: false,
                autoplayTimeout: 6000,
                navText: ['<i class="icon-Path-6"></i>', '<i class="icon-Path-26-2"></i>'],
                // navText: [$('.b4__prev'),$('.b4__next')],
                // onInitialized: counterSlider_b1,
                responsive: {
                    0: {
                        items: 1,
                        margin: 30
                    },
                    768: {
                        items: 2,
                        margin: 30
                    },
                    769: {
                        items: 2,
                        margin: 90
                    },
                    960: {
                        items: 2,
                        margin: 180
                    }
                }
            });


        }
        function destroyOw() {
            $('.b6__slider').trigger('destroy.owl.carousel');
            $('.b6__slider').removeClass('owl-carousel');
            $('.b6__slider').removeClass('b4__owl__carousel');
        }
        var slider__initial = $('.b6__cnt__slider .b6__slide').length
        if (slider__initial > 2) {
            sliderOw__b6()
            // $('.b4__controls__left .b4__tab:first-child').addClass('active')
        }

        $("form").validationEngine('attach', {
            promptPosition : "topLeft",
            autoHidePrompt: true,
            autoHideDelay: 3000,
            binded: false,
            scroll: false
        });

        $(".f-guardarSuscriptor").click(function(e) {
            e.preventDefault();

            var item = $(this);
            var form = item.closest('form');
            var valid = form.validationEngine('validate');
            data = form.serialize();

            if (!valid){
                console.log('No');
            } else{

				$.ajax({
					url: '{{route("guardar-contacto-suscripcion")}}',
					type: 'POST',
					dataType: 'json',
					data: data,
					success: function(response){
						if(response.status){
							window.location.href="{{route('gracias')}}";
						}else{
							//error
						}
					}
				});
                
            }
        });
        $(".b6__controls__nav li:first-child a").addClass('active')

        $("body").on('click','.blog-post',function(e){
            e.preventDefault();
            
            slug = $(this).data('slug');
            idioma = '{{$ruta_completa[0]}}';
            var formData = new FormData();
            formData.append('slug', slug);
            formData.append('idioma', idioma);

            var ver = '{{ \Helper::dictionary('ver-mas') }}';
            //console.log(slug);
            $(".b6__controls__nav .blog-post").removeClass('active')
            $(this).toggleClass('active');
            $.ajax({
                url: '{{route("post-blog")}}',
                type: 'POST',
                dataType: 'json',
                contentType: false,
                processData: false,
                cache: false,
                data: formData,
                success: function(response){
                    destroyOw();
                    if(response.status){
                        console.log(response.data);
                        $("#posts").empty();
							htmlPosts = '';
						$.each(response.data, function (index, res) {

                            htmlPosts += '<div class="b6__slide">';
                            htmlPosts += '<div class="b6__slide__top">';
                            htmlPosts += '<div class="b6__slide__fecha">';
                            htmlPosts += ''+res.dia_tres+'';
                            htmlPosts += '</div>';
                            htmlPosts += '<ul>';
                            htmlPosts += '<li>'+res.mes_tres+'</li>';

                            $.each(res.category, function (index2, res2) {
                                htmlPosts += '<li>'+res2.name+'</li>';
                            });

                            htmlPosts += '</ul>';
                            htmlPosts += '</div>';
                            htmlPosts += '<div class="b6__slide__text">';
                            htmlPosts += '<h3>'+res.title+'</h3>';
                            htmlPosts += '<p>'+res.excerpt+'</p>';
                            htmlPosts += '<div class="b6__btn">';
                            htmlPosts += '<a href="'+res.url+'" target="_blank" class="general__btn" data-style="lineal">';
                            htmlPosts += '<span>'+ver+'</span>';
                            htmlPosts += '</a>';
                            htmlPosts += '</div>';
                            htmlPosts += '</div>';
                            htmlPosts += '</div>';

						});
						$('#posts').append(htmlPosts);

                        sliderOw__b6();
                    }else{
                        //error
                    }
                }
            });
        });

        $('.tipo-1').click();

    });
</script>
@stop











