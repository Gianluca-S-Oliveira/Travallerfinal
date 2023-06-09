<?php



// Inicie a sessão (se ainda não estiver iniciada)
session_start();
include('../LOGIN/protect.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<title>Ibis Styles Sao Paulo Anhembi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="css\pages.css"> </head>
	
   	<script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    	<link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css" />

<body>
	<!-- <header> <a href="#" class="logo"><b>Traveller</b></a>
		<div class="search">
	</header> -->
	<main>
		<section class="home" id="home">
			<div class="content">
				<h1>Ibis Styles Sao Paulo Anhembi</h1>
				<p>Hotel económico de design, aberto a mentes criativas</p>
				<button class="btn"><a href="https://all.accor.com/hotel/9596/index.pt.shtml?dateIn=&nights=&compositions=1&stayplus=false&snu=false#origin=ibis" target="_blank">Ver preços</a></button>
			</div>
			<div class="image-container"> <img src="./imgs/ibis-quarto.jpg" alt="Imagem de um quarto do Ibis Styles"> </div>
		</section>
		<section class="about-top" id="about">
			<div class="box-container">
				<div class="box">
					<div class="heading">
						<p class="title">Ibis Styles Sao Paulo Anhembi</p>
						<p class="text"><i class="presentation">"Bem-vindo ao ibis Styles SP Anhembi! Implementámos os protocolos de higiene ALLSAFE e temos a certificação atribuída pelo Bureau Veritas para lhe oferecer uma estadia confortável e segura. Desfrute da sua estadia!" <br> <b>Rossana Viegas, Gerente do hotel</b></i></p>
						<p class="text">Com um design criativo, baseado no tema "aviação",o ibis Styles São Paulo Anhembi combina a funcionalidade para trabalhar, num ambiente familiar e com uma excelente relação preço/qualidade. Os quartos são bastante confortáveis e adaptados para pessoas com mobilidade reduzida, com WIFI e ar condicionado. O restaurante 14 Bis serve um pequeno-almoço com 40 opções gastronómicas, área de bar 24 horas. Espaço para crianças. Os cães são bem-vindos. </p>
						<p class="text">Uma estadia no ibis Styles São Paulo Anhembi é sinónimo de proximidade dos principais centros de exposições da cidade, como o Expo Center Norte, o Pavilhão de Exposições do Anhembi e o Pro Magno, a menos de 10 minutos de carro do hotel. O ibis Styles Anhembi localiza-se igualmente perto da estação de metro Portuguesa-Tietê, onde poderá chegar com facilidade a qualquer ponto da cidade. A Estação de Autocarros Tietê, o principal terminal da cidade, situa-se apenas a 2 minutos a pé.</p>
						<p class="text">O ibis Styles São Paulo Anhembi é um hotel confortável, ideal para estadias em família e possui uma excelente relação preço/qualidade. Dispõe de bons acessos e situa-se perto de centros de exposições.</p>
					</div>
				</div>
			</div>
			<div class="box-container-2">
				<div class="box-2">
					<div class="heading">
						<p class="title">Informações Adicionais</p>
						<p class="text"><i class="fa-regular fa-circle-check"></i>O ibis Styles Anhembi localiza-se a 2 minutos a pé da Estação de Autocarros Tietê </p>
						<p class="text"><i class="fa-regular fa-circle-check"></i>A 30 minutos do Aeroporto de São Paulo/Congonhas </p>
						<p class="text"><i class="fa-regular fa-circle-check"></i>A 40 minutos do Aeroporto Internacional de São Paulo/Guarulhos </p>
						<p class="text"><i class="fa-regular fa-circle-check"></i>Todas as quintas-feiras, o melhor Parmesão no bairro norte! </p>
					</div>
				</div>
			</div>
		</section>
		<section class="transportation">
			<div class="map-top">
				<p class="title">Localização do hotel</p>
				<div id="map" style="width: 100%; height: 530px;"></div> 
			</div>
			<div class="infos">
        <br>
				<p><i class="fas fa-map-marker-alt"></i>Av. Cruzeiro do Sul, 1709 - Santana, São Paulo - SP, 02031-000</p>
				<p><i class="fa-solid fa-location-crosshairs"></i>GPS: -23.515864, -46.625416</p>
				<p><i class="fa-solid fa-phone"></i>+55 11 3336-5400</p>
				<p><i class="fa-solid fa-envelope"></i>h9596-re@accor.com.br</p>
			</div>
		</section>
	</main>
	<footer> </footer>
</body>
<script type="text/javascript">
      window.onload = function() {
        L.mapquest.key = 'vNH4YmGf1pMUK1iVQcCCQFaUXQMMVb5u';
	  var map = L.mapquest.map('map', {
          center: [-23.515864, -46.625416],
          layers: L.mapquest.tileLayer('map'),
          zoom: 17
        });
	      map.addControl(L.mapquest.control());
      }
    </script>
</html>

<?php
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
