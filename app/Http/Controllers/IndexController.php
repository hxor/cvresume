<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
// use App\Models\Profile;
// use App\Models\Education;
// use App\Models\Experience;

class IndexController extends Controller
{
    public function index(){
    	$pro = DB::table('profiles')->first();
    	$edu = DB::table('education')->orderBy('time', 'asc')->get();
    	$exp = DB::table('experiences')->orderBy('time', 'asc')->get();
    	$port = DB::table('portfolios')->get();
    	$testi = DB::table('testimonials')->get();

    	return view('main.frontend.index', compact('pro', 'edu', 'exp', 'port', 'testi'));
    }

    public function getPortfolio($id){
    	return DB::table('portfolios')->where('id', $id)->get();
    }
}
