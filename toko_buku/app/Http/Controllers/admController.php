<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Models\admin_notification;
use App\Models\admin;
use App\Models\book_category_detail;
use App\Models\book_category;
use App\Models\book_image;
use App\Models\book_review;
use App\Models\book;
use App\Models\cart;
use App\Models\courier;
use App\Models\discount;
use App\Models\response;
use App\Models\transaction_detail;
use App\Models\transaction;
use App\Models\user_notification;
use App\Models\User;

class admController extends Controller
{
    public function login()
    {
        return view('adm-login');
    }

    public function login_auth(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = admin::where('username', '=', $request->username)->first();
        if ($admin) {
            $pass = Hash::check($request->password, $admin->password);
        } else {
            $pass = null;
        }
        if ($admin && $pass) {
            $auth = Auth::guard('admin');
            if ($auth instanceof \Illuminate\Contracts\Auth\StatefulGuard) {
                if ($auth->attempt($request->only('username', 'password'))) {
                    $request->session()->regenerate();
                    return redirect()->intended('/adm/beranda');
                } else {
                    return redirect()->back()->with(['error' => 'Login Gagal']);
                }
            }
        }
        return redirect()->back()->with(['error' => 'Login Gagal']);
    }

    public function register()
    {
        return view('adm-register');
    }

    public function register_submit(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:admins',
            'nama' => 'required|min:3|max:30',
            'phone' => 'required|digits_between:0,9|min:3|max:15',
            'password' => 'required|min:8|max:20',
            'konfirmasi' => 'required|min:8|max:20'
        ]);

        if ($request->password == $request->konfirmasi) {
            $admin_data = array(
                'username' => $request->username,
                'password' => $request->password,
                'name' => $request->nama,
                'phone' => $request->phone
            );
            $admin_data['password'] = Hash::make($admin_data['password']);
            admin::create($admin_data);
            return redirect()->route('adm-register')->with(['success' => 'Berhasil Register']);
        } else {
            return redirect()->back()->with(['error' => 'Password Dan Konfirmasi Tidak Sesuai']);
        }
    }

    public function beranda()
    {
        return view('beranda');
    }

    public function logout(Request $request)
    {
        $auth = Auth::guard('admin');
        if ($auth instanceof \Illuminate\Contracts\Auth\StatefulGuard) {
            $auth->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('landing');
        }
    }
}
