<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edição Endereço</title>
 
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
          </ul>
        </div>
    <div class="row mt-2">
      <div class="row">
          <h1>Formulario de Atualização de Endereço</h1>  
      </div> 

        <div class="row">
            <form method="POST" action="{{ route('edicaoEndereco') }}">
             @csrf
             <input type="hidden" value="{{$endereco->id}}" name="id">
              <div class="mb-3">
               <label for="cep" class="form-label">CEP</label>
               <input type="text" class="form-control" id="cep" name="cep" value="{{$endereco->cep}}">
              </div>
              <div class="mb-3">
               <label for="logradouro" class="form-label">Logradouro</label>
               <input type="text" class="form-control" id="logradouro" name="logradouro" value="{{$endereco->logradouro}}">
              </div>
              <div class="mb-3">
               <label for="numero" class="form-label">Número</label>
               <input type="text" class="form-control" id="numero" name="numero" value="{{$endereco->numero}}">
              </div>
              <div class="mb-3">
               <label for="complemento" class="form-label">Complemento</label>
               <input type="text" class="form-control" id="complemento" name="complemento" value="{{$endereco->complemento}}">
              </div>
              <div class="mb-3">
               <label for="bairro" class="form-label">Bairro</label>
               <input type="text" class="form-control" id="bairro" name="bairro" value="{{$endereco->bairro}}">
              </div>
              <div class="mb-3">
               <label for="cidade" class="form-label">Cidade</label>
               <input type="text" class="form-control" id="cidade" name="cidade" value="{{$endereco->cidade}}">
              </div>
              <div class="mb-3">
               <label for="estado" class="form-label">Estado</label>
               <input type="text" class="form-control" id="estado" name="estado" value="{{$endereco->estado}}">
              </div>
              <div class="row">
                <button type="submit" class="btn btn-outline-dark">Salvar</button>
              </div>
             </form>
            </div>
            </div>
              <br>
              <footer>
                Todos os direitos reservados à Maria Eduarda Nascimento Aguiar.
            </footer>
          </div>
        </form>
    </div>
</body>
</html>