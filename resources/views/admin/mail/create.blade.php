<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enviar Email') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm">

                <form action="{{ route('mail.send') }}" method="POST">
                    
                    @csrf

                    @include('layouts.formEmail')

                    <button type="submit" class="float-right ml-1">
                        <a class="btn btn-primary">
                            <i class="fa-solid fa-check"></i> Enviar
                        </a>
                    </button>

                </form>
                
            </div>

        </div>
    </div>
</x-app-layout>