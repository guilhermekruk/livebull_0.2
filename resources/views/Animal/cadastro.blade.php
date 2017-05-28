@extends('template')

@section('titulo')
    Cadastro de Animais
@endsection

@section('conteudo')
    <div>
        <h1>Cadastro de Animais</h1
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($erros->all as $erro)
                    <li>{!!$erro!!}</li>
                @endforeach
            </ul>
        @endif
        <div>
        {!!Form::Open(['route'=>'animal.grava', 'method'=>'post']) !!}
            @include('Animal._form')
            <br>
            <div class="col-lg-12">
            <span class=" input-group-btn">
                {!! Form::button("<i class='glyphicon glyphicon-save'> Salvar</i>",['class'=>'btn btn-primary','type'=>'submit'])!!}
            </span>
        {!! Form::close()!!}
        </div>
        </div>

    </div>
@endsection