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
                      'text' => 'Colaboradores',
                      'url' => 'colaborador-adm.index',
                    ]
                ]
        ];
}

return[

	'menu' => [
    $menu_array,
    [
      'type' => 'tree',
      'text' => 'Data General',
      'slug' => 'data-general',
      'ico'  => 'list',
      'children' => [
              [
                'type' => 'one',
                'text' => 'Oficina',
                'url' => 'oficina-adm.index',
              ],

              [
                'type' => 'one',
                'text' => 'Sedes',
                'url' => 'sede-adm.index',
              ],
              [
                'type' => 'one',
                'text' => 'Cargos Laborales',
                'url' => 'cargoLaboral-adm.index',
              ],
              [
                'type' => 'one',
                'text' => 'Equipos',
                'url' => 'equipo-adm.index',
              ],
              [
                'type' => 'one',
                'text' => 'Categoria Equipos',
                'url' => 'categoriaEquipo-adm.index',
              ],
              [
                'type' => 'one',
                'text' => 'Componentes',
                'url' => 'componente-adm.index',
              ],
              [
                'type' => 'one',
                'text' => 'Categoria Componentes',
                'url' => 'categoriaComponente-adm.index',
              ],
              ]
    ],
    [
      'type' => 'tree',
      'text' => 'Acciones',
      'slug' => 'usuario',
      'ico'  => 'briefcase',
      'children' => [
              [
                'type' => 'one',
                'text' => 'Asignar Oficina Colaborador',
                'url' => 'oficinaTrabajador-adm.index',
              ],

              [
                'type' => 'one',
                'text' => 'Asignar Equipo Colaborador',
                'url' => 'ofiTrabajadorEquipo-adm.index',
              ]
              ,
              [
                'type' => 'one',
                'text' => 'Mantenimiento a Equipos',
                'url' => 'mantenimiento-adm.index',
              ]
          ]
    ], 
    [
      'type' => 'tree',
      'text' => 'Solicitudes',
      'slug' => 'usuario',
      'ico'  => 'globe',
      'children' => [
              [
                'type' => 'one',
                'text' => 'Categorias',
                'url' => 'solicitudes-adm.index',
              ],

              [
                'type' => 'one',
                'text' => 'Recibidos',
                'url' => 'SolOficinaEquipoTrab-adm.index',
              ]
          ]
    ],
    [
      'type' => 'simple',
      'text' => 'Cargo Laboral',
      'slug' => 'cargo-laboral',
      'url'  => 'oficinaTrabajador-adm.index',
      'ico'  => 'briefcase'
    ],
    [
      'type' => 'simple',
      'text' => 'Solicitudes',
      'slug' => 'solOfiEquiTrU',
      'url'  => 'SolOficinaEquipoTrabUser-adm.index',
      'ico'  => 'book'
    ],

	]
]
?>