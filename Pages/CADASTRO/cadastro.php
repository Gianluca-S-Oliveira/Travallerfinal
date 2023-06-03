<?php



include('../LOGIN/conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consulta para verificar se o e-mail já está cadastrado
$sql_verifica_email = "SELECT * FROM usuarios WHERE email = '$email'";
$resultado = mysqli_query($mysqli, $sql_verifica_email);

// Verifica se o e-mail já está cadastrado no banco de dados
if(mysqli_num_rows($resultado) > 0){
    echo "<div class='mensagem erro'><a href='#' onclick='history.back();' return false; ><i class='fa-solid fa-arrow-right-arrow-left'></i>Tentar Novamente</a> <p>Este e-mail já está cadastrado. Tente Novamente </p><p></p></div>";

    echo "<div class='cadastrado'>";;

}
else {
    // Insere o novo usuário no banco de dados
    $sql_insere_usuario = "INSERT INTO usuarios(nome,email,senha) VALUES ('$nome','$email','$senha')";

    if(mysqli_query($mysqli, $sql_insere_usuario)){
        echo "<div class='mensagem sucesso'><a href='../LOGIN'<i class='fa-solid fa-house-user'></i>Entrar</a>Usuário cadastrado com sucesso.<p></p></div> ";
        echo "<div class='inserido'>";
    }
    else{
        echo "<div class='mensagem erro'>Erro ao cadastrar usuário. </div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200&family=Poppins:wght@200&display=swap");
body {
    font-family: "Fira Sans", sans-serif;
    margin:0px;
    padding:0px;
  }
        .mensagem {
    padding: 10px 100px 10px 10px;
    border-radius: 5px;
    margin: 10px 0;
    font-size:2rem;
    animation: bounceInLeft;
  animation-duration: 2s;
  color:white;
  font-weight:800;
  text-align:center;
  color:white;
}
.mensagem a{
    color:#663333;
    font-size:1.3rem;
    text-decoration:none;
}
.fa-arrow-right-arrow-left{
    color:red;
    padding:20px;
    border-radius:100%;
    margin-top:10%;
    margin-right:5px;
    background-color:white;
}
.fa-house-user{
    color:green;
    padding:20px;
    text-align:center;
    border-radius:100%;
  
    margin-right:5px;
 margin-top:5px;
}
.cadastrado{

    height:400px;
  width: 400px;
  margin:auto;
  background-image: url("../../IMGS/jalogado.jpg");
  background-repeat: no-repeat;
  background-size: contain;
  background-position: center;
  animation: bounceInRight;
  animation-duration: 2s;
}
.inserido{

    height:400px;
  width: 400px;
  margin:auto;
  background-image: url("../../IMGS/sucess.jpg");
  background-repeat: no-repeat;
  background-size: contain;
  background-position: center;
  animation: bounceInRight;
  animation-duration: 2s;
}
.mensagem.sucesso {
    background-color: #c8f7c5;
    color: #336633;
    display:flex;
    margin-top:0px;
justify-content:space-between;
}

.mensagem.erro {
    background-color: #f7c5c5;
    color: #663333;
    display:flex;
    margin-top:-10px;
justify-content:space-between;}
/* .voltar{
  background-color:red;
} */
    </style>

</body>
</html>