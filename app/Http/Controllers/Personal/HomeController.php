<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use function view;

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
        $register_date = auth()->user()->created_at;
        return view('personal.home',compact('register_date'));
    }
}
