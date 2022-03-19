@extends('layouts.app')

@section('content')
        
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Visualizar Produto') }}</div>
                    <div class="card-body">
                        <label for="">Foto</label><br />
                        <input type="file" name="foto"> <br />
                        <label for="">Nome</label><br />
                        <input type="text" name="nome"> <br />
                        <label for="">Descrição</label><br />
                        <input type="text" name="descricao"> <br />
                        <label for="">Preço</label><br />
                        <input type="text" name="preco"> <br /><br />
                        <button>Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
