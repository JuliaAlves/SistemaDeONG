<?php include 'menu.inc.php' ?>
<html>
<div id="cadastro2">
      <h2>Voluntário(a), preencha os seguintes campos para efetuar o cadastro</h2>
      <br><br><br>
      <form action="cadastrar.php" method="post" name="frm_cadastro">
      <label>Nome completo: </label><input type="text" name="nome" class="input">
      <br><br><br>
      <label>Telefone: </label><input type="number" min="0" name="telefone"class="input">
      <br><br><br>    
            <label>RG: </label><input type="number" min="0" name="RG" class="input">
      <br><br><br>   
            <label>Email: </label><input type="email" name="email" class="input">
      <br> 
            <input type="submit" value="Enviar" class="botao">    
      </form>
    </div>
      <img src="voluntario.jpg"  class="../images/imgCadastro"></img>
    </body>
</html>