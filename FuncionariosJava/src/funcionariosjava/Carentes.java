/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package funcionariosjava;
import java.sql.*;
/**
 *
 * @author u16182
 */
public class Carentes {
    public int quantosCarentes() throws Exception{
        MeuResultSet resultado= null;
        try{
            String sql="SELECT COUNT(*) AS QUANTOS FROM Carente";
             DAOs.getBD().prepareStatement (sql);
             resultado = (MeuResultSet)DAOs.getBD().executeQuery();
             resultado.first();
        }
        catch(SQLException erro){
          throw new Exception ("Erro ao verificar carentes");
        }
        return resultado.getInt("QUANTOS");
    }
    
    public MeuResultSet getCarentes() throws Exception{
        MeuResultSet resultado = null;
        try{
            String sql= "SELECT * FROM Carente";
            DAOs.getBD().prepareStatement(sql);
            resultado = (MeuResultSet)DAOs.getBD().executeQuery ();
        }
        catch(SQLException erro){
            throw new Exception ("Erro ao recuperar livros");
        }
        return resultado;
    }
    
    public Carente getCarente(int cod)throws Exception{
        Carente carente= null;
        try{
            String sql= "SELECT * FROM Carente WHERE codCarente=?";
            DAOs.getBD().prepareStatement(sql);
            DAOs.getBD().setInt(1, cod);
            MeuResultSet resultado = (MeuResultSet)DAOs.getBD().executeQuery ();
            resultado.first();
            carente= new Carente(resultado.getString("nome"),
                                 resultado.getString("rg"),
                                 resultado.getString("email"),
                                 resultado.getString("telefone"),
                                 resultado.getString("renda"));
        }
        catch(SQLException erro){
         throw new Exception ("Erro ao procurar carente");
        }

        return carente;
    }
    
}
