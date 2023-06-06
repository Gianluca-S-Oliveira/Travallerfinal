<?php



include('../LOGIN/protect.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <script src="painel.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAINEL</title>
    <link rel="stylesheet" href="../../CSS/Carro/carro.css">
    <link rel="stylesheet" href="../../CSS/Banner/banner.css">
    <link rel="stylesheet" href="../../CSS/Menu/menu.css">
    <link rel="stylesheet" href="../../CSS/Sobre/sobre.css">
    <link rel="stylesheet" href="../../CSS/Hotel/hotel.css">
    <link rel="stylesheet" href="../../CSS/Footer/footer.css">
    <link rel="stylesheet" href="../../CSS/Restaurante/restaurante.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../JS/lax.js"></script>
    <script src="node_modules/lax.js/lib/lax.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

<body>


  
    <nav>
    <div class="logo" > 

    <img src="../../IMGS/logo.png" alt="">
    </div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
      <i class="fas fa-bars"></i>
    </label>
    <ul >
      <li><a class="active" href="#banner">Home</a></li>
      <li><a href="#about">Sobre</a></li>
      <li><a href="#carros">Carros</a></li>
      <li><a href="#hoteis">Hotéis</a></li>
      <li><a href="#restaurantes">Restaurante</a>   
   
</li>
<div class="user">
  <li class="username" id="user">
    <?php 
    $nomeLogado = $_SESSION['nome']; 
    echo substr($nomeLogado, 0, 2) ;

    
    ?>
</li>
<a href="../LOGIN/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>

</div>


      
<!--  
    <p class="sair" id="sairr">
        <a href="../LOGIN/logout.php">Sair</a>
    </p> -->
    </ul>
  </nav>
    
    <section class="banner" id="banner">
           
        <img src="../../IMGS/home1.jpg" alt="foto de fundo">
        <div class="textbox" data-lax-scale="100 1, 100 1, 0 1, 0 0" 
        data-lax-preset=" blurInOut fadeInOut">
            <h1 class="texto__principal"> ENCONTRE SUA PRÓXIMA VIAJEM AQUI!</h1>
            <p>Te daremos todo suporte necessário!</p>
 
            <button class="btn">VAMOS LÁ!</button>
        </div>
   
      </div>
    </section>
    <section class="sobre__container" id="about">
        <div class="container__flex">
          <div class="esquerda">
            <div class="img " >
              <img src="../../IMGS/a1.jpg" alt="" class="image1 " >
              <img src="../../IMGS/a2.jpg" alt="" class="image2">
            </div>
          </div>
          <div class="direita">
            <div class="heading" rightToLeft-.10>
              <h5>Te ajudamos a escolher o seu destino ainda hoje!</h5>
              <h2>BEM VINDO AO TRAVALLER!</h2>
              <p>O projeto Traveller será um portal queirá contemplar informações sobre viagens,cultura e história do lugar, quanto tempo sugestivo para permanecer na cidade (mínimo e máximo), mapas ou aplicativos que podem ajudar na locomoção,e a média de gasto por dia (mínimo e máximo). </p>
              <p>Se a cidadededestino exige alguma roupa específica, caso seja muito fria.  Dicas para comprar roupa apropriada no Brasil, com gráfico comparativo de preços e qualidade, em relação àcompra no Brasil ou no destino. Informações úteis como fuso, idioma predominante, bagagem, moeda, voltagem, tipo de tomada, documentos necessários, aluguel de carros e “como chegar”. </p>
           
            </div>
          </div>
        </div>
      </section>
      <section class="video_container" id="carros">
        <video src="../../videos/video_carros.mp4" loop muted autoplay class="video">        </video>

        <div class="texto">
        <h3>PROCURE E <span>ENCONTRE</span> O CARRO IDEAL PARA SUA VIAJEM!</h3>
        <p>Confira preços de carros e escolha o que te agradar!</p>
        <a id="btn" href="./Carros/index.html">ENCONTRE JÁ</a>
      </div>  
    </section>
      <br>
   
<section class="restaurant_container" id="restaurantes">  


  <div class="food">
    <img src="../../IMGS/prato1.png" alt="">
  </div>
  <div class="food_text">
<P>Tenha acesso a informações sobre os melhores restaurantes locais, seus pratos típicos e preços médios. 
tendo indicações de restaurantes mais próximos dos pontos turísticos e dicas de como fazer reservas antecipadas. Além disso, o portal oferecerá 
informações sobre dietas especiais, 
como vegetarianismo e veganismo, e restaurantes que atendam a essas demandas!</P>
    <a id="btn_restaurante"  href="./Restaurante/index.html">VER RESTAURANTES</a>
  
  </div>
  </div>
  

  <div>
  <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
  viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
  <defs>
  <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
  </defs>
  <g class="parallax">
  <use xlink:href="#gentle-wave" x="48" y="0" fill="#0b7d99" />
  <use xlink:href="#gentle-wave" x="48" y="3" fill="#1ac0e9" />
  <use xlink:href="#gentle-wave" x="48" y="5" fill="#63d5f1" />
  <use xlink:href="#gentle-wave" x="48" y="7" fill="#5696a7" />
  </g>
  </svg>
  </div>

  
  </div>

</section>

<section class="sessao_hotel" id="hoteis">
 <div class="hotel_text">
<h4 id="hoteis_text">Descubra Hoteis!!</h4>
<p>A área de hotéis do projeto Traveller oferece uma ampla variedade de opções de hospedagem para os viajantes, desde acomodações luxuosas até hostels econômicos. Com um sistema de reservas fácil de usar, é possível encontrar o lugar perfeito para ficar durante a sua viagem. Clique no botão para descobrir mais!</p>
<a href="./Hotel/index.html">ver hoteis</a>
  </div>

<div class="container" >
 
  <div id="wrapper" class="wrapper">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <div class="carousel">
          <img src="https://www.carimboepassaporte.com.br/wp-content/uploads/2022/08/onde-ficar-em-sao-paulo-hospedagem.jpg"
              alt="img" draggable="false">
          <img src="https://e1.pxfuel.com/desktop-wallpaper/993/470/desktop-wallpaper-hotel-hilton-sao-paulo-morumbi-sao-paulo-brazil-morumbi.jpg"
              alt="img" draggable="false">
          <img src="https://www.hoteisdeluxobrasil.com.br/wp-content/uploads/2020/11/caapa-1.jpg" alt="img"
              draggable="false">
          <img src="https://pousadastop.com.br/photospousadas/villasape/3.jpg" alt="img" draggable="false">
          <img src="https://www.kayak.com.br/rimg/himg/d0/cc/90/ice-49892-72907433_3XL-105998.jpg?width=1366&height=768&crop=true"
              alt="img" draggable="false">
          <img src="https://passageirodeprimeira.com/wp-content/uploads/2021/01/passageirodeprimeira.com-como-e-se-hospedar-nogrand-mercure-sp-itaim-bibi-flagship-da-marca-na-america-do-sul-grand-mercure.png"
              alt="img" draggable="false">
          <img src="https://www.pacoteshyatt.com.br/sao-paulo/wp-content/uploads/sites/3/2021/02/Co%CC%81pia-de-Co%CC%81pia-de-Club-View.jpg"
              alt="img" draggable="false">
          <img src="https://z.cdrst.com/foto/hotel-sf/12e1d/granderesp/mercure-sao-paulo-pinheiros-hotel-banio-b57295d.jpg"
              alt="img" draggable="false">
          <img src="https://cdn2.revistahoteis.com.br/wp-content/uploads/2017/07/Foto-1-Fachada.jpg" alt="img"
              draggable="false">
      </div>
      <i id="right" class="fa-solid fa-angle-right"></i>
  </div>
<!-- <a href="../home/Hotel/index.php">AAAAAAAAAAAAAAAA</a> -->
</div>
</section>


<div class="footer">
  <div class="contain">
  <div class="col">
    <h4>Empresa</h4>
    <ul>
    <li>Sobre nós</li>
      <li>Missão</li>
      <li>Serviços</li>
      <li>Redes sociais</li>
      <li>Entre em contato</li>
    </ul>
  </div>
  <div class="col">
    <h4>Produtoss</h4>
    <ul>
    <li>Sobre</li>
      <li>Carros</li>
      <li>Hotéis</li>
      <li>Restaurantes</li>
      <li>Entre em contato</li>
    </ul>
  </div>
  
  <div class="col">
    <h4>Recursos</h4>
    <ul>
    <li>Webmail</li>
      <li>Código de resgate</li>
      <li>Busca WHOIS</li>
      <li>Mapa do site</li>
      <li>Templates para web</li>
      <li>Templates de e-mail</li>
    </ul>
  </div>
  <div class="col">
    <h4>Suporte</h4>
    <ul>
    <li>Contate-nos</li>
      <li>Chat online</li>
      <li>Abrir chamado</li>
    </ul>
  </div>
  <div class="col">
    <h4>Social</h4>
    <ul id="icons">
      <li><i class="fa-brands fa-whatsapp icon"></i></li>
      <li><i class="fa-brands fa-instagram icon"></i></li>
      <li><i class="fa-brands fa-facebook icon"></i></li>
    </ul>
  </div>
<div class="clearfix"></div>
</div>
</div>


<script></script><style>

  
</style>
<script src="../../Scripts/hoteis.js"></script>
<script src="../../Scripts/sair.js"></script>
</body>


</html>