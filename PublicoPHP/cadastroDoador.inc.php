<html>
	 <?php include 'menu.inc.php' ?>
	<body>
		<div id="cadastro2">
			<h2>Doador(a), preencha os seguintes campos para efetuar o cadastro</h2>
			<form action="cadastrar.php" method="post">
			<label>Nome completo: </label><input name="nome" type="text">
			<br>
			<br>
			<label>Telefone: </label><input type="number" name="telefone" min="0">
			<br>
			<br>
			<label>Com que frequência você irá doar?</label>
                <input type="radio" name="frequencia" value="Casual"><div id="f1">Casual</div><br>
                <input type="radio" name="frequencia" value="Mensal"><div id="f2">Mensal</div><br>
                <input type="radio" name="frequencia" value="Anual"><div id="f3">Anual</div><br>  
            <br>    
            <label>RG: </label><input type="text" name="RG" min="0">
			<br>
			<br>
			<label>Endereço: </label><input name="endereco" type="text">
			<br>
			<br>
            <label>Email: </label><input name="email" type="text">
			<br> 
            <input type="submit" value="Enviar" class="botao">    
			</form>
		</div>
		<img id="doador" src="doador2.png"></img>
    </body>
</html>