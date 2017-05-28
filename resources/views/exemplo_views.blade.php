@extends('template')

@section('titulo')

@endsection

@section('conteudo')
    <div>
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($erros->all as $erro)
                    <li>{{$erro}}</li>
                @endforeach
            </ul>
        @endif

    </div>
@endsection
