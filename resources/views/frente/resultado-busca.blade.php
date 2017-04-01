@extends('layouts.frente-loja')

@section('conteudo')
<div class='col-sm-12'>
    <div class="page-header text-muted">
        {{$produtos->total()}} encontrado(s) com o termo de busca 
        <span class="label label-info">{{$termo}}</span>
    </div>
</div>

<div class="col-sm-12 text-center">
    {!! $produtos->appends(['termo-pesquisa' => $termo])->links() !!}
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Imagem</th>
            <th>Produto</th>
            <th class="text-right">Valor Unitário</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtos as $produto)

        <tr>
            <td>
                <img src="{{route('imagem.file',$produto->imagem_nome)}}" alt="{{$produto->imagem_nome}}" style="width:150px;" >
            </td>
            <td>
                <!-- mudado a roda de produto.produto-detalhes -->
                <a href="{{route('produto.detalhes', $produto->id)}}">
                    {{$produto->nome}}
                </a>
            </td>
            <td class="text-right">
                {{$produto->preco_venda}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="col-sm-12 text-center">
    {!! $produtos->links() !!}
</div>
@stop