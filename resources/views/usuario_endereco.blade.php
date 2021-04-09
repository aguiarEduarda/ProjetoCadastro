<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@300&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Blinker', Roboto, 'Open Sans', Arial, Helvetica;
            color: black;
            background-color:  rgb(240, 170, 106);
        }
        *{
            margin: 0;
            padding: 0;
        }
        #menu
        {
            width: 100%;
            height: 52px;
            background-color:  rgb(238, 125, 50);
        }
        #menu ul
        {
            list-style: none;
            position: relative;
        }
        #menu ul li
        {
            width: 150px;
            float: left;
        }
        #menu a
        {
            padding: 15px; 
            display: block;
            font-size: 15px;
            text-decoration: none;
            text-align: center;
            background-color:   rgb(238, 125, 50);
            color: black;
        }
        #menu a:hover{
            background-color: rgb(241, 158, 102);
            color: rgb(26, 25, 25);
        }
        footer {
            position: auto;
            bottom: 0;
            background-color: rgb(238, 125, 50);
            color: black;
            width: 100%;
            height: 50px;    
            text-align: center;
            line-height: 50px;
        }
    </style>  

</head>
<body>
    <div class="container">
       <div class="row mt-2" id="menu">
          <ul>
              <li><a href="public" style="font-weight: bold">Home</a></li>
              <li><a href="cadastro">Cadastrar</a></li>
              <li><a href="lista">Lista de usuários</a></li>

              <li><a href="novoEndereco">Cadastrar enderço</a></li>
              <li><a href="listaEndereco">Lista de endereços</a></li>

              <li><a href="usuarioEndereco">User&Endereço</a></li>
          </ul>
        </div>
    <div class="row mt-2">
      <div class="row">
          <h1>Cadastro Usuário</h1>  
      </div> 
      <div class="row">
        <form method="POST" action="{{ route('salvarUsuario') }}">
            @csrf

          <div class="form-group">
            <label for="exampleInputEmail1">Nome Completo</label>
            <input type="string" class="form-control" id="nomeInput" name="nome" ><br>
           
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Data de Nascimento</label>
              <input type="date" class="form-control" id="dataInput" name="data_nascimento"><br>
             
            </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="senhaInput" name="senha"><br>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Matrícula</label>
            <input type="number" class="form-control" id="matriculaInput" name="matricula">
          </div>

              <h1>Cadastro de Endereço</h1>

              <div class="form-group">
                <label for="exampleInputEmail1">Bairro</label>
                <input type="string" class="form-control" id="bairroInput" name="bairro" ><br>
               
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Cidade</label>
                  <input type="string" class="form-control" id="cidadeInput" name="cidade"><br>
                 
                </div>
                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado">
                  </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Complemento </label>
                <input type="string" class="form-control" id="complementoInput" name="complemento">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Numero </label>
                <input type="number" class="form-control" id="numeroInput" name="numero">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Logradouro </label>
                <input type="string" class="form-control" id="logradouroInput" name="logradouro">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">CEP </label>
                <input type="string" class="form-control" id="cepInput" name="cep">
              </div>
          
            <button type="submit" class="btn btn-outline-dark">Salvar</button>
            <br>
            <br>
            <footer>
                Todos os direitos reservados à Maria Eduarda Nascimento Aguiar.
            </footer>
          </div>
        </form>
    </div>
</body>
</html>