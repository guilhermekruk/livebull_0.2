@extends('template')

@section('titulo')
 Animal
@endsection

@section('conteudo')

    <fieldset>
        <legend>Pesquisa</legend>
        {!! Form::open(['route'=>['animal.busca',request('')],'method'=>'get']) !!}
        <div class="col-lg-7">
            <div class="input-group">
                {!! Form::text('search',null,['class'=>'form-control']) !!}

                <span class="input-group-btn ">
        {!! Form::submit('pesquisa',['class'=>'btn btn-primary']) !!}
    </span>
            </div>
        </div>
        {!! Form::close() !!}
    </fieldset>
    <fieldset>
        <legend>Lista de animais</legend>
        <table>
            <thead>
                <tr>
                    <th class="text-center">Identificação</th>
                    <th class="text-center">Especie</th>
                    <th class="text-center">Raça</th>
                    <th class="text-center">Destino</th>
                    <th class="text-center">Data de registro</th>
                    <th class="text-center">Data de nascimento</th>
                    <th class="text-center" colspan="2">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cadAnimais as $parametro)
                <tr>
                    <td>{{$parametro->CadAnimalIdenti}} </td>
                    <td>{{$parametro->CadEspId_FK}} </td>
                    <td>{{$parametro->CadRacaId_FK}} </td>
                    <td>{{$parametro->CadTipoAnimalId_FK}} </td>
                    <td>{{$parametro->CadAnimalDTreg}} </td>
                    <td>{{$parametro->CadAnimalDTnasc}} </td>
                    <td>
                        <a>editar</a>
                        <a>deletar</a>
                    </td>
                </tr>
                 @endforeach
            </tbody>
        </table>
    </fieldset>
@endsection
