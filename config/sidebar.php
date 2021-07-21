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
    [
      'type' => 'simple',
      'text' => 'Oficina',
      'slug' => 'oficina',
      'url'  => 'oficina-adm.index',
      'ico'  => 'home'
    ],
    [
      'type' => 'simple',
      'text' => 'Cargo Laboral',
      'slug' => 'cargo-laboral',
      'url'  => 'cargoLaboral-adm.index',
      'ico'  => 'briefcase'
    ],

    [
      'type' => 'simple',
      'text' => 'Sedes',
      'slug' => 'sede',
      'url'  => 'sede-adm.index',
      'ico'  => 'globe'
    ]  ,

    [
      'type' => 'simple',
      'text' => 'Equipos',
      'slug' => 'equipo',
      'url'  => 'equipo-adm.index',
      'ico'  => 'list'
    ]  ,
    [
      'type' => 'simple',
      'text' => 'Categoria Equipo',
      'slug' => 'categoria-equipo',
      'url'  => 'categoriaEquipo-adm.index',
      'ico'  => 'briefcase'
    ]

	]
]
?>