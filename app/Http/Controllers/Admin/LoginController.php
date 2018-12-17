<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    protected $path = '/TestAdmin/index';

    public function index()
    {
        return view('admin.login');
    }

    /**
     * @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        if (Auth::attempt(
            ['mobile' => $request->input('username'),
            'password' => $request->input('password')
        ]
        ))
        {
            return redirect()->intended($this->path);
        }

        throw ValidationException::withMessages(['password'=>'密码错误!']);

    }

    /**
     * @param Request $request
     * @description 退出登录
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function show($logout,Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect('/TestAdmin/Login');
    }
}
