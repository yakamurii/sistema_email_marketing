@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Envie seu Email</h2>
    <form action="/send/new" method="POST">
        @csrf
        <div class="form-group">
            <label for="addressee">Destinatário</label>
            <input type="text" class="form-control col-md-4 col-form-label text-md-left" id="addressee" name="addressee" placeholder="Insira aqui o Email">
        </div>
        <div class="form-group">
            <label for="title">Assunto</label>
            <input type="text" class="form-control col-md-4 col-form-label text-md-left" id="title" name="title" placeholder="Assunto">
        </div>
        <div class="form-group">
            <label for="message">Descrição</label>
            <textarea class="form-control col-md-4 col-form-label text-md-left" id="message" name="message" placeholder="Insira aqui seu texto"></textarea>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Enviar</button>
        <a class="btn btn-sm btn-danger" href="/home">Cancelar</a>
    </form>

</div>
@endsection