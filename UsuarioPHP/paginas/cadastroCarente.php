<?php include 'menu.inc.php' ?>
<html>
<div id="cadastro2">
      <h2>Carente, preencha os seguintes campos para efetuar o cadastro</h2>
      <br><br>
      <form action="cadastrar.php" method="post" name="frm_cadastro">
      <label>Nome completo: </label><input type="text" name="nome" class="input">
      <br><br><br>
      <label>Telefone: </label><input type="number" min="0" name="telefone" class="input">
      <br><br><br>
      <label>Renda:</label>
      <br><br>
                <input type="radio" id="renda1" name="r" value="1"><div id="renda">Entre R$250  e R$500</div><br>
                <input type="radio" id="renda2" name="r" value="2"><div id="rendaSeg">Entre R$500 e R$750</div><br>
                <input type="radio" name="r" id="renda3" value="3"><div id="rendaTerc">Entre R$750 e R$950</div><br>
      <br>
      <label>RG: </label><input type="number" min="0" name="RG" class="input">
      <br><br><br>    
            <label>Email: </label><input type="email" name="email" class="input">
      <br> 
            <input type="submit" value="Enviar" class="botao">    
      </form>
    </div>
     <!-- <img src="../images/fome.jpg" class="imgCadastro"> -->
        <br><br><br><br><br><br>
        <div class="wrapper row3">
        <footer id="footer" class="clear">
            <p class="fl_left">Copyright &copy; 2016 - Todos os direitos reservados - <a href="home.php">Amigos do Bem</a></p>
        </footer>
        </div>
    </body>
</html>