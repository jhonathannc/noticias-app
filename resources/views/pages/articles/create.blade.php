@extends('layouts.app')

@section('body')
  <form method='POST' action="{{ route('articles.store') }}">
    @csrf

    <div class="gap-2 text-black flex flex-row">
      <label for="title">Título da notícia</label>
      <input id="title" name="title" required class="bg-gray-200" value="{{ old('title') }}"/>
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

      <a
        href="{{ route('categories.create') }}"
        class="ml-2 w-8 h-8 bg-gray-500 hover:bg-gray-300 text-white hover:text-black font-bold rounded-full cursor-pointer text-center pt-0.5"
        title="Cadastrar nova categoria"
      >
        +
      </a>
    </div>

    <div class="gap-2 text-black flex flex-row my-4">
      <label for="content">Conteúdo</label>
      <textarea required name="content" id="content" cols="40" rows="5"class="bg-gray-200 p-2"></textarea>
    </div>

    <x-form.submit-button text="Cadastrar" />
  </form>
@endsection