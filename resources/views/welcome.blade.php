<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Blinker:wght@300&display=swap" rel="stylesheet">
    <title>Página Inicial</title>

    <style>
        body 
        {
            margin: auto;
            font-family: 'Blinker', Roboto, 'Open Sans', Arial, Helvetica;
            color: black;
            background: url('https://i.pinimg.com/736x/99/8a/fd/998afd9d99246900baff467e4b64fff4.jpg');
        }
        *{
            margin: 0;
            padding: 0;
        }
        #menu
        {
            width: 100%;
            height: 50px;
            background-color: rgb(238, 125, 50);
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
            background-color: rgb(238, 125, 50);
            color: black;
            /*font-weight: lighter;*/
        }
        #menu a:hover{
            background-color: rgb(241, 158, 102);
            color: rgb(26, 25, 25);
        }
        #header
        {
          position: absolute;  
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
          text-align: center;
        }
        #header span
        {
            font-size: 52px;
            color: black;   
            font-weight: bold;
        }
        #header p
        {
            font-size: 25px;
            color: black;   
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
              <li><a href="cadastro">Cadastrar</a></li>
              <li><a href="lista">Lista de usuários</a></li>
          </ul>
        </div>
        <div class="row mt-2" id="header">
            <span class="title">Cadastro de usuários</span>
            <p class="subtitle">Por hora é só um cadastro de usuários.</p>
        </div> 
        <footer>
            Todos os direitos reservados à Maria Eduarda Nascimento Aguiar.
        </footer>
</body>
</html> 