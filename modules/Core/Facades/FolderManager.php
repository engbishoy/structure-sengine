<?php

namespace Modules\Core\Facades;

use Exception;
use Illuminate\Support\Facades\File;
use Nwidart\Modules\Facades\Module;

class FolderManager extends \Illuminate\Support\Facades\Facade
{

    public static function moduleExists(string $moduleName)
    {
        return File::exists(Module::getModulePath($moduleName));
    }

    public static function generateModuleDirectories(string $moduleName)
    {
        $modulePath = Module::getModulePath($moduleName);
        File::makeDirectory($modulePath . '/Http/Controllers/Api', $mode = 0755, true, true);
        File::makeDirectory($modulePath . '/Http/Requests/Api', $mode = 0755, true, true);
        File::makeDirectory($modulePath . '/Entities/Traits', $mode = 0755, true, true);
        File::makeDirectory($modulePath . '/Rules', $mode = 0755, true, true);
    }

    public static function generateModuleAssets(string $moduleName){
        $modulePath = Module::getModulePath($moduleName);
        File::copyDirectory($modulePath. '/Resources/assets', public_path() . config('core.theme.modules_path') . $moduleName);        
    }

    public static function publishConfig(string $moduleName, string $folder = null){
        $modulePath = Module::getModulePath($moduleName);
        if($folder){
            File::copy($modulePath. '/Config/' . $folder, base_path() . '/config/' . $folder);
        }else{
            File::copyDirectory($modulePath. '/Config', base_path() . '/config');  
        }
    }

    public static function generateModuleTenantFiles(string $moduleName){
        if(!File::exists(Module::getModulePath('Tenancy'))){
            throw new \Exception('Module Tenancy not found, make sure you import it');
        }
        $modulePath = Module::getModulePath($moduleName);
        File::makeDirectory($modulePath . '/Database/Migrations/tenancy', $mode = 0755, true, true);
        $pathToTenantRoute = Module::getModulePath($moduleName) . '/Routes/tenant.php';
        File::copy(
            Module::getModulePath('Tenancy') . '/Routes/tenant.template.php',
            $pathToTenantRoute
        );
        FolderManager::replaceStringinFile($pathToTenantRoute,'module',strtolower($moduleName));
        $pathToRouteServiceProvider = Module::getModulePath($moduleName) . '/Providers/RouteServiceProvider.php';
        File::copy(
            Module::getModulePath('Tenancy') . '/Providers/RouteServiceProvider.template.php',
            $pathToRouteServiceProvider
        );
        FolderManager::replaceStringinFile($pathToRouteServiceProvider,'Tenancy',ucfirst($moduleName));
    }


    public static function generateThemeDirectories()
    {
        File::makeDirectory( public_path() . config('core.theme.css_path'), $mode = 0755, true, true);
        File::makeDirectory( public_path() . config('core.theme.js_path'), $mode = 0755, true, true);
        File::makeDirectory( public_path() . config('core.theme.font_path'), $mode = 0755, true, true);
        File::makeDirectory( public_path() . config('core.theme.img_path'), $mode = 0755, true, true);
        File::makeDirectory( public_path() . config('core.theme.plugin_path'), $mode = 0755, true, true);
        File::makeDirectory( public_path() . config('core.theme.views_path') . 'layout/base', $mode = 0755, true, true);
        File::makeDirectory( public_path() . config('core.theme.views_path') . 'layout/partials', $mode = 0755, true, true);
        File::makeDirectory( public_path() . config('core.theme.views_path') . 'pages', $mode = 0755, true, true);
    }
    
    public static function replaceStringinFile(string $path, string $old, string $new)
    {
        $file_contents = $file_contents = file_get_contents($path);
        $file_contents = str_replace($old,$new,$file_contents);
        file_put_contents($path,$file_contents);
    }
}