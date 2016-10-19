package funcionariosjava;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author u16182
 */
public class DAOs
{
    private static MeuPreparedStatement bd;

    private static Usuarios usuarios;
    //um como esse para cada classe DAO

    static
    {
        try
        {
            DAOs.bd = new MeuPreparedStatement (
                      "com.microsoft.sqlserver.jdbc.SQLServerDriver",
                      "jdbc:sqlserver://regulus:1433;databasename=BDGRUPO12",
                      "BDGRUPO12", "BDGRUPO12");

            DAOs.usuarios = new Usuarios ();
            //um como esse para cada classe DAO
        }
        catch (Exception erro)
        {
            System.err.println ("Problemas de conexao com o BD");
            System.exit(0); // aborta o programa
        }
    }

    public MeuPreparedStatement getBD ()
    {
        return DAOs.bd;
    }

    public Usuarios getLivros ()
    {
        return DAOs.usuarios;
    }
    //um como esse para cada classe DAO
}
