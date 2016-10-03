<?php
session_start();
include 'classes/conexao.class.php';

if (isset($_POST['login'])) {
    $logForm = $_POST['login'];
    $senForm = $_POST['senha'];
    
    $obj_con = new Conexao('regulus', 'BDGRUPO12', 'BDGRUPO12', 'BDGRUPO12');
    
    $dados = $obj_con->select($logForm, $senForm);
    
    $_SESSION['opcao']=$dados[2];
    
	    if(empty($dados))
	    	header('Location:index.php?usuario=NOK');
	    else{
	    	$_SESSION['usuario']=$dados[0]['login'];
	    	header('Location:usuario.php');
	    }	    
}
?>