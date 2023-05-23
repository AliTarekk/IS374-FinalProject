<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(null !== Auth::user()){
            $role = Auth::user()->role;
            // if($role == '1'){
                return view('layouts.admin');
            // }
        }
        else{
            return view('home');
        }
        //     else {
        //         return view('index', ['newest' => Products::all()->sortByDesc('created_at')->take(8)]);
        //     }
        // }
        // else{
        //     return view('index', ['newest' => Products::all()->sortByDesc('created_at')->take(8)]);
        // }
    }
    }
