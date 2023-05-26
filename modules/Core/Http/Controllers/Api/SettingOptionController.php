<?php

namespace Modules\Core\Http\Controllers\Api;

use Illuminate\Http\Request;
use Modules\Core\Entities\Option;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\Core\Transformers\OptionResponse;
use Modules\Customer\Http\Controllers\Api\apiResponseTrait;

class SettingOptionController extends Controller
{

    use apiResponseTrait;
    
   public function index(){
    $option=Option::all();
           
    if($option){
        return $this->apiResponse(['setting'=>OptionResponse::collection($option)],'setting',200);
    }else{
        return $this->apiResponse(['setting'=>''],__('trans.No data available'),200);
    }

   }
}
