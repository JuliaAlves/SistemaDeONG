<?php
session_start();
?>
<head>
  <meta charset="utf-8">
  <title>ONG</title>
  <link rel="icon" href="../images/icone.png">
  <link rel="stylesheet" href="../styles/layout.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="../styles/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="../styles/owl.theme.css">
  <link rel="stylesheet" type="text/css" href="../styles/owl.transitions.css">
  <script type="text/javascript" src="jquery.js"></script>
</head>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="home.php" class="tHome">Amigos do Bem</a></h1>
      <h2>Juntos somos mais!</h2>
    </div>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="#">Como Ajudar</a></li>
        <li><a href="#">Doe Agora</a></li>
        <?php
          if (isset($_GET['sair']))
            $_SESSION['logado'] = 'NÃO';

          if ($_SESSION['logado']=="SIM"){
            echo "<li><a href='".$_SESSION['opcao'].".php'>Minha Area</a></li>";
            echo "<li><a href='home.php?sair'>Sair</li>";
          }
          else {
            echo "<li><a href='Login.php'>Login</a></li>";
            echo "<li class='last'><a href='cadastro.php'>Cadastrar</a></li>"; 
          }
        ?>
 
      </ul>
    </nav>
  </header>
</div>  
