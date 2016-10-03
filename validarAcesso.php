<?php
session_start();
include 'classes/conexao.class.php';

//receber dados do formulário index.php
if (isset($_POST['login'])) {
    $logForm = $_POST['login'];
    $senForm = $_POST['senha'];
    
    //instanciar a classe conexão
    $obj_con = new Conexao('regulus', 'BDGRUPO12', 'BDGRUPO12', 'BDGRUPO12');
    
    //fazer o SELECT no BD
    $dados = $obj_con->select($logForm, $senForm);
    
    //testar se SELECT deu certo
   	// print_r($dados);
	    if(empty($dados))
	    	header('Location:index.php?usuario=NOK');
	    else{
	    	$_SESSION['usuario']=$dados[0]['login'];
	    	header('Location:usuario.php');
	    }	    
}
?>