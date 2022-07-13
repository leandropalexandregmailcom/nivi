@extends('layouts.app')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Cadastrar Loja</h3>
    </div>
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="name">Nome</label>
          <input type="email" class="form-control" id="name" placeholder="Nome da categoria">
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="description">Descrição da Loja</label>
          <textarea type="text" class="form-control" id="description" placeholder="Descrição da Loja"></textarea>
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="about_us">Sobre Nós</label>
          <textarea type="text" class="form-control" id="about_us" placeholder="Sobre Nós"></textarea>
        </div>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="name">Logo tamanho 20 x 20</label>
          <input type="file" class="form-control" id="name" placeholder="Nome da categoria">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
    </form>
  </div>
@endsection
