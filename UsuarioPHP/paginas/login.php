<div class="divTransparente">
	<?php 
		require_once 'menu.inc.php';
	?>
	<div class="divLogin">
		<form action="validarAcesso.php" method="post">
			<br><br><br>
			<h2 class="titloLogin">Digite as informações para Entrar</h2>
			<br><br><br>
			<label class="lblLogin">Usuario</label>
			<input type="text" name="login" class="ipLogin">
			<br><br>
			<label class="lblLogin">Senha</label>
			<input type="password" name="senha" class="ipSenha">
			<br><br>
			<input type=submit value="Logar" class= "botao" name="btn_1">
		</form>
	</div>
</div>