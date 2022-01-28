<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    public function index(){
        $all_baiviet = DB::table('tbl_baiviet')->limit(9)->get();
        return view('pages.home')->with('all_baiviet',$all_baiviet);
    } 
}
