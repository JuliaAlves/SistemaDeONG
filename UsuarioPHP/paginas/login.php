<div class="divTransparente" id="modal">
	<?php 
		require_once 'menu.inc.php';
	?>
	<div class="divLogin">
		<form action="validarAcesso.php" method="post">
			<br><br><br>
			<h2 class="titloLogin">Digite as informações para entrar na sua conta</h2>
			<br><br><br>
			<label class="lblLogin">Usuário</label>
			<input type="text" name="login" class="ipLogin">
			<br><br>
			<label class="lblLogin">Senha</label>
			<input type="password" name="senha" class="ipSenha">
			<br>
			<input type=submit value="Logar" class= "botao" name="btn_1">
		</form>
	</div>
</div>
<script>
 var modal = document.getElementById('modal');
 
 window.onclick = function(event){
 	if(event.target == modal){
 		window.location.href = "index.php";
 	}
 }
</script>