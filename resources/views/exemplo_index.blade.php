@extends('template')

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
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                    <th class="text-center" colspan="2">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cadAnimais as $parametro)
                <tr>
                    <td>{{$parametro->}} </td>
                    <td>{{$parametro->}} </td>
                    <td>{{$parametro->}} </td>
                    <td>{{$parametro->}} </td>
                    <td>{{$parametro->}} </td>
                    <td>{{$parametro->}} </td>
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
