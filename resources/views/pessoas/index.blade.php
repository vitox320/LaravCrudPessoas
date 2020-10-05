<!doctype html>
<html lang="pt-br">
  <head>
    <title>Listagem de todas pessoas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">CRUD-Pessoas</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item active">
                      <a class="nav-link" href="{{route('cadastro')}}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('listar_todos')}}">Listar Todos</a>
                  </li>

          </div>
      </nav>
  </header>

  <body>
      <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Sobrenome</th>
          <th scope="col">Email</th>
          <th scope="col">Telefone</th>
          <th scope="col">Pessoa Juridica</th>
          <th scope="col">CPF</th>
          <th scope="col">CNPJ</th>

        </tr>
      </thead>
      @foreach ($pessoa as $pessoas)
      <tbody>
        <tr>
          <th scope="row">{{$pessoas->id}}</th>
          <td>{{$pessoas->nome}}</td>
          <td>{{$pessoas->sobrenome}}</td>
          <td>{{$pessoas->email}}</td>
          <td>{{$pessoas->telefone}}</td>
          <td>{{$pessoas->pessoajuridica}}</td>
          <td>{{$pessoas->cpf}}</td>
          <td>{{$pessoas->cnpj}}</td>
          <td> <a href="{{route('editar_pessoa',['id'=>$pessoas->id])}}" class="btn btn-outline-success">Editar</a> </td>
          <td> <a href="{{route('excluir_pessoa',['id'=>$pessoas->id])}}" class="btn btn-outline-danger">Excluir</a> </td>
          <td> <a href="{{route('listar_um',['id'=>$pessoas->id])}}" class="btn btn-outline-primary">Ver</a> </td>
        </tr>
        <tr>
        @endforeach
      </tbody>
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
