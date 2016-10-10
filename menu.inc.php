<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
<link rel="icon" href="icone.png">
        <div id="menu" class="menu-container">
        <div class="opcao">
        <ul class="menu clearfix">
            <li><a href="#">Home</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Como Ajudar</a>
                <ul class="sub-menu clearfix">
                    <li><a href="#">Voluntariado</a></li>
                    <li><a href="#">Doações</a></li>
                    <li><a href="#">Distribuições</a></li>
                </ul></li>
            <li><a href="#">Fale conosco</a>
                <ul class="sub-menu clearfix">
                    <li><a href="#">Localização</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </li>
            <li><a href="#">Doe Agora</a></li>
            <li><a href="#">Login</a>
                <ul class="sub-menu clearfix">
                    <form action="validarAcesso.php" method="post" name="frm_logar">
                    <li>Usuário:<input type=text name="login" required></li>
                    <li>Senha: <input type=password name="senha" required></li>
                        <li><input type=submit value="Logar" name="btn_1"></form></li>
                </ul></li>
            <li><a href="cadastro.php" id="cadastro">Cadastre-se</a></li>
        </ul>
        </div>
        </div>
</head>
</html>
