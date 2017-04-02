<?php

namespace Shoppvel\Http\Controllers;

use Illuminate\Http\Request;
use Shoppvel\Http\Requests;
use Shoppvel\Models\Produto;
use Shoppvel\Models\Marca;

class ProdutoController extends Controller {

    function getProdutoDetalhes($id) {
        $models['produto'] = Produto::find($id);
        return view('frente.produto-detalhes', $models);
    }

    function getBuscar(Request $request) {
        $this->validate($request, [
            'termo-pesquisa' => 'required|filled']
        );

        $termo = $request->get('termo-pesquisa');

        $produtos = Produto::where('nome', 'LIKE', '%' . $termo . '%')
                ->paginate(10);
        //$produtos->setPath('buscar/'.$termo);
        $models['produtos'] = $produtos;
        $models['termo'] = $termo;
        return view('frente.resultado-busca', $models);
    }
    function listar() {
        $models['produtos'] = Produto::paginate(20);
        //dd($models);
            return view('admin.produto.listar', $models);
        }
    
    function criar() {
        $models['marcas'] = Marca::all();
            return view('admin.produto.form', $models);

        }
    
    function salvar(Produto $produto, Request $request) {
        $request['preco_venda'] = str_replace(',','', $request['preco_venda']);
        $salvar = '';
        if ($request->has('id')){
            $salvar = ','.$request->get('id').',id';
        } 
        $this->validate($request, [
            'nome' => 'required|min:4|unique:produtos,nome'.$salvar.''
        ]);
        $this->validate($request, [
            'preco_venda' => 'numeric|required'
        ]);
        $this->validate($request,[
            'categoria_id'=>'required',
            'marca_id'=>'required',
            'nome'=>'required',
            'descricao'=>'required',
            'qtde_estoque'=>'required|numeric',
            'avaliacao_qtde'=>'required|numeric',
            'avaliacao_total'=>'required|numeric',
            'imagem_nome'=>'required'
        ]);
        Produto::create($request->all());
        \Session::flash('mensagens-sucesso', 'Cadastrado com Sucesso');
            return redirect()->action('ProdutoController@listar')->with('mensagens-sucesso', 'Cadastrado com Sucesso!');
        }
    
    function editar($id) {
        $models['produto'] = Produto::find($id);
        $models['marcas'] = Marca::all();    
            return view('admin.produto.form', $models);
        }

    public function atualizar(Request $request, $id) {

        $data = $request->all();

        if(Produto::find($id)->update($data)){
           return redirect()->action('ProdutoController@listar')->with('mensagens-sucesso', 'Atualizado com Sucesso!');
       } else {
           return redirect()->back()
           ->with('mensagens-erro', 'Erro!!!')
           ->withInput();
       }

   }
   function excluir($id) {
        $models['produto'] = Produto::find($id);
            return view('admin.produto.excluir', $models);
        }
    
    function delete($id) {
        $models['produto'] = Produto::find($id)->delete();
        \Session::flash('mensagens-sucesso', 'Excluido com Sucesso');
            return redirect()->action('ProdutoController@listar');
        }

}
