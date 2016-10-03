<?php
	function EstabeleceConexao(){
		$serverName= 'regulus';
		$uid='BDGRUPO12';
		$pwd='BDGRUPO12';
		$database='BDGRUPO12';

		$dados= array("UID"=>$uid,
					 "PWD"=>$pwd,
					 "DataBase"=>$database);

		$conexao=sqlsrv_connect($serverName,$dados);

		if(!$conexao)
			die("Falha na conexão com o BD");
		
		return $conexao;
	}
?>