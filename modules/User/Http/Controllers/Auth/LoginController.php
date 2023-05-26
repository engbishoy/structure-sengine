<?php

namespace Modules\User\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Modules\User\Entities\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Validation\ValidationException;
use Modules\User\Http\Requests\Auth\UserLoginRequest;

class LoginController extends Controller
{
  
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('user::auth.login');
    }

    public function login(UserLoginRequest $request){
        
        if( $auth=Auth::guard('dashboard')->attempt(['email'=> $request->email, 'password' => $request->password] )){
            
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }else{
            throw ValidationException::withMessages([
                'auth_failed' => __('auth.failed'),
            ]);
        
        }


    }

    /**
     * logout an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('dashboard')->logout();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
