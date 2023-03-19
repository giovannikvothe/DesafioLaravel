<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Aulas') }}
        </h2>

        <a href="aulas/create" class="btn btn-dark">
            <i class="fa-solid fa-plus"></i>
        </a>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table" style="width: 100%">

                    <tr>

                        <thead>

                            <tr>

                                <th style="padding-left:10px">Funcionario</th>
                                <th style="padding-left:10px">Aluno</th>
                                <th style="padding-left:10px">Data & Hora do Início</th>            
                                
                                <th></th>

                            </tr>
                            
                        </thead>

                        <tbody>

                            @foreach ($aulas as $aula)
                            
                                <tr>
                                    <td style="padding-left:10px; padding-right: 10px">{{ $aula->funcionario }}</td>
                                    <td style="padding-left:10px; padding-right: 10px">{{ $aula->aluno }}</td>
                                    <td style="padding-left:10px; padding-right: 10px">{{ $aula->data_inicio }}</td>

                                    <td>

                                        <a href="aulas/{{ $aula->id }}" class="btn btn-dark">
                                            <i class="fa-solid fa-eye aux_icon"></i>
                                        </a>

                                        <a href="aulas/{{ $aula->id }}/edit" class="btn btn-primary">
                                            <i class="fa-solid fa-pen-to-square aux_icon"></i>
                                        </a>

                                        <form action="aulas/delete/{{ $aula->id }}" method="post" style="display: inline">

                                            @csrf

                                            <button type="submit">
                                                <a class="btn btn-danger">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </tr>

                </table>
            </div>
        </div>
    </div>
</x-app-layout>