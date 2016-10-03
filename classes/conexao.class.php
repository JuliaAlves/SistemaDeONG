<?php

class Conexao {
    //atributos da classe
    public $con;
    protected $stmt;
    
    //método construtor
    public function __construct($host,$database,$user,$senha) {
        $connectInfo = array("Database"=>$database,
                             "PWD"=>$senha,
                             "UID"=>$user);
        $this->con = sqlsrv_connect($host,$connectInfo);
        if ($this->con === false) {
            //encerrar procedimento
            die( print_r(sqlsrv_errors(), true));
        }
    }// fim do método __contruct
    
    //método destrutor
    public function __destruct() {
        sqlsrv_close($this->con);
    }//fim do método __destruct
    
    //método para executar a consulta SQL no banco
    public function execSQL($consulta) {
        if ($consulta === '') {
            return false;
        }
        $stmt = sqlsrv_query($this->con,$consulta);
        
        if ($stmt) {
            $this->stmt = $stmt;
        } else {
            $this->sql_error($consulta);
        }
    }// fim do método execSQL
    
    //método para executar um SELECT no BD
    public function select($login,$senha) {
        //definir o SELECT
        $sql = "SELECT * from Usuario where login='$login' and senha='$senha'";
           //$sql = "SELECT * from Usuario"; 
        //executar o SELECT atraavés do método execSQL
        $this->execSQL($sql);
        
        // devolve dados do SELECT para quem chamou o método
        $dados = '';
        while ($linha = sqlsrv_fetch_array($this->stmt,SQLSRV_FETCH_ASSOC)) {
            $dados[] = $linha;
        }
        return $dados;
    } //fim do método select
    
}
