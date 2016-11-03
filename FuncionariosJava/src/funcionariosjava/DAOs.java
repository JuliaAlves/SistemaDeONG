package funcionariosjava;

public class DAOs
{
    private static MeuPreparedStatement bd;

    private static Funcionarios funcionarios; 
    //um como esse para cada classe DAO

    static
    {
        try
        {
            DAOs.bd = new MeuPreparedStatement (
                      "com.microsoft.sqlserver.jdbc.SQLServerDriver",
                      "jdbc:sqlserver://regulus:1433;databasename=BDGRUPO12", 
                      "BDGRUPO12", "BDGRUPO12");

            DAOs.funcionarios= new Funcionarios();
            //um como esse para cada classe DAO
        }
        catch (Exception erro)
        {
            System.err.println ("Problemas de conexao com o BD");
            System.exit(0); // aborta o programa
        }
    }

    public static MeuPreparedStatement getBD ()
    {
        return DAOs.bd;
    }

    
    public Funcionarios getFuncionarios ()
    {
        return DAOs.funcionarios;
    }
//um como esse para cada classe DAO
}
