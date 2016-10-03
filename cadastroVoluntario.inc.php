<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estiloCadastro.css">
	</head>
	<body>
        <?php include 'menu.inc.php' ?>
		<div id="cadastro">
			<h2>Voluntário(a), preencha os seguintes campos para efetuar o cadastro</h2>
			<form>
			<label>Nome completo: </label><input type="text">
			<br>
			<br>
			<label>Telefone: </label><input type="number" min="0">
			<br>
			<br>    
            <label>RG: </label><input type="number" min="0">
			<br>
			<br>   
            <label>Email: </label><input type="text">
			<br> 
            <input type="submit" value="Enviar" class="botao">    
			</form>
		</div>
		<img id="doador" src="voluntario.jpg"></img>
    </body>
</html>