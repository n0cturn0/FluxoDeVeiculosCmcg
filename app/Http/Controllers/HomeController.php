<?php

namespace App\Http\Controllers;

use App\Models\prop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
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
        $user = Auth::user();
        $proprietario = DB::table('prop')->where('userid', '=', $user->id)->first();






    return view('home', ['status' => $proprietario->status]);
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

    public function inserir(Request $request)
    {
        $user = Auth::user();
        //$path = $request->file('imagecnh')->store('cnh');

       // echo $request->proprietario;
       DB::table('prop')->insert([
            'userid'            => $user->id,
            'proprietario'      => $request->proprietario,
            'cpf'               => $request->cpf,
            'telefone'          => $request->telefone,
            'fotoname'          => $request->file('imagecnh'),
            'datavalidade'      => $request->datadevalidade,
            'status'            => 0,
            'ano'               => 10

        ]);

    }

}
