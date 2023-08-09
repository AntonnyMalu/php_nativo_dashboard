<?php

function menu($modulo)
{
    $_dashboard = false;
    $_tecnologia = false;
    $oficios = false;
    $perfil = false;
    $_configuracion = false;
    $usuarios = false;
    $_root = false;
    $prueba = false;
    $parametros = false;
    $oficios = false;

    switch ($modulo) {

        case "perfil":
            $_dashboard = true;
            $perfil = true;
            break;

        case "usuarios":
            $_configuracion = true;
            $usuarios = true;
            break;
        case 'parametros':
            $_configuracion = true;
            $parametros = true;
            break;
        case "prueba":
            $_root = true;
            $prueba = true;
            break;

        case "oficios":
            $_tecnologia = true;
            $oficios = true;
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
            'titulo' => "tecnologia",
            'menu' => [
                'modulo' => "Equipos",
                'icono' => '<i class="fa fa-fw fa-desktop"></i>',
                'active' => $_tecnologia,
                'submenu' => [
                    [
                        'nombre' => "Oficios",
                        'url' => "dashboard/oficios",
                        'icono' => '<i class="fas fa-file-alt"></i>',
                        'active' => $oficios
                    ]
                ]
            ]
        ],

        [
            'titulo' => "Administrador",
            'menu' => [
                'modulo' => "Configuración",
                'icono' => '<i class="fas fa-cog"></i>',
                'active' => $_configuracion,
                'submenu' => [
                    [
                        'nombre' => "Usuarios",
                        'url' => "dashboard/user",
                        'icono' => null,
                        'active' => $usuarios,
                    ],

                    [
                        'nombre' => "Parametros",
                        'url' => "dashboard/parametros",
                        'icono' => null,
                        'active' => $parametros
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
