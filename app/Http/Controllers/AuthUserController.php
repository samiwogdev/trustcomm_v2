<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\AuthUser;
use App\Models\RmRecord;
use Illuminate\Http\Request;
use Auth;
use GuzzleHttp\Client;


class AuthUserController extends Controller
{
    public function home()
    {
        return view('front_landing_view.index');
    }

    public function login(LoginRequest $request)
    {
        if ($request->isMethod('post')) {
            if (Auth::guard('authUser')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect('/dashboard');
            } else {
                return redirect()->back()->with("error_message", "Invalid username or password");
            }
        }

        return view('front_landing_view.index');
    }

    public function logout()
    {
        Auth::guard('authUser')->logout();
        return redirect()->route('home');
    }

    // public function login(Request $request)
    // {
    //     if ($request->isMethod('post')) {
    //         $data = $request->all();
    //         if (Auth::guard('authUser')->attempt(['email' => $data["email"], 'password' => $data["password"]])) {
    //             return redirect('/dashboard');
    //         } else {
    //             return redirect()->back()->with("error_message", "Invalid username or password");
    //         }
    //     }
    //     return view('front_landing_view.index');
    // }

}
