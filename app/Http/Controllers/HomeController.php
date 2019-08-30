<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct() {
        //$this->middleware('auth');
    }

    // password 0jn4uj2019

    public function index() {
        return view('home');
    }

    public function Sql(Request $request)
    {

        $input = $request->search;

        $results = DB::select(DB::raw("select * from sqls where `name` = '' or ''= '    ".$input."';"));

        return $results;
    }
    public function showLogin(){
        return view('auth.login');
    }

    public function loginUser(Request $request) {
        $email = $request->get('email');
        $password = $request->get('password');
        return response()->json(['email' => $email, 'password' => $password]);
    }
}
