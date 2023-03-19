<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alunos') }}
        </h2>

        <a href="alunos/create" class="btn btn-dark">
            <i class="fa-solid fa-user-plus"></i>
        </a>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table" style="width: 100%">

                    <tr>

                        <thead>

                            <tr>

                                <th style="padding-left:10px">Nome</th>
                                <th style="padding-left:10px">Email</th>
                                <th style="padding-left:10px">Validade</th>
                                
                                <th></th>

                            </tr>
                            
                        </thead>

                        <tbody>

                            @foreach ($alunos as $aluno)
                            
                                <tr>
                                    <td style="padding-left:10px; padding-right: 10px">{{ $aluno->nome }}</td>
                                    <td style="padding-left:10px; padding-right: 10px">{{ $aluno->email }}</td>
                                    <td style="padding-left:10px; padding-right: 10px">{{ $aluno->validade }}</td>

                                    <td>

                                        <a href="alunos/{{ $aluno->id }}" class="btn btn-dark">
                                            <i class="fa-solid fa-eye aux_icon"></i>
                                        </a>

                                        <a href="alunos/{{ $aluno->id }}/edit" class="btn btn-primary">
                                            <i class="fa-solid fa-pen-to-square aux_icon"></i>
                                        </a>

                                        <form action="alunos/delete/{{ $aluno->id }}" method="post" style="display:inline">

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