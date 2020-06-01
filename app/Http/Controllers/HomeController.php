<?php

namespace App\Http\Controllers;
use Str;
use Hash;
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
    public function refresh(Request $request) {
            $token = Str::random(60);
    
            $request->user()->forceFill([
                'api_token' => hash('sha256', $token),
            ])->save();
    
        return view('home', compact('token'));
    }
}
