<?php
class Conexao {
    // atributos/propriedades da classe
    public $con;
    protected $stmt; //recurso da conexão
    protected $host = 'regulus';
    protected $database = 'BDGRUPO12';
    protected $user = 'BDGRUPO12';
    protected $senha = 'BDGRUPO12';

    // metodo construtor
    public function __construct() {
        $connectionInfo = array("Database"=>$this->database,
                                "PWD"=>$this->senha,
                                "UID"=>$this->user,
                                "CharacterSet" => "UTF-8");

        $this->con = sqlsrv_connect($this->host,$connectionInfo);

        if( $this->con === false ) {
            //exit ("Falha na conexao com o banco de dados.");
            die( print_r( sqlsrv_errors(), true));
        }
        return true;
    }//fim __construct
    public function __destruct() {
        sqlsrv_close($this->con);
    }//fim __destruct

    // método para executar a consulta SQL no banco
    private function execSQL($consulta) {
        if ($consulta === '') {
            return false;
        }
        $stmt = sqlsrv_query($this->con, $consulta);

        if ($stmt) {
            $this->stmt=$stmt;
        } else {
            die(print_r(sqlsrv_errors(),true));
        }
    } //fim execSQL

    //método para rodar um SELECT no BD
    public function select($sql) {
        //define SELECT
        //$sql = "SELECT * from cinemaAcessos where login='".$login."' and senha='".$senha."'";

        //executa o SELECT através do método execSQL
        $this->execSQL($sql);

        //devolve dados do SELECT para quem chamou o método
        $dados='';
        while ($linha = sqlsrv_fetch_array($this->stmt, SQLSRV_FETCH_ASSOC))   {
            $dados[] = $linha;
        }
        return $dados;
    } //fim select




        public function insert($sql) {
        //executa o INSERT através do método execSQL
        $this->execSQL($sql);
        
        if ($this->stmt)
            return true;
        else
            return false;
    } 
} //fim da classe conexao
