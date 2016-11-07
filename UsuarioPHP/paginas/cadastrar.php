<?php
	require_once 'classes/conexao.class.php';

	$obj_con = new Conexao();
	session_start();

	if ( (isset($_POST['usuario'])) && (isset($_POST['senha'])) && (isset($_POST['opcao'])) ){
		
		$usuario=$_POST['usuario'];
		$senha=$_POST['senha'];
		$opcao=$_POST['opcao'];

        $sql="INSERT INTO Usuario VALUES ('$usuario','$senha','$opcao')";
        $inseriu=$obj_con->insert($sql);
		$_SESSION['opcao']=$opcao;
		$_SESSION['usuario']=$usuario;
	}

		if ($_SESSION['opcao']=='Doador'){
			include "cadastroDoador.php";
			if( isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['endereco'])
				&& isset($_POST['frequencia']) && isset($_POST['RG']) && isset($_POST['telefone'])){

					$nome=$_POST['nome'];
					$email=$_POST['email'];
					$endereco=$_POST['endereco'];
					$frequencia=$_POST['frequencia'];
					$RG= $_POST['RG'];
					$telefone=$_POST['telefone'];
					

					$sql = "INSERT INTO Doador VALUES ('$nome','$telefone','$endereco','$frequencia','$RG','$email')";
					$inseriu=$obj_con->insert($sql);

					$sql= "INSERT INTO usuarioDoador VALUES ('".$_SESSION['usuario']."',(SELECT codDoador FROM Doador WHERE nome='$nome'))";      
		            $inseriu=$obj_con->insert($sql);

		    }
		}

	    else if ($_SESSION['opcao']=='Carente'){
			include "cadastroCarente.php";
	           if (isset($_POST['nome'])&&isset($_POST['email'])&& isset($_POST['endereco'])&&
					isset($_POST['renda'])&&isset($_POST['RG'])&&isset($_POST['telefone'])){
	                    
	                    $nome=$_POST['nome'];
						$email=$_POST['email'];
						$endereco=$_POST['endereco'];
						$renda=$_POST['renda'];
						$RG= $_POST['RG'];
						$telefone=$_POST['telefone'];
	                    
						$sql = "INSERT INTO Carente VALUES ('$nome','$telefone','$renda','$RG','$email','$endereco')";
						$inseriu=$obj_con->insert($sql);
	                    
	                    $sql="INSERT INTO usuarioCarente VALUES ('".$_SESSION['usuario']."',(SELECT codCarente FROM Carente WHERE nome='$nome'))"; 
				        $inseriu=$obj_con->insert($sql);
	            }   
	        }

	            
		else if($_SESSION['opcao']=='Voluntário'){
			include "cadastroVoluntario.php";
	            if (isset($_POST['nome'])&&isset($_POST['email'])&& isset($_POST['RG'])&&isset($_POST['telefone'])){
	                $nome=$_POST['nome'];
					$email=$_POST['email'];
	                $RG= $_POST['RG'];
					$telefone=$_POST['telefone'];
	                
	                $sql = "INSERT INTO Voluntario VALUES ('$nome','$telefone','$RG','$email')";
					$inseriu=$obj_con->insert($sql);
	                
	                 $sql ="INSERT INTO usuarioVoluntario VALUES ('".$_SESSION['usuario']."',(SELECT codVoluntario FROM Voluntario WHERE nome='$nome'))"; 
				     $inseriu=$obj_con->insert($sql);
	            }
			}
	        
	
	
?>