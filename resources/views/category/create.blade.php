@extends('layouts.app')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Cadastrar Categoria</h3>
    </div>
    <form>
      <div class="card-body">
        <div class="form-group">
          <label for="name">Nome</label>
          <input type="email" class="form-control" id="name" placeholder="Nome da categoria">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
    </form>
  </div>
@endsection
