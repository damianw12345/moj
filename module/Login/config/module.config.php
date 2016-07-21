<?php

namespace Login;

use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;


return [
    'router' => [
        'routes' => [
            'login' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/login[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\LoginController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\LoginController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_map' => [
            'layout/layout'           => __DIR__ . '/../view/login/login/index.phtml',
            'login/index/index' => __DIR__ . '/../view/login/login/index.phtml',
            'error/404'               => __DIR__ . '/../view/login/login/index.phtml',
            'error'             => __DIR__ . '/../view/login/login/index.phtml',
        ],
        'template_path_stack' => [
            'login' => __DIR__ . '/../view',
        ],
    ],
];
