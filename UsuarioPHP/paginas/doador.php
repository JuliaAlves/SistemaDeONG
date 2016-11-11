<!DOCTYPE html>
<html>
<?php require_once 'menu.inc.php'; ?>

<div class="wrapper row2">

  </section>
  <div id="content">
      <section>
        <article>
          <br>
          <br>
          <br>
          <center><?php echo "<h1>" .  $_SESSION['usuario'] . ", seja bem-vindo(a) </h1>"  ?></center>
          <br>
          <center><p>Obrigado(a) por se juntar à nossa ONG e se tornar um(a) doador(a)!</p></center>
          <br><br>

          <div class="content">
            <div class="admin-panel"><b class="admin-text">Configurações da conta</b></div>
            <span class="cog octicon octicon-gear"></span>
            <div class="menu">
              <div class="arrow"></div>
                <a onclick="carregar('perfil.php')" href="#">Seu Perfil <span class="icon octicon octicon-person"></span></a>
                <a href="#">Alterar Senha<span class="icon octicon octicon-pencil"></span></a>
                <a href="#">Alterar Endereço <span class="icon octicon octicon-pencil"></span></a>
                <a href="#">Alterar Freq. de Doação <span class="icon octicon octicon-pencil"></span></a>
              </div>
            </div>
          </div>
          <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

          <script src="../js/index.js"></script>
        </article>
      </section>
      <div id="perfil"></div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="wrapper row3">
          <footer id="footer" class="clear">
            <p class="fl_left">Copyright &copy; 2016 - Todos os direitos reservados - <a href="home.php">Amigos do Bem</a></p>
          </footer>
        </div>


        <script>
         function carregar(pagina){
         $("#perfil").load(pagina);
         }
        </script>
</html>
