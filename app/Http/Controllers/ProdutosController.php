<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function listarTodos(){
        $produtos = DB::table('produtos')->distinct()->get();
        return $produtos;
    }

    public function criarProduto(Request $request){
        $data = $request->all();
        $produto = DB::table('produtos')->insert($data);
        return response(
            "O produto foi criado com sucesso", 200
        );
    }

    public function atualizarProduto(Request $request, string $id){
        $produto = DB::table('produtos')->where('id', $id)->first();
        if ($produto === null) {
            return response(
                "O produto com ID {$id} não existe.", 404
            );
        }

        $data = $request->all();
        $produto = DB::table('produtos')->where('id', $id)->update($data);
        return response(
                "produto atualizado com sucesso", 202
            );
    }

    public function deletarProduto(Request $request, string $id){
        $produto = DB::table('produtos')->where('id', $id)->first();
        if ($produto === null) {
            return response(
                "produto com ID {$id} não foi encontrado.", 404
            );
        }
        DB::table('produtos')->where('id', $id)->delete();
        return response(
            "Produto deletado com sucesso", 202
        );
    }
}
