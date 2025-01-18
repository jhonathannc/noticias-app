@extends('layouts.app')

@section('body')
    <h1 class="font-bold text-xl">{{ $article->title }}</h1>

    <span>{{ $article->content }}</span>

    <form action="{{ route('articles.index') }}">  
      <x-form.submit-button text="Voltar" />
    </form>
@endsection