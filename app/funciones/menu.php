<?php

function menu($modulo)
{
    $_dashboard = false;
    $perfil = false;
    $_configuracion = false;
    $usuarios = false;
    $_root = false;
    $prueba = false;

    switch($modulo){

        case "perfil":
            $_dashboard = true;
            $perfil = true;
            break;
         case "usuarios":
                $_configuracion = true;
                $usuarios = true;
                break;
                case "prueba":
                    $_root = true;
                    $prueba = true;
                    break;
                   
    }



    $menu = [
        [
            'titulo' => "Menu",
            'menu' => [
                'modulo' => "Dashboard",
                'icono' => '<i class="fa fa-fw fa-user-circle"></i>',
                'active' => $_dashboard,
                'submenu' => [
                    [
                        'nombre' => "Perfil",
                        'url' => "dashboard/perfil",
                        'icono' => null,
                        'active' => $perfil
                    ]
                ]
            ]

        ],
        [
            'titulo' => "Administrador",
            'menu' => [
                'modulo' => "Configuraciòn",
                'icono' => '<i class="fas fa-cog"></i>',
                'active' => $_configuracion,
                'submenu' => [
                    [
                        'nombre' => "Usuarios",
                        'url' => "dashboard/user",
                        'icono' => null,
                        'active' => $usuarios
                    ]

                ]
            ]

                    ],
                    [
                        'titulo' => 'ROOT',
                        'menu' => [
                            'modulo' => "TEST",
                            'icono' => '<i class="fa fa-fw fa-user-circle"></i>',
                            'active' => $_root,
                            'submenu' => [
                                [
                                    'nombre' => "Prueba",
                                    'url' => "dashboard/prueba",
                                    'icono' => null,
                                    'active' => $prueba
                                ]
                            ]
                        ]
            
                    ],

    ];
    return $menu;
}
