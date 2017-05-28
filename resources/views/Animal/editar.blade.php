@extends('template')

@section('titulo')
    Edição de animail
@endsection

@section('conteudo')
    <h1>Edição de animais {{$cadAnimal->CadAnimalId_PK}} </h1>
    <div>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($erros->all as $erro)
                    <li>{{$erro}}</li>
                @endforeach
            </ul>
        @endif

            <div>
                {!! Form::Model($cadAnimal,['route'=>['animal.alterar',$cadAnimal->CadAnimalId_PK],'method'=>'post'])!!}
                @include('Animal._form')
                <br>
                <div>
                <span>
                    {!! Form::button('Salvar',['class'=>'btn btn-primary', 'type'=>'submit'])!!}
                </span>
                </div>
                {!! Form::close() !!}
            </div>

    </div>
@endsection
