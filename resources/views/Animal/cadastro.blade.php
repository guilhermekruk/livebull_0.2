@extends('template')

@section('titulo')
    Cadastro de Animais
@endsection

@section('conteudo')
    <div>
        <h1>Cadastro de Animais</h1

        {{Form::open(['route'=>'animal.grava', 'method'=>'post'])}}
        {{ Form::label('CadAnimalIdenti','Identificação do animal')}}
        {{ Form::text('CadAnimalIdenti',null,['class'=>'form-control'])}}
        {{Form::close()}}
    </div>
@endsection