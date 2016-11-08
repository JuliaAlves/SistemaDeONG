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
    
    public Carente getCarente(String rg)throws Exception{
        
    }
    
}
