<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Funcionário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm">

                <form action="{{ route('funcionarios.store') }}" method="POST">
                    @csrf

                    @include('layouts.formFuncionarios')

                    <button type="submit" class="float-right ml-1">
                        <a class="btn btn-primary">
                            <i class="fa-solid fa-user-check"></i> Adicionar
                        </a>
                    </button>

                    <a href="{{ route('funcionarios.index') }}" class="btn btn-dark float-right">
                        <i class="fas fa-undo-alt"></i> Voltar
                    </a>

                </form>
                
            </div>

        </div>
    </div>
</x-app-layout>