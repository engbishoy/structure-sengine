<?php

use Nwidart\Modules\Facades\Module;


if(!function_exists('_dt_btn_factory')){
    function _dt_btn_factory($options){
        $defaultKeys = [
            'action'      => '',
            'actionType'  => '',
            'actionMethod'  => '',
            'url'         => '',
            'groupAction' => 'false',
            'title'       => '',
            'icon'        => '',
            'classes'     => '',
            'conditions'    => '',
            'tooltip' => [
                'disabled' => false,
                'placement' => '',
                'color' => ''
            ],
            'alertOptions' => [
                'title' => '',
                'icon' => '',
                'showCancelButton' => '',
                'buttonsStyling' => '',
                'confirmButtonText' => '',
                'confirmButtonClasses' => '',
                'cancelButtonText' => '',
                'confirmButtonClasses' => '',
            ]
        ];
        return array_merge($defaultKeys, $options);
    }
}

if(!function_exists('_generate_theme_menu')){
    function _generate_theme_menu($theme, $menuModel){
        $menu_key = 'back_menus';
        if($theme == 'back'){
            $menuModel::destroy($menuModel::backThemeItems()->get());
            $menuModel::create([
                'type' => 'back',
                'title' => 'Dashboard',
                'route' => 'dashboard',
                'order' => 0,
                'icon' => 'fas fa-tachometer-fast'
            ]);
        }elseif($theme == 'front'){
            $menu_key = 'front_menus';
            $menuModel::destroy($menuModel::frontThemeItems()->get());
        }else {
            throw new Exception('theme specified does not exist');
        }
        foreach (Module::all() as $module) {
            if(config()->has($module->getLowerName(). '.menus.' . $menu_key)){
                foreach (config($module->getLowerName(). '.menus.'. $menu_key) as $resourceKey => $value) {
                    try {
                        $menu = new $menuModel;
                        $menu->type = $theme == 'back' ? 'back' : 'front';
                        $menu->title = config($module->getLowerName(). '.menus.'. $menu_key . '.' . $resourceKey . '.title');
                        $menu->icon = config($module->getLowerName(). '.menus.'. $menu_key . '.' . $resourceKey . '.icon');
                        $menu->order = config($module->getLowerName(). '.menus.'. $menu_key . '.' . $resourceKey . '.order');
                        if(config()->has($module->getLowerName(). '.menus.'. $menu_key. '.' . $resourceKey . '.sub_menu')){
                            $sub_menu = [];
                            $active_routes = [];
                            foreach (config($module->getLowerName(). '.menus.' .$menu_key. '.' . $resourceKey . '.sub_menu') as $key => $value) {
                                $item = [];
                                $item['title'] = config($module->getLowerName(). '.menus.'. $menu_key . '.' . $resourceKey . '.sub_menu.' . $key . '.title');
                                $item['route'] = config($module->getLowerName(). '.menus.'. $menu_key . '.' . $resourceKey . '.sub_menu.' . $key . '.route');
                                array_push($sub_menu, $item);
                                array_push($active_routes, config($module->getLowerName(). '.menus.'. $menu_key . '.' . $resourceKey . '.sub_menu.' . $key . '.route'));
                            }
                        }
                        if(isset($sub_menu)){
                            $menu->sub_menu = $sub_menu;
                            
                            if(isset($active_routes)){
                            $menu->active_routes = $active_routes;
                            }
                        }
                        $menu->save();
                    } catch (\Throwable $th) {
                        throw $th;
                    }
                }
            }
        
        }
    }
}
