@extends('layouts.app')

@section('body')
    <div class="grid gap-6 lg:grid-cols-3 lg:gap-8 px-8">
        @forelse ($articles as $article)
            <x-article-card :article="$article" />
        @empty
            <p>Nenhum artigo publicado até o momento.</p>
        @endforelse
    </div>
@endsection