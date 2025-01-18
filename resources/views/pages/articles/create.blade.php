@extends('layouts.app')

@section('body')
  <form method='POST' action="{{ route('articles.store') }}">
    @csrf

    <div class="gap-2 text-black flex flex-row">
      <label for="title">Título da notícia</label>
      <input id="title" name="title" required class="bg-gray-200"/>
    </div>

    <div class="gap-2 text-black flex flex-row my-4">
      <label for="content">Conteúdo</label>
      <textarea required name="content" id="content" cols="40" rows="5"class="bg-gray-200 p-2"></textarea>
    </div>

    <x-form.submit-button text="Cadastrar" />
  </form>
@endsection