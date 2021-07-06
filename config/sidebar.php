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
    ]    

	]
]
?>