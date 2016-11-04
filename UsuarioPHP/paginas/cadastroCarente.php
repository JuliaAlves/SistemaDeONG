<html>
<div id="cadastro2">
      <h2>Carente, preencha os seguintes campos para efetuar o cadastro</h2>
      <br><br>
      <form action="cadastrar.php" method="post" name="frm_cadastro">
      <label>Nome completo: </label><input type="text" name="nome">
      <br><br><br>
      <label>Telefone: </label><input type="number" min="0" name="telefone">
      <br><br><br>
      <label>Renda:</label>
      <br><br>
                <input type="radio" id="renda1" name="r" value="1"><div id="renda">Entre R$50  e R$200</div><br>
                <input type="radio" id="renda2" name="r" value="2"><div id="renda">Entre R$200 e R$500</div><br>
                <input type="radio" name="r" id="renda3" value="3"><div id="renda">Entre R$500 e R$800</div><br>
      <br>
      <label>RG: </label><input type="number" min="0" name="RG">
      <br><br><br>    
            <label>Email: </label><input type="email" name="email">
      <br> 
            <input type="submit" value="Enviar" class="botao">    
      </form>
    </div>
      <img src="../images/fome.jpg" class="imgCadastro">
    </body>
</html>