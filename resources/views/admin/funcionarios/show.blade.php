<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Funcionário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm">

                @include('layouts.formFuncionarios')

            </div> 

            <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn btn-primary float-right ml-1">
                <i class="fas fa-pen"></i> Editar
            </a>

            <a href="{{ route('funcionarios.index') }}" class="btn btn-dark float-right">
                <i class="fas fa-undo-alt"></i> Voltar
            </a>
            
        </div>
    </div>
</x-app-layout>