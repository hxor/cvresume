<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
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
        return view('main.backend.index', compact('bread'));
    }
}
