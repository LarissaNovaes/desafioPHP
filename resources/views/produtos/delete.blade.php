@extends('layouts.app')

@section('content')
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Produto') }}</div>
                    <div class="card-body">
                        <form action="{{ route('excluir_produto', ['id' => $produto->id]) }}" method="POST">
                            @csrf
                            <label for="">Tem certeza que deseja excluir este produto?</label><br />
                            <input type="text" name="nome" value="{{ $produto->nome }}"> <br />
                            <button>Sim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection