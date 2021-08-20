<?php

return [
    //MainController
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'main/index/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'auction/{id:\w+}' => [
        'controller' => 'main',
        'action' => 'auction',
    ],
//
//   'auction' => [
//        'controller' => 'main',
//        'action' => 'view',
//       ],
    //AccountController
    'account/login' => [
        'controller' => 'account',
        'action' => 'login',
    ],
    'account/logout' => [
        'controller' => 'account',
        'action' => 'logout',
    ],
    'account/profile' => [
        'controller' => 'account',
        'action' => 'profile',
    ],
    'account/add' => [
        'controller' => 'account',
        'action' => 'add',
    ],
    'account/register' => [
        'controller' => 'account',
        'action' => 'register',
    ],
    'account/recovery' => [
        'controller' => 'account',
        'action' => 'recovery',
    ],
//    'account/confirm/{token:\w+}' => [
//        'controller' => 'account',
//        'action' => 'confirm',
//    ],
//    'add' => [
//        'controller' => 'user',
//        'action' => 'add',
//    ],
//    'edit' => [
//        'controller' => 'user',
//        'action' => 'edit',
//    ],
//    'delete' => [
//        'controller' => 'user',
//        'action' => 'delete',
//    ],
    //AdminController
//    'admin/panel' => [
//        'controller' => 'admin',
//        'action' => 'panel',
//    ],
//    'admin/login' => [
//        'controller' => 'admin',
//        'action' => 'login',
//    ],
//    'admin/logout' => [
//        'controller' => 'admin',
//        'action' => 'logout',
//    ],
//    'admin/add' => [
//        'controller' => 'admin',
//        'action' => 'add',
//    ],
//    'admin/edit' => [
//        'controller' => 'admin',
//        'action' => 'edit',
//    ],
//    'admin/delete' => [
//        'controller' => 'admin',
//        'action' => 'delete',
//    ],
];