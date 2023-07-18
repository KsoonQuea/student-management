<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index()
    {
        return view('admin.home');
    }
}
