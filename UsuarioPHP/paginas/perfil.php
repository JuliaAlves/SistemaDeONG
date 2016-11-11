
          <?php
           session_start();
           include 'classes/conexao.class.php';
           $obj_con = new Conexao;
           $dados = $obj_con->select("SELECT * FROM doador WHERE codDoador IN(SELECT codDoador FROM usuarioDoador WHERE login= '".$_SESSION['usuario']."')");

          if(!empty($dados))
           {
             echo "<div id='perfil2'>";

             echo "Nome: "  .$dados[0]['nome']. "<br> \n";

             echo "<br>";

             echo "Telefone: " .$dados[0]['telefone']. " <br> \n";

             echo "<br>";

             echo "Endereço: " .$dados[0]['endereco']. " <br> \n";

             echo "<br>";

             echo "Frequência de doação: " .$dados[0]['frequenciaDoacao']. " <br> \n";

             echo "<br>";

             echo "RG: " .$dados[0]['RG']. " <br> \n";

             echo "<br>";

             echo "Email: " .$dados[0]['email']. " <br> \n"; 

             echo "</div>";
            }
          ?>
