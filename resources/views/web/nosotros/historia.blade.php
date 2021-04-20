@extends('web.common.base')

@section('cssadicional')
<link rel="stylesheet" href="{{ $STATIC_URL }}js/owl-carousel/owl.carousel.min.css">
<!-- <link rel="stylesheet" href="{{ $STATIC_URL }}css/animate.css" /> -->
@stop

@section('classbody')
nosotros-css
@stop

@section('content')
{{-- BLOQUE UNO --}}
<section class="b2 b2__historia">
    <div class="b2__cnt">
        <figure class="b2__figure">
            <img src="{{$data['historia']->imagenIzqB1}}" alt="">
        </figure>
        <div class="b2__text b2__text__historia">
            <div class="general__title" data-style="40">
                @php
                    $titulo = explode('//',$data['historia']->tituloB1);
                    $contador = count($titulo);
                @endphp
                @if($contador > 1)
                <h2>{{$titulo[0]}}<br> {{$titulo[1]}}</h2>
                @else
                <h2>{{$titulo[0]}}</h2>
                @endif
            </div>
            {!!$data['historia']->desB1!!}
            @if ($data['historia']->arrayB1 != null)
                <ul class="b2__cnt__icons">
                    @if ($data['historia']->arrayB1 != null)
                        @foreach ($data['historia']->arrayB1 as $beneficio)
                        <li>
                            <figure>
                                <img src="{{$beneficio['archivo1A']}}" width="124" height="88" alt="">
                                <img src="{{$beneficio['archivo2A']}}" width="124" height="88" alt="">
                                <figcaption>{{$beneficio['texto3A']}}</figcaption>
                            </figure>
                        </li>
                        @endforeach
                    @endif
                </ul>
            @endif            
        </div>
        <figure class="b2__figure2">
            <img src="{{$data['historia']->imagenDerB1}}" alt="">
        </figure>
    </div>
</section>
{{-- BLOQUE DOS - MISIÓN Y VISIÓN --}}
<section class="b7">
    <div class="wancho b7__cnt">
        <div class="b7__center">
            <div class="b7__item">
                <div class="general__title" data-style="35">
                    <h2>{{$data['historia']->tituloMisionB2}}</h2>
                    <p><strong>{{$data['historia']->subtituloMisionB2}}</strong></p>
                </div>
                {!!$data['historia']->desMisionB2!!}
            </div>
            <div class="b7__item">
                <div class="general__title" data-style="35">
                    <h2>{{$data['historia']->tituloVisionB2}}</h2>
                    <p><strong>{{$data['historia']->subtituloVisionB2}}</strong></p>
                </div>
                {!!$data['historia']->desVisionB2!!}
            </div>
        </div>
    </div>
    <div class="b7__hoja1">
        <img src="{{$data['historia']->imgHojaDerB2}}" width="122" height="129" alt="">
    </div>
    <div class="b7__hoja2">
        <img src="{{$data['historia']->imgHojaIzqB2}}" width="158" height="225" alt="">
    </div>
</section>
{{-- BLOQUE TRES - LÍNEA DE TIEMPO --}}
<section class="b8">
    <div class="b8__title">
        <div class="general__title" data-style="40">
            <h2>{{$data['historia']->tituloB3}}</h2>
        </div>
    </div>
    <div class="b8__cnt">
        <div class="b8__slider">

            @php
                $tm = count($data['historia']->arrayB3);
            @endphp
            @foreach ($data['historia']->arrayB3 as $key => $item)
            @php
                //dd($key);
            @endphp
                <div class="b8__item">
                    <figure>
                        <img src="{{$item['imgA']}}" width="215" height="191" alt="">
                    </figure>
                    <div class="b8__text">
                        <span>{{$item['tx1A']}}</span>
                        <h3>{{$item['tx2A']}}</h3>
                        {!!$item['txDesA']!!}
                    </div>
                </div>
                <!-- @if ($key > 1 and $key < $tm - 2)
                @endif -->
            @endforeach
        </div>
    </div>
</section>
{{-- BLOQUE CUATRO - CALIDAD --}}
<section class="b9">
    <div class="wancho b9__cnt">
        <div class="b9__text">
            <div class="general__title" data-style="50">
                <h2>{{$data['historia']->tituloB4}}</h2>
            </div>
            <div class="b9__paragraph">
                {!!$data['historia']->desB4!!}
            </div>
            <div class="b9__certif">
                @foreach ($data['historia']->arrayB4 as $certificado)
                    <img src="{{$certificado['archivoOne1A']}}" width="147" alt="">
                @endforeach
            </div>
        </div>
        <figure class="b9__figure">
            <img src="{{$data['historia']->imgB4}}" width="954" height="650" alt="">
        </figure>
    </div>
</section>

