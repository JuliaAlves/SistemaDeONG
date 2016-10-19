/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package funcionariosjava;

/**
 *
 * @author u16182
 */
public class Usuario {
       private String login;
       private String senha;
       
       public Usuario (String l, String s) throws Exception{
           if ((l==null)||(s==null))
               throw new Exception("Parametro nulo");
           
           this.login=l;
           this.senha=s;
       }
       
       public String getSenha(){
           return this.senha;
       }
       
       public String getLogin(){
           return this.login;
       }
       
       public void setSenha(String s)throws Exception{
           if (s==null)
            throw new Exception("Parametro nulo");
           
          this.senha=s;
       }
       
       public void setLogin(String l)throws Exception{
           if (l==null)
            throw new Exception("Parametro nulo");
           
           this.login=l;
       }
}
