<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller {
    public function login() { return view('pages.admin.login'); }
    public function dashboard() { return view('pages.admin.dashboard'); }
}

