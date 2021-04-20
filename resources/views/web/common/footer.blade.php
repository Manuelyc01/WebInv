<footer class="footer">
        
        <div class="wancho footer__cnt">
             <div class="footer__cnt__links">
                 <div class="footer__item">
                    <div class="footer__ul">
                         <h3>{{ \Helper::dictionary('nosotros') }}</h3>
                         <ul>
                             <li><a href="{{route('historia')}}">{{ \Helper::dictionary('historia') }}</a></li>
                             <li><a href="{{route('equipo')}}">{{ \Helper::dictionary('nuestro-equipo') }}</a></li>
                             <li><a href="{{route('productos')}}">{{ \Helper::dictionary('productos') }}</a></li>
                             <li><a href="{{route('sedes', [ 'slug' => $sede->slug ] )}}">{{ \Helper::dictionary('sedes') }}</a></li>
                             @if (count($counttra) > 0)
                             <li><a href="{{route('trabajo', [ 'slug' => 'todos' ] )}}">{{ \Helper::dictionary('bolsas-de-trabajo') }}</a></li>
                             @endif
                             @if (count($countser) > 0)
                             <li><a href="{{route('servicios', [ 'slug' => $servicio->slug ] )}}">{{ \Helper::dictionary('bolsas-de-servicio') }}</a></li>
                             @endif
                             {{-- <li><a href="{{$info->enlaceBlog}}" target="_blank">{{ \Helper::dictionary('blog') }}</a></li> --}}
                         </ul>
                    </div>
                 </div>
                  <div class="footer__item">
                    <div class="footer__ul">
                         <h3>{{ \Helper::dictionary('informacion-gestion') }}</h3>
                         <ul>
                             @if ($gestion != null)
                                <li><a href="{{route('gestion', [ 'slug' => $gestion->slug ] )}}">{{ \Helper::dictionary('informacion-gestion') }}</a></li>
                             @endif
                             <li><a href="{{$info->enlaceTransparencia}}" target="_blank">{{ \Helper::dictionary('transparencia') }}</a></li>
                             {{-- <li><a href="{{$info->codEticaPDF}}" target="_blank">{{ \Helper::dictionary('codigo-de-etica') }}</a></li> --}}
                         </ul>
                    </div>

                    <div class="footer__ul">
                        <h3>{{ \Helper::dictionary('herramientas-internas') }}</h3>
                        <ul>
                            @if ($info->intranet != '')
                                <li><a href="{{$info->intranet}}" target="_blank">{{ \Helper::dictionary('intranet') }}</a></li>
                            @endif
                            @if ($info->tde != '')
                                <li><a href="{{$info->tde}}" target="_blank">{{ \Helper::dictionary('tde') }}</a></li>
                            @endif
                            @if ($info->enlaceFE != '')
                                <li><a href="{{$info->enlaceFE}}" target="_blank">{{ \Helper::dictionary('factura-electronica') }}</a></li>
                            @endif
                            @if ($info->enlaceCocaleros != '')
                                <li><a href="{{$info->enlaceCocaleros}}" target="_blank">{{ \Helper::dictionary('reporte-cocaleros') }}</a></li>
                            @endif
                        </ul>
                   </div>
                 </div>
                  <div class="footer__item">
                    <div class="footer__ul">
                         <h3>{{ \Helper::dictionary('atencion-al-usuario') }}</h3>
                         <ul>
                             <li><a href="{{route('sugerencias')}}">{{ \Helper::dictionary('ayuda-y-sugerencias') }}</a></li>
                             <li><a href="{{route('denuncias')}}">{{ \Helper::dictionary('denuncias') }}</a></li>
                         </ul>
                    </div>
                    <div class="footer__ul">
                         <h3>{{ \Helper::dictionary('legales') }}</h3>
                         <ul>
                             <li><a href="{{$info->terminosPDF}}" target="_blank">{{ \Helper::dictionary('terminos-y-condiciones') }}</a></li>
                             @if ($info->privacidadDatosPDF != '')
                                <li><a href="{{$info->privacidadDatosPDF}}" target="_blank">{{ \Helper::dictionary('privacidad-de-datos') }}</a></li>
                             @endif
                         </ul>
                    </div>
                 </div>
             </div>
             <div class="footer__info">
                 <h3>{{ \Helper::dictionary('contactos') }}</h3>
                <div class="footer__info__item">
                    <h3>{{$info->ciudadBase}}</h3>
                    @if ($info->tlfCiudadBase != '')
                        <p>{{ \Helper::dictionary('telf') }}:<a href="tel:{{$info->tlfCiudadBase}}">{{$info->tlfCiudadBase}}</a></p>
                    @endif
                    @if ($info->celCiudadBase != '')
                        <p>{{ \Helper::dictionary('cel') }}:<a href="tel:{{$info->celCiudadBase}}">{{$info->celCiudadBase}}</a></p>
                    @endif
                </div>

                <div class="footer__info__item">
                    <h3>{{$info->ciudadProv}}</h3>
                    @if ($info->tlfCiudadProv != '')
                        <p>{{ \Helper::dictionary('telf') }}:<a href="tel:{{$info->tlfCiudadProv}}">{{$info->tlfCiudadProv}}</a></p>
                    @endif
                    @if ($info->celCiudadProv != '')
                        <p>{{ \Helper::dictionary('cel') }}:<a href="tel:{{$info->celCiudadProv}}">{{$info->celCiudadProv}}</a></p>
                    @endif
                </div>
             </div>
             <div class="footer__redes">
                 <figure>
                     <img src="{{ $STATIC_URL }}img/logo-enaco-2x.png" alt="" width="275" height="74">
                 </figure>
                 <div class="footer__social">
                      <span>{{ \Helper::dictionary('siguenos-en') }}</span>
                      <ul>
                          @if ($info->facebookEnaco != '')
                            <li><a class="icon-facebook-app-logo" href="{{$info->facebookEnaco}}" target="_blank"></a></li>
                          @endif
                          
                      </ul>
                 </div>
                 {{-- <div class="footer__redes__mail">
                     <a href="mailto:{{$info->correoWeb}}">{{$info->correoWeb}}</a>
                 </div> --}}
             </div>
        </div>
        <!-- creditos -->
        <section class="footer-copy">
            <div class="wancho footer-copy-cnt">
                <div class="footer-copy-left">
                    <p> ©<span id="id_year"></span> ENACO S.A. {{ \Helper::dictionary('todos-los-derechos-reservados') }}</p>
                </div>
                <div class="footer-copy-right">
                    <a class="link-staff" target="_blank" href="http://www.staffcreativa.pe/">{{ \Helper::dictionary('disenada-por') }} Staffcreativa</a>
                </div>
            </div>
        </section>
    </footer>
    