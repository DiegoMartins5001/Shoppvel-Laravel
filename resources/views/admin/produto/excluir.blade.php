@extends('layouts.admin')

@section('conteudo')

	<link href="{{asset('bootstrap/css/mycss/menu.css')}}" rel="stylesheet">
	<div id="excluir">  
		@if(Request::is('*/excluir'))
			<h3 >Deseja relamente excluir a Produto {!! $produto->nome !!}</h3>
		@endif
	</div>
	
	{!! Form::open(['method'=>'DELETE', 'url'=>'/admin/produto/'.$produto->id.'/delete', 'style'=>'display: inline;']) !!}
	 	
	 	<button type="submit" class="excluir"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> <b>Excluir</b></button>

	{!! Form::close() !!}

@stop