{{-- BLOQUE CINCO - PRODUCTOS --}}
<section class="b10">
    <div class=" b10__cnt">
        <div class="b10__title">
            <div class="general__title" data-style="40 white">
                <h2>{{$data['historia']->tituloB5}}</h2>
            </div>
        </div>
        <ul class="b10__nav">
            <li>
                <a href="#1" class="general__btn b10__click" >
                    <span>{{$data['historia']->textoBtn1B5}}</span>
                </a>   

            </li>
            <li>
                <a href="#2" class="general__btn b10__click" >
                    <span>{{$data['historia']->textoBtn2B5}}</span>
                </a>   
            </li>
        </ul>
        <div class="b10__cnt__slider">
            <div class="b10__item" data-tab="1">
                <div class="b10__slider" >
                    @foreach ($data['historia']->array1B5 as $imagen)
                        @if ($imagen['archivoOne1A1'] != '')
                            <div class="b10__slide" data-slide="1" data-tab="2" data-url="{{$imagen['archivoOne1A1']}}">
                                <figure class="b10__figure" ></figure>
                                
                            </div>
                        @endif                   
                    @endforeach
                </div>
                <div class="b10__center">
                    <div class="b10__slide__text">
                        <div class="general__title" data-style="70 white">
                            <h2>{{$data['historia']->titulo1B5}}</h2>
                            <p>{{$data['historia']->subtitulo1B5}}</p>
                        </div>
                    </div>
                </div>
                <div class="b1__cnt__tab">
                    <div class="b10__tab" >
                        {!!$data['historia']->des1B5!!}
                        <div class="b10__btn">
                            <a href="{{route('tradicional')}}" class="general__btn">
                                <span>{{ \Helper::dictionary('ver-productos') }}</span>
                            </a>   
                        </div>
                    </div>

                   
                </div>
                
            </div>
            <div class="b10__item" data-tab="2">
                <div class="b10__slider" >
                        @foreach ($data['historia']->array2B5 as $imagen)
                            @if ($imagen['archivoOne1A2'] != '')
                                <div class="b10__slide" data-slide="1" data-tab="2" data-url="{{$imagen['archivoOne1A2']}}">
                                    <figure class="b10__figure" ></figure>
                                    
                                </div>
                            @endif       
                        @endforeach
                    </div>
                    <div class="b10__center">
                        <div class="b10__slide__text">
                            <div class="general__title" data-style="70 white">
                                <h2>{{$data['historia']->titulo2B5}}</h2>
                                <p>{{$data['historia']->subtitulo2B5}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="b1__cnt__tab">
                        <div class="b10__tab" >
                            {!!$data['historia']->des2B5!!}
                            <div class="b10__btn">
                                <a href="{{route('industrial', [ 'slug' => 'todos' ] )}}" class="general__btn">
                                    <span>{{ \Helper::dictionary('comercio-industrial') }}</span>
                                </a>   
                            </div>
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="b10__box__hiden " style="display:none;">
        <div class="b10__slide" data-slide="2" data-tab="3" data-url="{{$STATIC_URL}}img/b10-bitmap.jpg">
            <figure class="b10__figure" ></figure>
            <div class="b1__slide__text">
                <div class="general__title" data-style="70 white">
                    <h2>Comercio Tradicional 3</h2>
                    <p>Conoce más de este comercio</p>
                </div>
            </div>
        </div>
        <div class="b10__slide" data-slide="2" data-tab="4" data-url="{{$STATIC_URL}}img/b10-bitmap.jpg">
            <figure class="b10__figure" ></figure>
            <div class="b1__slide__text">
                <div class="general__title" data-style="70 white">
                    <h2>Comercio Tradicional 4</h2>
                    <p>Conoce más de este comercio</p>
                </div>
            </div>
        </div>
        <div class="b10__slide" data-slide="2" data-tab="5" data-url="{{$STATIC_URL}}img/b10-bitmap.jpg">
            <figure class="b10__figure" ></figure>
            <div class="b1__slide__text">
                <div class="general__title" data-style="70 white">
                    <h2>Comercio Tradicional 5</h2>
                    <p>Conoce más de este comercio</p>
                </div>
            </div>
        </div>
        <div class="b10__slide" data-slide="2" data-tab="6" data-url="{{$STATIC_URL}}img/b10-bitmap.jpg">
            <figure class="b10__figure" ></figure>
            <div class="b1__slide__text">
                <div class="general__title" data-style="70 white">
                    <h2>Comercio Tradicional 6</h2>
                    <p>Conoce más de este comercio</p>
                </div>
            </div>
        </div>
    </div> -->
</section>
@stop

@section('jsfinal')
<script src="{{ $STATIC_URL }}js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript">
    
    $(function(){
        items = $(".b8__item");
        grupode = 2
        for(var i = 0; i < items.length; i+=grupode) {
            items.slice(i, i+grupode).appendTo('.b8__slider').wrapAll("<div class='b8__slide'></div>");
        };


        var cantidad = $('.b8__slide').length;
        function sliderOw(){
            $('.b8__cnt').removeClass('desktop')
            $('.b8__slider').addClass('owl-carousel');
            $('.b8__slider').owlCarousel({
                loop:false,
                margin:0,
                nav:true,
                dots:false,
                autoplay:false,
                navText:['<i class="icon-Path26"></i>','<i class="icon-Path-26"></i>'],
                onInitialized: counterSlider_b8,
                responsive:{
                    0:{
                        items:1
                    },
                    1024:{
                        items:2
                    }
                }

            })
            function counterSlider_b8(event) {
                console.log(cantidad)
                setTimeout(function(){
                    $('.b8__slider').trigger('to.owl.carousel',[cantidad,300]);

                },200)
            };
        }

        function destroyOw(){
            $('.b8__slider').trigger('destroy.owl.carousel');
            $('.b8__cnt').addClass('desktop');
            $('.b8__slider').removeClass('owl-carousel');
        }

        if (matchMedia) {
            var mq = window.matchMedia("(max-width: 1024px)");
            mq.addListener(WidthChange);
            WidthChange(mq);
        }

        // media query change
        function WidthChange(mq) {
            if (mq.matches ) {
                    // console.log('menor a 1000px');
                    if ($('.b8__cnt').hasClass('owl-carousel')) {
                        // console.log('slider, ya existe');
                    }
                    else{
                        // console.log('slider, aun no existe')
                        sliderOw()
                }
            }
            else {
                // console.log('mayor a 1000px');
                if (cantidad >= 3) {
                    destroyOw()
                    sliderOw()
                }
                else{
                    destroyOw()
                }
            };
        }



        // B10
        function medidas_img(){
            var dot = $('.b10__slider .b10__slide');
            for (var i = 0; i < dot.length; i++) {
                var urlimg = dot.eq(i).attr('data-url'),
                    // img = urlimg.split(','),
                    // screen = $(window).width(),
                    bgi = 'background-image:url(',
                    cierre = ')';
                // insertando imagen segun medida
                dot.eq(i).find('.b10__figure').attr('style', bgi+urlimg+cierre);
                // if (screen > 768) {
                //     dot.eq(i).find('.b1__figure').attr('style', bgi+img[0]+cierre);
                // };
                // if (screen <= 768) {
                //     dot.eq(i).find('.b1__figure').attr('style', bgi+img[1]+cierre);
                // };
            }
        };
        medidas_img();
        $(window).resize(function(event) {
            medidas_img();
        });
        function sliderOw_10() {
            $('.b10__slider.active').addClass('owl-carousel');
            $('.b10__slider.active').addClass('b10__owl__carousel');
            var owlB1 = $('.b10__owl__carousel');
            owlB1.owlCarousel({
                loop: true,
                margin: 0,
                dots:true,
                nav: true,
                smartSpeed: 1000,
                autoplay: true,
                items:1,
                center: true,
                // stagePadding:500,
                // mouseDrag: false,
                autoplayTimeout: 6000,
                navText: ['<i class="icon-Path-6"></i>', '<i class="icon-Path-26-2"></i>'],
                // navText: [$('.b10__prev'),$('.b10__next')],
                // onInitialized: counterSlider_b1,
                responsive: {
                    0: {
                        items: 1,
                        stagePadding:0,
                        margin: 0
                    }
                }
            });

        }

        function destroyOw_10() {
            $('.b10__slider.active').trigger('destroy.owl.carousel');
            $('.b10__slider.active').removeClass('owl-carousel');
            $('.b10__slider.active').removeClass('b10__owl__carousel');
        }

        $('.b10__nav li:first-child .b10__click').addClass('active')
        $('.b10__item:first-child').addClass('active')



        var b10_slides = $('.b10__slider');

        for (var t = 0; t < b10_slides.length; t++) {
            // b10_slides.eq(t).find('.b3-slide').css('transition-delay', +t/8+'s');
            var slides_childs =  b10_slides.eq(t).find('.b10__slide').length;
            // console.log(slides_childs)
            if (slides_childs > 1) {
                $('.b10__slider').eq(t).addClass('active')
                sliderOw_10()
            }
        }

        $('.b10 .b10__click').on('click', function (event) {
            event.preventDefault();
            if (!$(this).hasClass('active')) {
                // destroyOw_10();
                $('.b10 .b10__click').removeClass('active');
                $(this).addClass('active');

                var this_slide_data = $(this).attr('href'),
                    this_slide_data = this_slide_data.split('#'),
                    this_slide_data = this_slide_data[1]

                $('.b10__item').removeClass('active')
                $('.b10__item[data-tab="'+this_slide_data+'"]').addClass('active')



            }
        });


    });
</script>
@stop











