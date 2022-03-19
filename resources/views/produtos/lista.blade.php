@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Novo Produto') }}</div>
                    <div class="card-body">
                        <form action=''{{ route('registrar_produto') }} method="POST">
                            @csrf
                            <button>Novo Produto</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                                <td>Mary</td>
                                <td>Moe</td>
                                <td>mary@example.com</td>
                                <td><button>Editar</button> <button>Excluir</button></td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>july@example.com</td>
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