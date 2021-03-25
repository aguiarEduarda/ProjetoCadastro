<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@300&display=swap" rel="stylesheet">

    <title>Cadastro</title>
</head>
<body>

  <div class="container">
    <div class="row mt-2">
      <div class="row">
          <h1>Formulario de Cadastro</h1>  
      </div> 
      <div class="row">
        <form method="POST" action="{{ route('cadastrar') }}">
            @csrf
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Nome completo</label>
              <div class="col-10">
                <input type="text" class="form-control" id="nomeComp" name="nomecomp">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-date-input" class="col-2 col-form-label">Matrícula</label>
              <div class="col-10">
                <input type="number" class="form-control" id="matricula" name="matricula">
              </div>
            </div>
              <div class="form-group row">
                <label for="example-date-input" class="col-2 col-form-label">Data de nascimento</label>
                <div class="col-10">
                  <input type="date" class="form-control" id="dataNasc" name="datanasc">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-password-input" class="col-2 col-form-label">Senha</label>
                <div class="col-10">
                  <input type="password" class="form-control" id="senha" name="senha">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Cadastrar</button>
              <footer>
                Todos os direitos reservados à Maria Eduarda Nascimento Aguiar.
            </footer>
          </div>
        </form>
    </div>
</body>
</html>