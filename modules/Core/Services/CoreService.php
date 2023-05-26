<?php

namespace Modules\Core\Services;

use Illuminate\Support\Facades\File;
use Nwidart\Modules\Facades\Module;

class CoreService
{
    public $moduleInstance;

    public function __construct()
    {
        $this->moduleInstance = Module::find('core');
    }

    public function getDataTableTranslation($local)
    {
        return $this->moduleInstance->getExtraPath("Resources/lang/{$local}/datatable.json");
    }
}