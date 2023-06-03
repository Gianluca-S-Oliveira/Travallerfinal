<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
   
    <style>
        body{
         
            margin:0;
            padding:0;
        }
       .entrar {
            background-color: red;
            color: white;
            padding:40px 60px; 
            margin-left:50%;

            border-radius:30px;
        }
        .entrar:hover{
            background-color:white;
            color:red;entrar
            border:2px solid red;
           
        
        }
        .mensagem {
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
            font-size: 2rem;
            animation: bounceInLeft;
            animation-duration: 2s;
            color: white;
            font-weight: 800;
            position: absolute;
            top:0;
            text-align: center;
  
            width:100%;
            background-color: red;
        }

        .cadastrado {
            height: 490px;
            width: 400px;
            margin: auto;
            background-image: url("../../IMGS/protegido.jpg");
            background-repeat: no-repeat;
            background-size: contain;
      
            background-position: center;
            animation: bounceInRight;
            animation-duration: 2s;
        }
    </style>
</head>
<body>
    <?php
        if(!isset($_SESSION)) {
            session_start();
        }

        if(!isset($_SESSION['id'])) {   echo "<div class='cadastrado'></div>";
            die("<div class='mensagem'>Você não pode acessar esta página porque não está logado.</div><p>
            
            <br> <br> <br>
            
            <a class='entrar' href=\"../LOGIN/index.php\">Entrar</a></p>");
         
        }
    ?>
</body>
</html>
