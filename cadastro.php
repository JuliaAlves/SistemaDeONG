<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estiloCadastro.css">
	</head>
	<body>
        <?php include 'menu.inc.php' ?>
		<div id="cadastro">
			<h2>Preencha os seguintes campos para prosseguir o cadastro</h2>
			<form>
			<label>Nome de usuário: </label><input type="text">
			<br>
			<br>
			<label>Senha: </label><input type="password">
			<br>
			<br>
			<label>O que você é?</label>
				<select>
					<option>Carente</option>
					<option>Voluntário</option>
					<option>Doador</option>
				</select>
            <input type="submit" value="Enviar" class="botao">    
			</form>
		</div>
		<img src="cadastro.png"></img> gsngdnags
	</body>
</html>