@extends('layouts.app')

@section('body')
  <form method='POST' action="{{ route('articles.store') }}">
    @csrf

    <div class="gap-2 text-black flex flex-row">
      <label for="title">Título da notícia</label>
      <input id="title" name="title" required class="bg-gray-200"/>
    </div>

    <div class="gap-2 text-black flex flex-row my-4">
      <label for="category_id">Categoria</label>
      <select name="category_id" id="category_id" required class="bg-gray-200">
        @forelse ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @empty
          <option value="" disabled>Nenhuma categoria cadastrada.</option>
        @endforelse
      </select>
    </div>

    <div class="gap-2 text-black flex flex-row my-4">
      <label for="content">Conteúdo</label>
      <textarea required name="content" id="content" cols="40" rows="5"class="bg-gray-200 p-2"></textarea>
    </div>

    <x-form.submit-button text="Cadastrar" />
  </form>
@endsection