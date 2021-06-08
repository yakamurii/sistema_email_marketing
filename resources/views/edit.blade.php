@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Atualize o dados</h2>
    <form action="/edit/{{$list->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="addressee">Destinatário</label>
            <input type="text" class="form-control col-md-4 col-form-label text-md-left" id="addressee" name="addressee" value="{{$list->addressee}}">
        </div>
        <div class="form-group">
            <label for="title">Assunto</label>
            <input type="text" class="form-control col-md-4 col-form-label text-md-left" id="title" name="title" value="{{$list->title}}">
        </div>
        <div class="form-group">
            <label for="message">Descrição</label>
            <textarea class="form-control col-md-4 col-form-label text-md-left" id="message" name="message">{{$list->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
        <button type="submit" class="btn btn-danger">Cancelar</button>
    </form>

</div>
@endsection