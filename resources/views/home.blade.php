@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Listagem de Produtos') }}</div>
                <div class="card-body">          
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Teste</td>
                                <td>Teste</td>
                                <td>R$1,00</td>
                                <td><button>Editar</button> <button>Excluir</button></td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    
</div>
@endsection
