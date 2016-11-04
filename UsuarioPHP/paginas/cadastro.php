<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles/layout.css" type="text/css">
	</head>
	<body>
        <?php include 'menu.inc.php' ?>
		<div id="cadastro2">
			<h2 class="title">Preencha os seguintes campos para prosseguir o cadastro</h2>
			<br><br><br>
			<form action="cadastrar.php" method="post" name="frm_cadastro">
			<label>Nome de usuário: </label><input type="text" name="usuario">
			<br>
			<br>
			<label>Senha: </label><input type="password" name="senha">
			<br>
			<br>
			<label>O que você é?</label>
				<select name="opcao">
					<option>Selecione</option>
					<option>Carente</option>
					<option>Voluntário</option>
					<option>Doador</option>
				</select>
            <input type="submit" value="Prosseguir" class="botao">    
			</form>
		</div>
		<img src="../images/cadastro.png" class="imgCadastro"> 
	</body>
</html>