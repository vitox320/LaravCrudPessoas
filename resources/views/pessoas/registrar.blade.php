<!doctype html>
<html lang="pt-br">
  <head>
    <title>Registrar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">CRUD-Pessoas</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
          <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{route('listar_todos')}}">Listar Todos</a>
          </li>

      </div>
      </nav>


  </header>

  <form action="{{route('cadastrar_pessoa')}}" method="POST">
      @csrf
      <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" name="nome" id="nome" placeholder="ex:Maria" required>
      </div>
      <div class="form-group">
          <label for="sobrenome">Sobrenome</label>
          <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="ex:Silva" required>
      </div>
      <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="ex:Silva@gmail.com" required>
      </div>
      <div class="form-group">
          <label for="telefone">Telefone</label>
          <input type="text" class="form-control" name="telefone" id="telefone" required>
      </div>
      <div class="form-check">
          <label for="pessoajuridica">Pessoa Juridica?</label><br/>
          <input class="form-check-input" type="radio" name="pessoajuridica" id="pessoajuridica" value="sim" checked>
          <label class="form-check-label" for="pessoajuridica">
              Sim
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="pessoajuridica" id="pessoajuridica" value="não">
          <label class="form-check-label" for="pessoajuridica">
              Não
          </label>
      </div>
      <div class="form-group">
          <label for="cpf">CPF</label>
          <input type="text" name="cpf" class="form-control" id="cpf">
      </div>
      <div class="form-group">
          <label for="cnpj">CNPJ</label>
          <input type="text" name="cnpj" class="form-control" id="cnpj">
      </div>
      <button class="btn btn-outline-dark">Registrar</button>
  </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
