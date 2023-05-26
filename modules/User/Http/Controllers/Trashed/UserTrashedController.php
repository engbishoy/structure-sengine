<?php

namespace Modules\User\Http\Controllers\Trashed;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Lang;
use Modules\User\Entities\User;
use Modules\Core\Http\Controllers\AppController;

class UserTrashedController extends AppController
{

    public function destroy($id)
    {
        User::withTrashed()->findOrFail($id)->forceDelete();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-hard-deleted-row')], 200);
    }

    public function destroyMany(Request $request)
    {
        User::withTrashed()->whereIn('id',$request->ids)->forceDelete();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-hard-deleted-rows')],200);
    }

    public function restore($id)
    {
        User::withTrashed()->findOrFail($id)->restore();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-restored-row')], 200);
    }

    public function restoreMany(Request $request)
    {
        User::withTrashed()->whereIn('id',$request->ids)->restore();
        return response()->json(['message' => Lang::get('core::global.toastr.toastr-restored-rows')],200);
    }
}
