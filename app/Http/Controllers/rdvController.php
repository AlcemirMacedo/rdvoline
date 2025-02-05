<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class rdvController extends Controller
{
    public function rdvView(){

        $sql = DB::select('select * from rdvs join tb_funcionarios on id_funcionario = id_funcionario_fk order by id desc');

        return view('rdv')->with('sql', $sql);
    }

    public function form1Rdv(){
        $sql = DB::select('select * from tb_funcionarios');
        return view('form1')->with('sql', $sql);
    }

    // public function salvarResponsavel(Request $request){

    //     try {
    //         DB::insert('insert into rdvs values (null,?,?,?,?,?,?,null)', [
    //             $request->responsavel,
    //             $request->data,
    //             $request->justificativa,
    //             $request->equipe,
    //             $request->via,
    //             date('Y-m-d H:i:s'),
    //         ]);

    //         $sql = DB::select('select * from rdvs join tb_funcionarios on id_funcionario = id_funcionario_fk where id_funcionario = ?',
    //             $request->responsavel
    //         );

    //         return redirect('/form2Rdv', compact('sql'));

    //     } catch (\Throwable $th) {
    //         return 'erro';
    //     }

    // }

    public function salvarResponsavel(Request $request) {
        try {
            DB::insert('insert into rdvs values (null, ?, ?, ?, ?, ?, ?, null)', [
                $request->responsavel,
                $request->data,
                $request->justificativa,
                $request->equipe,
                $request->via,
                date('Y-m-d H:i:s'),
            ]);

            $sql = DB::select('select * from rdvs join tb_funcionarios on id_funcionario = id_funcionario_fk where id_funcionario = ?', [
                $request->responsavel
            ]);

            return redirect('/form2Rdv')->with(compact('sql'));

        } catch (\Throwable $th) {
            dd($th); // Depurando a exceção
            return 'erro';
        }
    }
    public function viewForm2(){
        return view('form2');
    }
}
