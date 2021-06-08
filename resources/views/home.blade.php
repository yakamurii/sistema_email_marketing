@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <h5 class="card-title">Lista de E-mails</h5>
                        <table class="table table-ordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Título</th>
                                    <th>Data de Envio</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->created_at->format('d/m/Y H:i:s')}}</td>
                                    <td>
                                    <a class="btn btn-sm btn-success" href="/details/{{$item->id}}">Visualizar</a>
                                    <a class="btn btn-sm btn-danger" href="delete/{{$item->id}}">Excluir</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="/send">Enviar email</a>
                    </div>
                </div>      
                
            </div>
            
        </div>
    </div>
</div>
@endsection
