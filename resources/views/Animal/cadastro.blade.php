@extends('template')

@section('titulo')
    Cadastro de Animais
@endsection

@section('Conteudo')
    <div>
        <h1>Cadastro de Animais</h1>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($erros->all as $erro)
                    <li>{{$erro}}</li>
                @endforeach
            </ul>
        @endif
        {!! Form::Open(['route'=>'cadastro.grava','metodo'=>'post']) !!}
            @include('Animal._form');
        {!! Form::Close() !!}
    </div>
@endsection