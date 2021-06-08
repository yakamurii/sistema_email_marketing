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
                                    <th>Destinatário</th>
                                    <th>Mensagem</th>
                                    <th>Data de Envio</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                                <tr>
                                    <td>{{$list->id}}</td>
                                    <td>{{$list->title}}</td>
                                    <td>{{$list->addressee}}</td>
                                    <td>{{$list->message}}</td>
                                    <td>{{$list->created_at}}</td>
                                </tr>
                           
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-sm btn-success" href="/edit/{{$list->id}}">Editar</a>
                        <a class="btn btn-sm btn-danger" href="/home">Cancelar</a>
                    </div>
                </div>      
                
            </div>
            
        </div>
    </div>
</div>
@endsection
