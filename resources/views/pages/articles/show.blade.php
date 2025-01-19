@extends('layouts.app')

@section('body')
    <h1 class="font-bold text-xl">{{ $article->title }}</h1>

    <span>{{ $article->content }}</span>
    
    <p class="mt-4 text-sm">
        Categoria: {{ $article->categories()->first()->name }}
    </p>

    <form action="{{ route('articles.index') }}">  
      <x-form.submit-button text="Voltar" />
    </form>
@endsection