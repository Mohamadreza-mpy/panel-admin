<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public  function authLogin(Request $request)
    {

        $input = $request->except('_token');

        $isLogin = Auth::attempt($input);

        if($isLogin)
        {
            return redirect()->route('admin.dashboard');
        }else
        {
            return  redirect()->back()->with('error', 'اطللاعات وارد شده درست نمیباشد');
        }

    }
}
