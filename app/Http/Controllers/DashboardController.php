<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\AuthUser;
use App\Models\RmRecord;
use Illuminate\Http\Request;
use Auth;
use GuzzleHttp\Client;


class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::guard('authUser')->check()) {
            $rm_details = RmRecord::where('rm_email', auth('authUser')->user()->email)->first();
            return view('admin_view.rm_report.dashboard', compact('rm_details'));
        } else {
            return redirect()->route('home');
        }
    }
}
