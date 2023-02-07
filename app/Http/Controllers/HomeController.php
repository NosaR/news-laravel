<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function handleSuperAdmin()
    {
        return view('dapur.super-admin.index');
    }

    public function handleChiefEditor()
    {
        return view('dapur.chief-editor.index');
    }

    public function handleEditor()
    {
        return view('dapur.editor.index');
    }

    public function handleAdsEditor()
    {
        return view('dapur.ads-editor.index');
    }

    public function handleAuthor()
    {
        return view('dapur.author.index');
    }

    public function userRegister()
    {
        return view('register.index');
    }
}
