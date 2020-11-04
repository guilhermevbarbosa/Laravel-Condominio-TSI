<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Laravel Condomínio TSI - Regras de utilização
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl p-8">
                <h1 style="margin-bottom: 40px">As regras do condomínio devido a COVID são:</h1>

                <ul>
                    @foreach ($noticias as $noticia)
                    <li style="margin-bottom: 20px">
                        <h1 style="margin-bottom: 20px">
                            <b>{{$noticia->name}}</b>
                        </h1>

                        <h2> {{$noticia->description}}</h2>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
