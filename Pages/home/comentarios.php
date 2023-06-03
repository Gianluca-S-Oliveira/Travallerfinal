<?php
// Inicie a sessão (se ainda não estiver iniciada)
session_start();

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtenha o valor do campo de comentário
  $comentario = $_POST["comentario"];

  // Valide e processe o comentário conforme necessário

  // Exemplo de inserção do comentário em um banco de dados
  include('../LOGIN/conexao.php');
  
  // Obtenha o nome do usuário logado da sessão
  $nomeUsuario = $_SESSION['nome'];
  
  // Verifique se o comentário já existe no banco de dados para o usuário atual
  $query = "SELECT * FROM usuarios WHERE nome='$nomeUsuario' AND comentarios='$comentario'";
  $result = $mysqli->query($query);
  if ($result->num_rows > 0) {
    echo "Este comentário já foi inserido anteriormente.";
  } else {
    // Inserir o comentário na tabela de comentários
    $query = "INSERT INTO usuarios (nome, comentarios) VALUES ('$nomeUsuario', '$comentario')";
    if ($mysqli->query($query)) {
      echo "Comentário adicionado com sucesso!";
    } else {
      echo "Erro ao adicionar o comentário: " . $mysqli->error;
    }
  }

  // Fechar a conexão com o banco de dados
  $mysqli->close();
}
?>

<html>
<head>
<meta charset="UTF-8">
  <title>Comentários</title>
  <link rel="stylesheet" href="coment.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

  <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <textarea placeholder="Compartilhe sua opinião sobre este hotel.." name="comentario" rows="4" cols="50"></textarea>
    <br>
    <button type="submit" value="Enviar Comentário">Enviar Comentário <i class="fa-sharp fa-solid fa-paper-plane"></i></button>
  </form>
  <h4>Opiniões para este hotel</h4>

  <?php
  include('../LOGIN/conexao.php');

  // Consulta SQL para recuperar os comentários da tabela "usuarios"
  $query = "SELECT nome, comentarios FROM usuarios WHERE comentarios <> ''";
  $result = $mysqli->query($query);

  // Verifica se houve resultado na consulta
  if ($result->num_rows > 0) {
    // Exibe os comentários em um loop
    while ($row = $result->fetch_assoc()) {
      $nome = $row["nome"];
      $comentario = $row["comentarios"];
      echo "<div class='comentarios'>";
      echo "<div class='inserido'><i class='fa-solid fa-user '></i></div>";
      echo "<div class='nome'>";
      echo "<strong>$nome</strong> <br><p class='comentario__unico'>$comentario</p>";

      echo"</div>";
      echo"</div>";
      echo"</br>";
      echo"</br>";
    }
  } else {
    echo "Nenhum comentário encontrado.";
  }

  // Fechamento da conexão com o banco de dados
  $mysqli->close();
  ?>
  
</body>

</html>
