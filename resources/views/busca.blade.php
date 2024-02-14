@extends('layout')
@section('content')

    <body>

        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-lg">
                <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">Buscador de Endereço</h1>

                <form action="{{ route('busca') }}" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8"
                    method="GET">

                    <div>
                        <label for="email" class="sr-only">CEP</label>

                        <div class="relative">
                            <input id="cep" type="text"
                                class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                                placeholder="Enter CEP" name="cep" />
                            <span id="erro-campo" style="display: none; color: red;">Este campo não pode ser vazio</span>
                        </div>
                    </div>

                    <button type="submit"
                        class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                        Busca CEP
                    </button>
                </form>
            </div>
        </div>
        <script>
            document.querySelector('form').addEventListener('submit', function(event) {
                var campo = document.getElementById('cep').value;
                if (!campo.trim()) {
                    event.preventDefault();
                    document.getElementById('erro-campo').style.display = 'inline';
                }
            });
        </script>
    @endsection
