@extends('layouts.admin')

@section('conteudo')

<div class="panel panel-default ">
  	<div class="panel-heading">
    	<h3 class="panel-title">Lista de Produtos</h3>
  	</div>
  	<div class="panel-body">
  	@if(Session::has('mensagem_sucesso'))
		{!! 'OK' !!}
  	@endif
	  	<table class="table table-hover table-striped col-md-12">
		    <caption> 
		        <a href="{{ route('admin.produto.criar') }}" class="novo">
		            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Novo Produto 
		        </a></br></br>
		    </caption>
		            <th>Imagem</th>
		            <!--<th>id</th>-->
		            <th>Nome</th>
		            <th>Quantidade</th>
		            <th>Marca</th>
		            <th>Categoria</th>
		            <th>Valor</th>
		            <th>Avaliação</th>
		            <th>Ações</th>
		        </tr>
		    </thead>
		    <tbody>
		    @foreach($produtos as $prod)
		    <tr>
		        <td><img src="{{route('imagem.file',$prod->imagem_nome)}}" alt="{{$prod->imagem_nome}}" widht="70" height="70"></td>
		        <!--<td>{{$prod->id}}</td>-->
		        <td>{{$prod->nome}}</td>
		        <td>{{$prod->qtde_estoque}}</td>
		        <td>{{$prod->marca->nome}}</td>
		        <td>{{$prod->categoria->nome}}</td>
		        <td>{{'R$' .number_format($prod->preco_venda, 2, ',', '.')}}</td>
		        <td>{{$prod->avaliacao_qtde}}</td>
		        
		        <td class="col-md-3">
		            <a href="{{ url('admin/produto/'.$prod->id . '/editar') }}" class="editar">
		                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> <b>Editar</b></a></br></br>
		            <a href="{{ url('admin/produto/'.$prod->id . '/excluir') }}" class="excluir">
		                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> <b>Excluir</b></a>
		        </td>
		    </tr>
		    @endforeach
		    </tbody>
		</table>
		{{$produtos->links()}}

	</div>
</div>

@stop