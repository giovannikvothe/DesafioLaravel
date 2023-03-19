<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Aluno') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm">

                <form action="/alunos/edit/{{ $aluno->id }}" method="post">

                    @csrf

                    @include('layouts.formAlunos')

                    <button type="submit" class="float-right ml-1">
                        <a class="btn btn-primary">
                            <i class="fa-solid fa-user-check"></i> Salvar
                        </a>
                    </button>

                    <a href="{{ route('alunos.index') }}" class="btn btn-dark float-right">
                        <i class="fas fa-undo-alt"></i> Voltar
                    </a>

                </form>

            </div> 

        </div>
    </div>
</x-app-layout>