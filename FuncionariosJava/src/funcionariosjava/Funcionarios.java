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
public class Funcionarios {

    /**
     * 
     * @param func
     * @throws Exception
     */
    public void novoFuncionario (Funcionario func) throws Exception
    {
        if (func==null)
            throw new Exception ("Informações não fornecidas");

        try
        {
            String sql;

            sql = "INSERT INTO Funcionario " +
                  "VALUES (?,?,?,?,?,?,?)";

            DAOs.getBD().prepareStatement (sql);

            DAOs.getBD().setInt    (1, func.getMatricula());
            DAOs.getBD().setString (2, func.getNome ());
            DAOs.getBD().setString (3, func.getEndereco());
            DAOs.getBD().setString (4, func.getRG());
            DAOs.getBD().setString (5, func.getCPF());
            DAOs.getBD().setString (6, func.getTelefone());
            DAOs.getBD().setString (7, func.getSenha());

            DAOs.getBD().executeUpdate ();
            DAOs.getBD().commit();            
        }
        catch (SQLException erro)
        {
             erro.printStackTrace();
            throw new Exception ("Erro ao cadastrar funcionario");
        }
    }
    public boolean Cadastrado(Funcionario func) throws Exception
    {
         if (func==null)
            throw new Exception ("Informações não fornecidas");
        boolean retorno= false;
        try
        {
            String sql;
            sql= "SELECT * FROM Funcionario "+
                  "WHERE matricula = ? or CPF = ?";
            
            DAOs.getBD().prepareStatement (sql);
            
            DAOs.getBD().setInt(1, func.getMatricula());
            DAOs.getBD().setString(2, func.getCPF());
            
            MeuResultSet resultado = (MeuResultSet)DAOs.getBD().executeQuery();

            retorno = resultado.first();
        }
        catch(SQLException err){
            err.printStackTrace();
             throw new Exception ("Erro ao verificar cadastro");
        }
        return retorno;
    }
        
    public boolean usuarioValido (int mat, String senh) throws Exception
    {
        boolean retorno = false;

        try
        {
            String sql;

            sql = "SELECT * " +
                  "FROM Funcionario " +
                  "WHERE matricula=? AND senha=?";

            DAOs.getBD().prepareStatement(sql);

            DAOs.getBD().setInt(1, mat);
            DAOs.getBD().setString(2, senh);

            MeuResultSet resultado = (MeuResultSet)DAOs.getBD().executeQuery();

            retorno = resultado.first();
        }
        catch (SQLException erro)
        {
            throw new Exception ("Erro ao Logar");
        }

        return retorno;
    }
    
    public MeuResultSet selecionaUltimo()throws Exception
    {
        MeuResultSet resultado=null;
        
        try
        {
            String sql;
            sql="SELECT * FROM Funcionario";
            DAOs.getBD().prepareStatement(sql);
            resultado = (MeuResultSet)DAOs.getBD().executeQuery();
            resultado.afterLast();
            resultado.previous();
        }
        catch(Exception erro)
        {
            erro.printStackTrace();
            throw new Exception("Erro ao selecionar matricula");
        }
        
        return resultado;
    }
    public MeuResultSet getFuncionario(int matr)throws Exception
    {
        MeuResultSet resultado=null;
        
        try
        {
            String sql;
            sql="SELECT * FROM Funcionario WHERE matricula=?";
            DAOs.getBD().prepareStatement(sql);
            DAOs.getBD().setInt(1, matr);
            resultado = (MeuResultSet)DAOs.getBD().executeQuery();
            resultado.first();
        }
        catch(Exception erro)
        {
            erro.printStackTrace();
            throw new Exception("Erro ao selecionar matricula");
        }
        return resultado;
    }
    
    public void alterarSenha(String novaSenha, int mat){
        System.out.println(mat);
        try {
            String sql= "UPDATE Funcionario SET Senha=? WHERE matricula=?";
            DAOs.getBD().prepareStatement(sql);
            DAOs.getBD().setString(1, novaSenha);
            DAOs.getBD().setInt(2, mat);
            DAOs.getBD().executeUpdate();
            DAOs.getBD().commit();
        }
        catch(Exception erro){
            erro.printStackTrace();
        }
    }
}
