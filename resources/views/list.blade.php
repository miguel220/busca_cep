@extends('layout')
@section('content')
    <div class="container mx-auto">
        <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl my-5">Lista de Endereços</h1>
        <a href="{{ route('telaBuscar') }}"
            class="block w-36 rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white my-3">
            Busca endereço
        </a>
        @if (session('sucesso'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ session('sucesso') }}
            </div>
        @endif
        @if (session('erro'))
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                {{ session('erro') }}
            </div>
        @endif
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            CEP
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Logradouro
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bairro
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Localidade
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Uf
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Numero
                        </th>
                    </tr>
                </thead>

                @foreach ($enderecos as $endereco)
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $endereco->cep }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $endereco->logradouro }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $endereco->bairro }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $endereco->localidade }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $endereco->uf }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $endereco->numero }}
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
