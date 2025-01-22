@extends('layouts.app')

@section('body')
<form method='POST' action="{{ route('contacts.store') }}">
  @csrf

  <div class="gap-2 text-black flex flex-row">
    <label for="name">Nome do contato</label>
    <input id="name" name="name" required class="bg-gray-200" value="{{ old('name') }}"/>
  </div>

  <div class="mt-4 gap-2 text-black flex flex-row">
    <label for="message">Mensagem</label>
    <textarea required name="message" id="message" cols="40" rows="5" class="bg-gray-200 p-2"></textarea>
  </div>

  <x-form.submit-button text="Cadastrar" />
</form>
@endsection