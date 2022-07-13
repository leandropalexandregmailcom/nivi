@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pesquisar</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Loja</th>
                <th>Nome</th>
                <th>Data de criação</th>
                <th>Data de atualização</th>
                <th>Ação</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>ID</td>
                <td>Loja</td>
                <td>Nome</td>
                <td>Data de criação</td>
                <td>Data de atualização</td>
                <td>Ação</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
