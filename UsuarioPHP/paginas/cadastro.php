<html>

	<body>
        <?php include 'menu.inc.php' ?>
		<div id="cadastro2">
			<h2 class="title">Preencha os seguintes campos para prosseguir o cadastro</h2>
			<br><br><br>
			<form action="cadastrar.php" method="post" name="frm_cadastro">
			<label>Nome de usuário: </label><input type="text" name="usuario" class="input">
			<br>
			<br>
			<label>Senha: </label><input type="password" name="senha" class="input">
			<br>
			<br>
			<label>O que você é..?</label>
				<select name="opcao">
					<option>Selecione</option>
					<option>Carente</option>
					<option>Voluntário</option>
					<option>Doador</option>
				</select>
            <input type="submit" value="Prosseguir" class="botao">    
			</form>
		</div>
		<img src="../images/icone.png" class="imgCadastro"> 
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="wrapper row3">
          <footer id="footer" class="clear">
            <p class="fl_left">Copyright &copy; 2016 - Todos os direitos reservados - <a href="home.php">Amigos do Bem</a></p>
          </footer>
        </div>
	</body>
</html>