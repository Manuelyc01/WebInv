<?php

$users_active = config('app.users_menu');
$menu_array = [];

if ($users_active) {
    $menu_array =  [
            'type' => 'tree',
            'text' => 'Roles & Usuarios',
            'slug' => 'usuario',
            'ico'  => 'user',
            'children' => [
                    [
                      'type' => 'one',
                      'text' => 'Roles',
                      'url' => 'roles.index',
                    ],

                    [
                      'type' => 'one',
                      'text' => 'Usuarios',
                      'url' => 'usuarios.index',
                    ]
                ]
        ];
}

return[

	'menu' => [

    $menu_array,        

    //======== UN NIVEL ===============

    [
      'type' => 'simple',
      'text' => 'Info',
      'slug' => 'info',
      'url'  => 'info-adm.index',
      'ico'  => 'info-sign'
    ],

    [
        'type' => 'simple',
        'text' => 'Banners del Home',
        'slug' => 'banner',
        'url'  => 'banner-adm.index',
        'ico'  => 'picture'
    ],

    [
      'type' => 'simple',
      'text' => 'Home',
      'slug' => 'home',
      'url'  => 'home-adm.index',
      'ico'  => 'home'
    ],

    [
      'type' => 'simple',
      'text' => 'Sedes',
      'slug' => 'sede',
      'url'  => 'sede-adm.index',
      'ico'  => 'globe'
    ],


    [
      'type' => 'tree',
      'text' => 'Nosotros',
      'slug' => 'nosotros',
      'ico'  => 'leaf',
      'children' => [
             [
              'type' => 'one',
              'text' => 'Historia',
              'ico'  => 'book',
              'url' => 'historia-adm.index'              
             ],

            
 
             [
              'type' => 'two',
              'text' => 'Equipo',
              'ico'  => 'book',
              'children' => [

                [
                  'type' => 'one',
                  'text' => 'Equipo',
                  'url' => 'equipo-adm.index'
                ],

                [
                  'type' => 'one',
                  'text' => 'Cargos',
                  'url' => 'cargo-adm.index'
                ],

                // [
                //   'type' => 'one',
                //   'text' => 'Niveles',
                //   'url' => 'niveles-adm.index'
                // ],

                [
                  'type' => 'one',
                  'text' => 'Integrantes',
                  'url' => 'integrante-adm.index'
                ],


              ]
            ],
            
         ]
    ],

    [
      'type' => 'tree',
      'text' => 'Tradicional',
      'slug' => 'tradicional',
      'ico'  => 'shopping-cart',
      'children' => [
            
            [
              'type' => 'one',
              'text' => 'Tradicional',
              'ico'  => 'book',
              'url' => 'tradicional-adm.index'              
            ],

            [
              'type' => 'one',
              'text' => 'Etiquetas',
              'ico'  => 'book',
              'url' => 'etiqueta-tradicional-adm.index'              
            ],

            [
              'type' => 'one',
              'text' => 'Productos',
              'ico'  => 'book',
              'url' => 'producto-tradicional-adm.index'              
            ],

         ]
    ],

    [
      'type' => 'tree',
      'text' => 'Industrial',
      'slug' => 'industrial',
      'ico'  => 'shopping-cart',
      'children' => [
            
            [
              'type' => 'one',
              'text' => 'Industrial',
              'ico'  => 'book',
              'url' => 'industrial-adm.index'              
            ],

            [
              'type' => 'one',
              'text' => 'Categorías',
              'ico'  => 'book',
              'url' => 'etiqueta-industrial-adm.index'              
            ],

            [
              'type' => 'one',
              'text' => 'Etiquetas',
              'ico'  => 'book',
              'url' => 'subcategoria-industrial-adm.index'              
            ],

            [
              'type' => 'one',
              'text' => 'Productos',
              'ico'  => 'book',
              'url' => 'producto-industrial-adm.index'              
            ],

         ]
    ],

    [
      'type' => 'tree',
      'text' => 'Info Gestión',
      'slug' => 'gestion',
      'ico'  => 'th-list',
      'children' => [
              [
                'type' => 'one',
                'text' => 'Nivel Uno',
                'ico'  => 'book',
                'url' => 'gestion-nivel1-adm.index'              
              ],

              [
                'type' => 'one',
                'text' => 'Nivel Dos',
                'ico'  => 'book',
                'url' => 'gestion-nivel2-adm.index'              
              ],

              [
                'type' => 'two',
                'text' => 'Nivel 3',
                'ico'  => 'book',
                'children' => [
  
                  [
                    'type' => 'one',
                    'text' => 'Nivel 3',
                    'url' => 'gestion-nivel3-adm.index'
                  ],
  
                  [
                    'type' => 'one',
                    'text' => 'Contenido Nivel 3',
                    'url' => 'gestion-nivel3b-adm.index'
                  ],
  
                ]
              ],
      
         ]
    ],

    [
      'type' => 'tree',
      'text' => 'Bolsas',
      'slug' => 'bolsas',
      'ico'  => 'briefcase',
      'children' => [
             [
              'type' => 'one',
              'text' => 'Departamentos',
              'ico'  => 'book',
              'url' => 'departamento-adm.index'              
             ],

             [
              'type' => 'two',
              'text' => 'Bolsa Trabajo',
              'ico'  => 'book',
              'children' => [

                [
                  'type' => 'one',
                  'text' => 'Trabajos',
                  'url' => 'trabajo-adm.index'
                ],
              ]
            ],

            [
              'type' => 'two',
              'text' => 'Bolsa Servicios',
              'ico'  => 'book',
              'children' => [

                [
                  'type' => 'one',
                  'text' => 'Categorías',
                  'url' => 'categoria-servicio-adm.index'
                ],

                [
                  'type' => 'one',
                  'text' => 'Servicios',
                  'url' => 'servicio-adm.index'
                ],
              ]
            ],
      
         ]
    ],

    [
      'type' => 'tree',
      'text' => 'Contactos',
      'slug' => 'contactos',
      'ico'  => 'inbox',
      'children' => [
             [
              'type' => 'one',
              'text' => 'Globales',
              'ico'  => 'book',
              'url' => 'contacto-global-adm.index'              
             ],

             [
              'type' => 'one',
              'text' => 'Sugerencias',
              'ico'  => 'book',
              'url' => 'contacto-sugerencia-adm.index'              
             ],

             [
              'type' => 'one',
              'text' => 'Denuncias',
              'ico'  => 'book',
              'url' => 'contacto-denuncia-adm.index'              
             ],            

             [
              'type' => 'one',
              'text' => 'Suscripciones',
              'ico'  => 'book',
              'url' => 'contacto-suscripcion-adm.index'              
             ],

            
 
             
            
         ]
    ],

    [
      'type' => 'tree',
      'text' => 'Selectores',
      'slug' => 'selectores',
      'ico'  => 'chevron-down',
      'children' => [
             [
              'type' => 'one',
              'text' => 'Tipos Denuncias',
              'ico'  => 'book',
              'url' => 'tipo-denuncia-adm.index'              
             ],

             [
              'type' => 'one',
              'text' => 'Sedes Denuncias',
              'ico'  => 'book',
              'url' => 'sede-denuncia-adm.index'              
             ],

             [
              'type' => 'one',
              'text' => 'Tipos Sugerencias',
              'ico'  => 'book',
              'url' => 'tipo-sugerencia-adm.index'              
             ],

            
            
         ]
    ],

    [
      'type' => 'simple',
      'text' => 'Diccionario',
      'slug' => 'diccionario',
      'url'  => 'diccionario.index',
      'ico'  => 'font'
    ]

    //======== DOS NIVELES ===============
    // [
    //   'type' => 'tree',
    //   'text' => 'Huella Sostenible',
    //   'ico'  => 'leaf',
    //   'children' => [
    //          [
    //            'type' => 'one',
    //            'text' => 'Sostenible',
    //            'url' => 'sostenible-adm.index'
    //          ],

    //          [
    //           'type' => 'two',
    //           'text' => 'Huellas',
    //           'ico'  => 'book',
    //           'children' => [

    //             [
    //               'type' => 'one',
    //               'text' => 'Huellas',
    //               'url' => 'huella-adm.index'
    //             ],

    //             [
    //               'type' => 'one',
    //               'text' => 'Bloque Dos',
    //               'url' => 'huellab2-adm.index'
    //             ],

    //           ]
    //         ],
            
    //      ]
    // ],


    // [
    //  'type' => 'tree',
    //  'text' => 'Settings',
    //  'ico'  => 'cog',
    //  'children' => [
    //         [
    //           'type' => 'one',
    //           'text' => 'Seo',
    //           'url' => 'seo.index'
    //         ],

    //         [
    //           'type' => 'one',
    //           'text' => 'Redirecciones',
    //           'url' => 'redirecciones.index'
    //         ]
    //     ]
    // ],
        

	]
]
?>