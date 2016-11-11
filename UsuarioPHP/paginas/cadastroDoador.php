<html>
<?php 
  require_once 'menu.inc.php';
?>
<div id="cadastro2">
      <h2>Doador(a), preencha os seguintes campos para efetuar o cadastro</h2>
      <br><br><br>
      <form action="cadastrar.php" method="post" name="frm_cadastro">
      <label>Nome completo: </label><input type="text" name="nome" class="input">
      <br><br><br>
      <label>Telefone: </label><input type="number" min="0" name="telefone" class="input">
      <br><br><br>
      <label>Com que frequência você irá doar?</label>
      <br><br>
                <input type="radio" name="frequencia" value="Casual" id="fre1"><div id="fre">Casual</div><br>
                <input type="radio" name="frequencia" value="Mensal" id="fre2"><div id="freSeg">Mensal</div><br>
                <input type="radio" name="frequencia" value="Anual" id="fre3"><div id="freTerc">Anual</div><br>  
            <br>    
            <label>RG: </label><input type="number"  min="0" name="RG" class="input">
            <br><br><br>   
            <label>Endereço: </label><input type="text" name="endereco" class="input">
            <br><br><br>  
            <label>Email: </label><input type="email" name="email" class="input">
      <br> 
            <input type="submit" value="Enviar" class="botao">    
      </form>
    </div>
   <!--  <img src="../images/doador2.png" class="imgCadastro"></img> -->
        <br><br><br><br>
        <div class="wrapper row3">
          <footer id="footer" class="clear">
            <p class="fl_left">Copyright &copy; 2016 - Todos os direitos reservados - <a href="home.php">Amigos do Bem</a></p>
        </footer>
        </div>
    </body>
</html>