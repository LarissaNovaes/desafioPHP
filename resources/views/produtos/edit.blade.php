@extends('layouts.app')

@section('content')
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Produto') }}</div>
                    <div class="card-body">
                        <form action="{{ route('alterar_produto', ['id' => $produto->id]) }}" method="POST">
                            @csrf
                            <label for="">Nome</label><br />
                            <input type="text" name="nome" value="{{ $produto->nome }}"> <br />
                            <label for="">Descrição</label><br />
                            <input type="text" name="descricao" value="{{ $produto->descricao }}"> <br />
                            <label for="">Preço</label><br />
                            <input type="text" name="preco" value="{{ $produto->preco }}"> <br />
                            <button>Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection