<?php

use Illuminate\Support\Facades\Lang;

return [
    'name' => 'User',
    'menus' => [
        'back_menus' => [ // support many menus per module
            'user' => [
                'title' => Lang::get('user::menus.main_title'),
                'icon' => 'fas fa-user-shield',
                'order' => 5,
                'sub_menu' => [
                    'item_1' => [
                        'title' => Lang::get('user::menus.sub_title_1'),
                        'route' => 'users.index',
                    ]
                ]
            ]
        ]
    ],

];
