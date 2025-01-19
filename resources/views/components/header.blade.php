<header class="w-full py-8 text-sm bg-gray-300 flex justify-center">
    <div class="px-8 flex w-full lg:max-w-7xl justify-between">
        <x-logo />
        <div class="flex items-center justify-end gap-3 w-full">
            <x-button-nav href="{{ route('articles.create') }}" text="Cadastrar noticia" />
            <x-button-nav href="{{ route('articles.index') }}" text="Exibir noticias" />
            <form method="POST" action="{{ route('search.index') }}">
                @csrf
                <input type="text" name="search" />
            </form>
        </div>
    </div>
</header>