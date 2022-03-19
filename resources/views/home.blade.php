@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Listagem de Produtos') }}</div>
                <div class="card-body">          
                <form action="" method="POST">    
                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th>Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produto as $prod) 
                                    <tr>
                                        <td>{{$prod -> nome}}</td>
                                        <td>{{$prod -> descricao}}</td>
                                        <td>{{$prod -> preco}}</td>
                                        <td>
                                            <button>Editar</button>
                                            <button>Excluir</button>
                                        </td>
                                    </tr>    
                                @endforeach

                            </tbody>
                        </table>
                    </form>
                </div>                
            </div>            
        </div>        
    </div>
</div>
@endsection
