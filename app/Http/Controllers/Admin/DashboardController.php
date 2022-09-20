<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('TwoFa');
    }

    public function index($guard){
        return view('admin.home');
    }
}
