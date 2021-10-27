<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function lte()
    {
        return view('lte');
    }
    public function veiculos()
    {
        return view('veiculos');
    }

    public function aluno()
    {
        return view('aluno');
    }

    public function teste(Request $request)
    {
        $user = Auth::user();
        $path = $request->file('imagecnh')->store('cnh');
        dd($path);



    }

}
