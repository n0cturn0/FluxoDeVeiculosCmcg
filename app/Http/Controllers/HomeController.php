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
        //Get Ano vigente
        $ano = DB::table('controleconfig')->where('status','=', 1)->get();
        foreach ($ano as  $value) { $ano_vigente = $value->ano; $ano_extensao = $value->anoext; }
        //DB
        $proprietario = DB::table('prop')->where('userid', '=', $user->id)->where('ano', '=', $ano_vigente)->first();
        $veiculo = DB::table('veiculos')->where('userid', '=', $user->id)->where('ano', '=', $ano_vigente)->first();
        $aluno = DB::table('aluno')->where('userid', '=', $user->id)->where('ano', '=', $ano_vigente)->first();
        //Se existe registro
          if (is_null($proprietario)){ $status_proprietario = 5; } else { $status_proprietario = $proprietario->status; }
          if (is_null($veiculo )){ $status_veiculo = 5; } else { $status_veiculo = $veiculo->status; }
          if (is_null($aluno )){ $status_aluno = 5; } else { $status_aluno = $aluno->status; }
        //array to view
        $data =['status' => $status_proprietario, 'status_veiculo' => $status_veiculo,'status_aluno' => $status_aluno, 'ano_ext' => $value->anoext ];
        return view('home',  $data);


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

        //Get Ano vigente
        $ano = DB::table('controleconfig')->where('status','=', 1)->get();
        foreach ($ano as  $value) { $ano_vigente = $value->ano; }
        DB::table('prop')->insert([
            'userid'            => $user->id,
            'proprietario'      => $request->proprietario,
            'cpf'               => $request->cpf,
            'telefone'          => $request->telefone,
            'fotoname'          => $request->file('imagecnh'),
            'datavalidade'      => $request->datadevalidade,
            'status'            => 0,
            'ano'               => $ano_vigente
        ]);
        return redirect('home');
    }

    public function inserir_veiculo(Request $request)
    {
        $ano = DB::table('controleconfig')->where('status','=', 1)->get();
        foreach ($ano as  $value) { $ano_vigente = $value->ano; }
        $user = Auth::user();
        DB::table('veiculos')->insert([
            'userid'            => $user->id,
            'marca'             => $request->marca,
            'modelo'            => $request->modelo,
            'anodefabricacao'   => $request->anofabricacao,
            'cor'               => $request->cor,
            'documentoveiculo'  => $request->docveiculo,
            'status'            => 0,
            'observacao'        => 0,
            'ano'               => $ano_vigente
        ]);
        return redirect('home');
    }

    public function insere_aluno(Request $request){
        $user = Auth::user();
        DB::table('veiculos')->insert([
            'userid'            => $user->id,
            'nomedeguerra'      => $request->nomedeguerra,
            'nomealuno'         => $request->nomealuno,
            'numerodoaluno'     => $request->numerodoaluno,
            'status'            => 0,
            'ano'               => 10
        ]);

    }






}
