@extends('layouts.admin')

@section('conteudo')

<div class="panel panel-default ">
  	<div class="panel-heading">
    	<h3 class="panel-title">Lista de Categoria</h3>
  	</div>
  	<div class="panel-body">
  	@if(Session::has('mensagem_sucesso'))
		{!! 'OK' !!}
  	@endif
	  	<table class="table table-hover table-striped">
		    <caption> 
		        <a href="{{ route('admin.categoria.criar') }}" class="novo">
		            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nova Categoria 
		        </a></br></br>
		    </caption>
		    		<th>id</th>
		            <th>Nome</th>
		            <th>Categoria Principal</th>
		            <th>Ações</th>
		        </tr>
		    </thead>
		    <tbody>
		    @foreach($listcategorias as $cat)
		    <tr>
		        <td>{{$cat->id}}</td>
		        <td>{{$cat->nome}}</td>
		        <td>{{is_null($cat->categoria_id) ? "" : $cat->pai->nome}}</td>
		        
		        <td>
		            <a href="{{ url('admin/categoria/'.$cat->id . '/editar') }}" class="editar">
		                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> editar 
		            </a>
		            <a href="{{ url('admin/categoria/'.$cat->id . '/excluir') }}" class="excluir">
		                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> excluir 
		            </a>
		        </td>
		    </tr>
		    @endforeach
		    </tbody>
		</table>

	</div>
</div>

@stop