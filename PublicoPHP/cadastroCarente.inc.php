<html>
	 <?php include 'menu.inc.php' ?>
	<body>
		<div id="cadastro2">
			<h2>Carente, preencha os seguintes campos para efetuar o cadastro</h2>
			<form action="cadastrar.php" method="post" name="frm_cadastro">
			<label>Nome completo: </label><input type="text" name="nome">
			<br>
			<br>
			<label>Telefone: </label><input type="number" name="telefone" min="0">
			<br>
			<br>
			<label>Renda:</label>
                <input type="radio" name="frequencia" value="1"><div id="renda1">Entre R$ e</div><br>
                <input type="radio" name="frequencia" value="2"><div id="renda2">Entre R$ e</div><br>
                 <input type="radio" name="frequencia" value="3"><div id="renda3">Entre R$ e</div><br>
            <br>    
            <label>RG: </label><input type="number" name="RG" min="0">
			<br>
			<br>   
            <label>Email: </label><input type="text" name="email">
			<br> 
            <input type="submit" value="Enviar" class="botao">    
			</form>
		</div>
		<img src="fome.jpg"></img>
    </body>
</html>