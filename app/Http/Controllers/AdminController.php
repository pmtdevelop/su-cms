<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return view('admin/welcome');
    }
    public function index(){
        return view('admin.dashboard.dashboard');
    }
    public function login(){
        return view('admin.login.login');
    }

}
