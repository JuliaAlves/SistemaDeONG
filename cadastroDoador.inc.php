<html>
	 <?php include 'menu.inc.php' ?>
	<body>
		<div id="cadastro2">
			<h2>Doador(a), preencha os seguintes campos para efetuar o cadastro</h2>
			<form>
			<label>Nome completo: </label><input type="text">
			<br>
			<br>
			<label>Telefone: </label><input type="number" min="0">
			<br>
			<br>
			<label>Com que frequência você irá doar?</label>
                <input type="radio" name="r" value="1"><div id="f1">Casual</div><br>
                <input type="radio" name="r" value="2"><div id="f2">Mensal</div><br>
                 <input type="radio" name="r" value="3"><div id="f3">Anual</div><br>  
            <br>    
            <label>RG: </label><input type="text" numberonly min="0">
			<br>
			<br>   
            <label>Email: </label><input type="text">
			<br> 
            <input type="submit" value="Enviar" class="botao">    
			</form>
		</div>
		<img id="doador" src="doador2.png"></img>
    </body>
</html>