@extends('layouts.app')

@section('body')
  <form method='POST' action="{{ route('categories.store') }}">
    @csrf

    <div class="gap-2 text-black flex flex-row">
      <label for="name">Nome da categoria</label>
      <input id="name" name="name" required class="bg-gray-200" />
    </div>
    
    <div class="gap-2 text-black flex flex-row my-4">
      <label for="description">Descrição</label>
      <input id="description" name="description" required class="bg-gray-200"/>
    </div>

    <x-form.submit-button text="Cadastrar" />
  </form>
@endsection