<?php

namespace Modules\Core\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\View;

class AppController extends Controller
{
   protected $app_params;

   public function __construct()
   {
       $this->app_params['base_url'] = url('/');
       $this->app_params['current_url'] = url()->current();
       $this->app_params['error_occured'] = Lang::get('core::global.toastr.error_occured');
       $this->app_params['user_lang_code'] = Auth::check() ? Auth::user()->langcode : Lang::getLocale();
       $this->app_params['backtheme_plugin_path'] = '/themes/metro8/assets/plugins/';
       $this->app_params['dt_pagination'] = Lang::get('core::global.datatable.pagination');
       View::share('app_params', $this->app_params);
   }

   protected function setMessages($params){
       $this->app_params = array_merge($this->app_params,['messages' => $params]);
       View::share('app_params', $this->app_params);
   }

   protected function setAjaxParams($params){
        View::share('ajax_params', ['ajax_params' => $params]);
   }
}
