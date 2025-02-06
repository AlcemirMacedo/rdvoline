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

            foreach($sql as $item){
                $id = $item->id;
                $nome_func = $item->nome_funcionario;
            }
            return redirect('/form2')->with('id', $id);

            // return view('form2/'.$id)->with([
            //     'id' => $id,
            //     'nome' => $nome_func,
            // ]);

        } catch (\Throwable $th) {
            dd($th); // Depurando a exceção
            return 'erro';
        }
    }

    public function viewForm2(){
        // $sql = DB::select('select r.id, r.via, r.data_viagem, r.justificativa, f.nome_funcionario, f.contato_funcionario, i.id, i.descricao, i.valor, i.quantidade, i.valor_total from rdvs r left join tb_funcionarios f on f.id_funcionario = r.id_funcionario_fk left join itens_rdvs i on i.rdv_id = r.id where r.id = ?', [$id]);

        // foreach($sql as $item){
        //     $id_rdv = $item->id;
        //     $data = $item->data_viagem;
        //     $justificativa = $item->justificativa;
        //     $equipe = $item->justificativa;
        //     $via = $item->via;
        // }
        return view('form2');
    }
}
