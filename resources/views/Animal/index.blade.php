@extends('um')

@section('titulo')
 Animal
@endsection

@section('conteudo')

    <fieldset>
        <legend>Pesquisa</legend>

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
                @foreach($cadAnimais as $cadAnimal)
                <tr>
                    <td>{{$cadAnimal->CadAnimalIdenti}} </td>
                    <td>{{$cadAnimal->CadEspId_FK}} </td>
                    <td>{{$cadAnimal->CadRacaId_FK}} </td>
                    <td>{{$cadAnimal->CadTipoAnimalId_FK}} </td>
                    <td>{{$cadAnimal->CadAnimalDTreg}} </td>
                    <td>{{$cadAnimal->CadAnimalDTnasc}} </td>
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
