<?php
include('conexao.php');
if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: ../home/painel.php");

        } else {

            echo "Email/Senha inválidos";

}



}}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Login</title>
    <link rel="stylesheet" href="../../CSS/Login/login.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

</head>

<body>
    <script src="https://kit.fontawesome.com/ab00d86059.js" crossorigin="anonymous"></script>
    <img class="wave"
        src="https://raw.githubusercontent.com/Jhonierpc/WebDevelopment/master/Login%20Responsive/img/wave.png" alt="">
    <div class="container">
        <div class="img">
            <img src="../../IMGS/login-story.png">
        </div>
        <div class="login-container">
            <form action="" method="POST">
                <img class="avatar" src="../../IMGS/user.png" alt="">
                <h2>Bem vindo!</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>

                        <input class="input" type="text" name="email" placeholder="Email" autocomplete="off" >
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <!-- <h5>Password</h5> -->
                        <input class="input" type="password" name="senha" placeholder="Senha">
                    </div>
                </div>
                <a href="../CADASTRO/cadastro.html">Não possuo cadastro</a>
                <input class="btn" type="submit" value="entrar">
                <button onclick="teste()"></button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>