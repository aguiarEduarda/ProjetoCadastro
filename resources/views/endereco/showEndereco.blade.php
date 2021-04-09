<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuário Salvo</title>
 
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
            position: absolute;
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
            <div class="row">
                <h1>O endereço foi cadastrado com sucesso!</h1>
            </div> 
            <div class="row mt-3"> 
            <div class="row">
                <div style="font-weight: bold" class="col-md-2">CEP</div> 
                <div class="col-md-10">{{ $endereco->cep}}</div> 
            </div>
            <div class="row">
                <div style="font-weight: bold" class="col-md-2">Logradouro</div> 
                <div class="col-md-10">{{ $endereco->logradouro}}</div>
            </div>
            <div class="row">
                <div style="font-weight: bold" class="col-md-2">Número</div> 
                <div class="col-md-10">{{ $endereco->numero}}</div>
            </div>
            <div class="row">
                <div style="font-weight: bold" class="col-md-2">Complemento</div> 
                <div class="col-md-10">{{ $endereco->complemento}}</div>
            </div>
            <div class="row">
                <div style="font-weight: bold" class="col-md-2">Bairro</div> 
                <div class="col-md-10">{{ $endereco->bairro}}</div>
            </div>
            <div class="row">
                <div style="font-weight: bold" class="col-md-2">Cidade</div> 
                <div class="col-md-10">{{ $endereco->cidade}}</div>
            </div>
            <div class="row">
                <div style="font-weight: bold" class="col-md-2">Estado</div> 
                <div class="col-md-10">{{ $endereco->estado}}</div>
            </div>
        </div> 
        <footer>
            Todos os direitos reservados à Maria Eduarda Nascimento Aguiar.
        </footer>
    </div>
</body>
</html>