<html>
<?php 
  require_once 'menu.inc.php';
?>
<div id="cadastro2">
      <h2>Doador(a), preencha os seguintes campos para efetuar o cadastro</h2>
      <br><br><br>
      <form action="cadastrar.php" method="post" name="frm_cadastro">
      <label>Nome completo: </label><input type="text" name="nome">
      <br><br><br>
      <label>Telefone: </label><input type="number" min="0" name="telefone">
      <br><br><br>
      <label>Com que frequência você irá doar?</label>
      <br><br>
                <input type="radio" name="frequencia" value="Casual"><div id="fre">Casual</div><br>
                <input type="radio" name="frequencia" value="Mensal"><div id="fre">Mensal</div><br>
                <input type="radio" name="frequencia" value="Anual"><div id="fre">Anual</div><br>  
            <br>    
            <label>RG: </label><input type="text" numberonly min="0" name="RG">
            <br><br><br>   
            <label>Endereço: </label><input type="text" name="endereco">
            <br><br><br>  
            <label>Email: </label><input type="email" name="email">
      <br> 
            <input type="submit" value="Enviar" class="botao">    
      </form>
    </div>
    <img src="../images/doador2.png" class="imgCadastro"></img>
    </body>
</html>