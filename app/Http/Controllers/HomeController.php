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
    public function index(Request $request)
    {
        //$request->session()->put(['edwin'=>'master instructor']);
        //global sessions
        //session(['peter'=>'student']);
        //echo $request->session()->get('edwin');
        //return $request->session()->all();
        //return view('home');
        //$request->session()->forget('edwin');
        //$request->session()->flush();
        //$request->session()->flash('message', 'Post has been created');
        $request->session()->reflash();
        $request->session()->keep('message');
        return $request->session()->get('message');
    }
}
