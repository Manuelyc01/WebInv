<header class="header">

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
        
        if(count($ruta_completa) > 1){
            $ruta[0] = $ruta_completa[1];
            $ruta[1] = '';
            if (count($ruta_completa) > 2) {
                $ruta[1] = $ruta_completa[2];
            }
            
        }else{
            $ruta[0] = '';
            $ruta[1] = '';
        }
    @endphp
    <div class="header__cnt__top">
        <div class="wancho header__top">
            <div class="header__idioma">
                
                @if ($info->activarIdioma)
                    @if ($ruta_completa[0] == 'en')
                    <a href="" id="cambio-idioma-es">
                        <i style="background-image: url('{{ $STATIC_URL }}img/peru.png');"></i>
                        <span>ESP</span>
                    </a>
                    @else
                    <a href="" id="cambio-idioma-en">
                        <i style="background-image: url('{{ $STATIC_URL }}img/united-states.png');"></i>
                        <span>ENG</span>
                    </a>
                    @endif 
                @endif
                    
                
            </div>
            <ul class="header__links">
                @if ($info->enlaceBlog)
                    <li><a href="{{$info->enlaceBlog}}" target="_blank">{{ \Helper::dictionary('blog') }}</a></li>
                @endif
                @if ($info->enlaceCocaleros)
                    <li><a href="{{$info->enlaceCocaleros}}" target="_blank">{{ \Helper::dictionary('cocaleros') }}</a></li>
                @endif
                @if ($info->enlaceTransparencia)
                    <li><a href="{{$info->enlaceTransparencia}}" target="_blank"><img src="{{ $STATIC_URL }}img/logopte_sf.png" width="20" alt=""> <span>{{ \Helper::dictionary('transparencia') }}</span></a></li>
                @endif
            </ul>
        </div>
        
    </div>
    <div class="header__cnt__center">
        <div class="wancho header-ctn">
            <a href="{{route('home')}}" class="header-logo">
                <img src="{{ $STATIC_URL }}img/logo.png?v=2.0" alt="" width="275" height="74">
            </a>
            <nav class="menu">
                <div class="menu-wrap">
                    <ul class="menu-list"> 
                        <li class="menu-item header__click">
                            <a href="" class="menu-link @if('nosotros' == $ruta[0]) ? active : '' @endif"><span>{{ \Helper::dictionary('nosotros') }}</span><i class="icon-flecha-2"></i></a>
                            <ul class="header__megaMenu__nosotros">
                                <li><a href="{{route('historia')}}" class="@if('historia' == $ruta[1]) ? active : '' @endif">{{ \Helper::dictionary('historia') }}</a></li> 
                                <li><a href="{{route('equipo')}}" class="@if('equipo' == $ruta[1]) ? active : '' @endif">{{ \Helper::dictionary('equipo') }}</a></li> 
                                <!-- LI BOLSA TRABAJO--->
                                @if (count($counttra) > 0)
                                <li class="solo-mobile"><a href="{{route('trabajo', [ 'slug' => 'todos' ] )}}">{{ \Helper::dictionary('bolsas-de-trabajo') }}</a></li>
                                @endif
                                <!-- LI FIN-->
                            </ul>
                        </li>
                        <li class="menu-item header__click2">
                            <a href="{{route('productos')}}" class="menu-link @if('productos' == $ruta[0] || 'producto' == $ruta[0]) ? active : '' @endif"><span>{{ \Helper::dictionary('productos') }}</span><i class="icon-flecha-2"></i></a>
                            <div class="header__megaMenu">
                                <div class="header__mega__center">
                                    <div class="wancho header__megaMenu__cnt">
                                        <a href="{{route('industrial', [ 'slug' => 'todos' ] )}}" class="header__megaMenu__item">
                                                <figure>
                                                    <img src="{{$industrial->imagenCaladaListado}}" alt="" width="276" >
                                                    <figcaption>
                                                        <p>{{$industrial->tituloListado}}</p>
                                                    </figcaption>
                                                </figure>
                                        </a>
                                        <a href="{{route('tradicional')}}" class="header__megaMenu__item">
                                                <figure>
                                                    <img src="{{$tradicional->imagenCaladaListado}}" alt="" width="276" >
                                                    <figcaption>
                                                        <p>{{$tradicional->tituloListado}}</p>
                                                    </figcaption>
                                                </figure>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="menu-item header__click2 solo-mobile">
                            <a href="{{route('productos')}}" class="menu-link @if('productos' == $ruta[0] || 'producto' == $ruta[0]) ? active : '' @endif"><span>{{ \Helper::dictionary('herramientas-internas') }}</span><i class="icon-flecha-2"></i></a>
                            <div class="header__megaMenu">
                                <div class="header__mega__center">
                                    <div class="wancho header__megaMenu__cnt">
                                        @if ($info->intranet != '')
                                        <a href="{{$info->intranet}}" class="header__megaMenu__item">
                                                <figure>
                                                    <figcaption>
                                                        <p>{{ \Helper::dictionary('intranet') }}</p>
                                                    </figcaption>
                                                </figure>
                                        </a>
                                        @endif
                                        @if ($info->tde != '')
                                        <a href="{{$info->tde}}" class="header__megaMenu__item">
                                                <figure>
                                                    <figcaption>
                                                        <p>{{ \Helper::dictionary('tde') }}</p>
                                                    </figcaption>
                                                </figure>
                                        </a>
                                        @endif
                                        @if ($info->enlaceFE != '')
                                        <a href="{{ $info->enlaceFE }}" class="header__megaMenu__item">
                                                <figure>
                                                    <figcaption>
                                                        <p>{{ \Helper::dictionary('factura-electronica') }}</p>
                                                    </figcaption>
                                                </figure>
                                        </a>
                                        @endif
                                        @if ($info->enlaceCocaleros != '')
                                        <a href="{{$info->enlaceCocaleros}}" class="header__megaMenu__item">
                                                <figure>
                                                    <figcaption>
                                                        <p>{{ \Helper::dictionary('reporte-cocaleros') }}</p>
                                                    </figcaption>
                                                </figure>
                                        </a>
                                        @endif
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
                        <li class="menu-item header__click2 solo-mobile">
                            <a class="menu-link @if('productos' == $ruta[0] || 'producto' == $ruta[0]) ? active : '' @endif"><span>{{ \Helper::dictionary('informacion-gestion') }}</span><i class="icon-flecha-2"></i></a>
                            <div class="header__megaMenu">
                                <div class="header__mega__center">
                                    <div class="wancho header__megaMenu__cnt">
                                        @if ($gestion != null)
                                        <a href="{{route('gestion', [ 'slug' => $gestion->slug ] )}}" class="header__megaMenu__item">
                                                <figure>
                                                    <figcaption>
                                                        <p>{{ \Helper::dictionary('informacion-gestion') }}</p>
                                                    </figcaption>
                                                </figure>
                                        </a>
                                        @endif
                                        @if ($info->enlaceTransparencia != '')
                                        <a href="{{$info->enlaceTransparencia}}" class="header__megaMenu__item">
                                                <figure>
                                                    <figcaption>
                                                        <p>{{ \Helper::dictionary('transparencia') }}</p>
                                                    </figcaption>
                                                </figure>
                                        </a>
                                        @endif
                                    </div>
                                    
                                </div>
                            </div>
                        </li>
                        
                        
                        <li class="menu-item @if('sedes' == $ruta[0]) ? active : '' @endif"><a href="{{route('sedes', [ 'slug' => $sede->slug ] )}}" class="menu-link"><span>{{ \Helper::dictionary('sedes') }}</span></a></li>
                        @if ($info->enlaceBlog != '')
                            <li class="menu-item"><a href="{{$info->enlaceBlog}}" target="_blank" class="menu-link"><span>Blog</span></a></li>
                        @endif
                        <li class="menu-item"><a href="{{route('contactanos')}}" class="menu-link"><span>{{ \Helper::dictionary('contactanos') }}</span></a></li>
                    </ul>
                </div>
            </nav>
            <div class="header__btn">
                <a href="{{route('contactanos')}}" class="general__btn">
                    <span>{{ \Helper::dictionary('contactanos') }}</span>
                </a>    
            </div>
        </div>
    </div>
</header>
    