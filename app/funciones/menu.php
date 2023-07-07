<?php

function menu()
{
    $menu = [
        [
            'titulo' => "Menu",
            'menu' => [
                'modulo' => "Dashboard",
                'icono' => '<i class="fa fa-fw fa-user-circle"></i>',
                'submenu' => [
                    [
                        'nombre' => "perfil",
                        'url' => "www.google.com",
                        'icono' => null,
                    ],

                    [
                        'nombre' => "prueba",
                        'url' => "www.google.com",
                        'icono' => null,
                    ]
                ]
            ]

        ],
        [
            'titulo' => "Administrador",
            'menu' => [
                'modulo' => "Configuraciòn",
                'icono' => '<i class="fas fa-cog"></i>',
                'submenu' => [
                    [
                        'nombre' => "Usuarios",
                        'url' => "www.google.com",
                        'icono' => null,
                    ]

                ]
            ]

        ]

    ];
    return $menu;
}
