<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" > 
     <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 

    <meta name="csrf-token" content="{{ csrf_token() }}">

   @include('web.common.metatags')

    <!-- inicio favicon  iphone retina, ipad, iphone en orden-->
    {{-- <link rel="icon" type="image/png" href="{{ $STATIC_URL }}img/favicon/256.png?v=1.1"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ $STATIC_URL }}img/favicon/114.png?v=1.1">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ $STATIC_URL }}img/favicon/72.png?v=1.1">
    <link rel="apple-touch-icon-precomposed" href="{{ $STATIC_URL }}img/favicon/57.png?v=1.1"> --}}
    <!-- end favicon -->

    @yield('cssadicional')

    <link rel="stylesheet" type="text/css" href="{{ $STATIC_URL }}css/styles.css?v=6"/>
    
    <!--Estilos solo mobile ocultar-->    
    <style type="text/css">
    @media screen and (min-width: 1025px) {
        .solo-mobile {
            display: none;
        }
    }

    </style>
    
    <!-- <link rel="stylesheet" type="text/css" href="{{ $STATIC_URL }}css/blocks_styl.css?v=4"/> -->

    <!--[if lt IE 9]>
        <script src="{{ $STATIC_URL }}js/html5.js"></script>
        <script src="{{ $STATIC_URL }}js/respond.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="{{ $STATIC_URL }}css/ie.css"/>
    <![endif]-->

</head>

<body class="@yield('classbody')">

<!-- html solo para el menu responsive -->
<div  class="menu-mobile-open icon-menu"></div>
<div class="menu-mobile-close icon-close"></div>
<div class="menu-overlay"></div>
<!-- html solo para el menu responsive -->

<div class="cnt-wrapper">
    <!-- HEADER START -->
    @include('web.common.header')
    <!-- HEADER END -->

    <div class="wrapper">
        <!-- CONTENT START -->
        @yield('content')
        <!-- CONTENT END -->
    </div>

    <!-- FOOTER START -->
    @include('web.common.footer')
    <!-- FOOTER END -->
</div>



<!-- contenedor del menu responsive -->
<div class="menu-sidebar" data-menu="right-in" style="display: none;">
    <div class="menu-sidebar-cnt"></div>
</div>


<script src="{{ $STATIC_URL }}js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="{{ $STATIC_URL }}js/main.js" type="text/javascript"></script>


<!-- JSADD START -->
@yield('jsfinal')
<!-- JSADD END -->


<script type="text/javascript">
    window.addEventListener('load', function(){
        function showSeconds(){
            // document.querySelector('.header-megaMenu').removeAttribute('style');
            document.querySelector('.menu-sidebar').removeAttribute('style');

            // document.querySelector('.background__load').classList.add('load');
            // document.querySelector('.background__load').classList.add('before');
            // if (document.querySelector('body').classList.contains('home-css')) {
            //     console.log('tiene')
            // }else{
            //     document.querySelector('.background__load__internal').classList.add('load__out');
            //     document.querySelector('.background__load__internal').classList.add('load');


            //     $('.section__anima').addClass('load');
            // }
        }


        setTimeout(showSeconds,10);
        // var heigth__element = document.querySelector('.wrapper'),
        //     heigth__all_height = heigth__element.offsetHeight;

        // document.querySelector('.height__general').style.height = heigth__all_height+'px';
    }, false )



    //para los formularios
    $.ajaxSetup({
		headers: { 'X-CSRF-Token' : "{{ csrf_token() }}" }
	});
   
    $(function(){
            
            var menu_data = $('.menu-sidebar').attr('data-menu');
            if (menu_data == 'left-in') {
                $('body').removeClass('right-in');
                $('body').removeClass('top-in');
                $('body').addClass('left-in');
            }
            if (menu_data == 'right-in') {
                $('body').removeClass('left-in');
                $('body').removeClass('left-in');
                $('body').addClass('right-in');
            }
            if (menu_data == 'top-in') {
                $('body').removeClass('left-in');
                $('body').removeClass('right-in');
                $('body').addClass('top-in');
                
            }


            $('.header__click .menu-link, .header__click2 .menu-link').on('click', function(event) {
                if ($(window).width()<1025) {
                    event.preventDefault();
                    $(this).closest('.menu-item').find('.header__megaMenu__nosotros, .header__megaMenu__cnt').stop(false).slideToggle(200)

                }
            });


           
        })
        function height_header(){
            var height_header = $('.header').height(),
                sidebar_cout = $('.menu-sidebar').attr('data-header', 'sidebar-bottom').length;
            // console.log(sidebar_cout)
            
            // CUANDO EL MENU SIDEBAR ESTA DEBAJO DEL HEADER
                $('.cnt-wrapper').css('padding-top', height_header); 
                // if ($('body').hasClass('left-in') || $('body').hasClass('right-in')) {
                //     $('.menu-overlay').css('top', height_header); 
                //     $('.menu-sidebar').css({
                //         top: height_header,
                //         height: 'calc(100% - '+height_header+'px)'
                //     });
                // }
                // if ($('body').hasClass('top-in')) {
                //     $('.menu-sidebar').css({
                //         top: height_header,
                //         height: 'calc(100% - '+height_header+'px)'
                //     });
                // }
            // CUANDO EL MENU SIDEBAR ESTA DEBAJO DEL HEADER
        }
        height_header();
        $(window).on('load', function() {height_header();});
        $(window).on('resize', function() {height_header();});

        $('#cambio-idioma-es').click(function(e){
            e.preventDefault();
            url_actual = window.location.href;
            url_splitted = url_actual.split('/')

            for (i = 0; i < url_splitted.length; i++) {
                if (url_splitted[i] == 'en') {
                    url_splitted[i] = 'es';
                }
            }
            url_nueva = url_splitted.join('/');
            window.location.replace(url_nueva);
        });

        $('#cambio-idioma-en').click(function(e){
            e.preventDefault();
            url_actual = window.location.href;
            url_splitted = url_actual.split('/')

            for (i = 0; i < url_splitted.length; i++) {
                if (url_splitted[i] == 'es') {
                    url_splitted[i] = 'en';
                }
            }
            url_nueva = url_splitted.join('/');
            window.location.replace(url_nueva);
        });

</script>
</body>
</html>
