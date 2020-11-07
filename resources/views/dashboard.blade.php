<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Laravel Condomínio TSI - Mural de regras e notícias do condomínio
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl p-8">
                <ul>
                    @forelse ($noticias as $noticia)
                    <li>
                        <h1>
                            <b>{{$noticia->name}}</b>
                        </h1>

                        <h2> {{$noticia->description}}</h2>
                    </li>
                    @empty
                    <h1>Não há notícias ou regras cadastradas</h1>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    h1,
    li {
        margin-bottom: 30px;
    }

    li {
        padding-bottom: 30px;
        border-bottom: 1px solid #d2d2d2;
    }
</style>