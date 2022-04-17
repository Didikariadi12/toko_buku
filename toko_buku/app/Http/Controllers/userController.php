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

class userController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function logout(Request $request)
    {
        $auth = Auth::guard('user');
        if ($auth instanceof \Illuminate\Contracts\Auth\StatefulGuard) {
            $auth->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('landing');
        }
    }
}
