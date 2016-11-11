<?php
session_start();
include 'classes/conexao.class.php';

if (isset($_POST['login'])) {
    $logForm = $_POST['login'];
    $senForm = $_POST['senha'];
    
    $obj_con = new Conexao;
    $dados = $obj_con->select("SELECT * FROM Usuario WHERE login='".$logForm."' AND senha='".$senForm."'");
        
	    if(empty($dados)){
	    	header('Location:login.php?cadastro="NAO"');
	    }
	    else{
	    	$_SESSION['usuario']=$dados[0]['login'];
	    	header('Location:home.php');
	    	$_SESSION['logado']="SIM";

	    	$dados=$obj_con->select("SELECT * FROM UsuarioDoador WHERE login='".$logForm."'");
			if(empty($dados)){
				$dados=$obj_con->select("SELECT * FROM UsuarioVoluntario WHERE login='".$logForm."'");
				if(empty($dados))
					$_SESSION['opcao']="Carente";
				else 
					$_SESSION['opcao']="Voluntario";
			}
			else 
				$_SESSION['opcao']="Doador";
	    }	    

}
?>