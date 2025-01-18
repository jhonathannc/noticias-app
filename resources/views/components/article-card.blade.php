<a
    href="{{ route('articles.show', $article->id) }}"
    class="flex items-start gap-4 rounded-lg bg-gray-100 px-6 py-4 lg:pb-10"
>
    <div class="pt-3 sm:pt-5">
        <h2 class="text-xl font-semibold text-black">{{ $article->title }}</h2>

        <p class="mt-4 text-sm">
            {{ $article->content }}
        </p>

        <div class="flex place-self-center justify-center mt-5 bg-gray-300 rounded py-2 px-6 w-full max-w-80">
            Acessar
        </div>
    </div>

</a>