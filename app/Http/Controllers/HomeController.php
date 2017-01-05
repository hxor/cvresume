<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $bread;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->bread = [
          'page-title' => 'Dashboard',
          'menu' => 'Home',
          'submenu' => 'Pages',
          'active' => 'Dashboard'
        ];
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bread = $this->bread;
        return view('home', compact('bread'));
    }
}
