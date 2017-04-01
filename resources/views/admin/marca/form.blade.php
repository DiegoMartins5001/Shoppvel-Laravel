@extends('layouts.admin')

@section('conteudo')

<div class="panel panel-default ">
  	<div class="panel-heading">
    	<h3 class="panel-title">Nova Marca</h3>
  	</div>
  	<div class="panel-body">
  		@if(Session::has('mensagem_sucesso'))
			{!! 'OK' !!}
  		@endif
		<div class="form-group">
			@if(Request::is('*/editar'))
				<h3>Editar Marca {!! $marca->nome !!}</h3>
				{!! Form::model($marca, ['method'=>'PATCH', 'url'=>'admin/marca/atualizar/'.$marca->id]) !!}
			@else
				{!! Form::open(['route' => 'admin.marca.salvar', 'class'=>'form-horizontal']) !!}
			@endif

					{!! Form::label('nome', 'Marca', ['class'=>'input-group']) !!}
					{!! Form::input('text', 'nome', null, ['class'=>'form-control', 'autofocus', 'placeholder'=>'Nome']) !!}
					</br>
					{!! Form::submit('Salvar', ['class'=>'salvar' ]) !!}

				{!! Form::close() !!}
		</div>	
	</div>
</div>

@stop
	