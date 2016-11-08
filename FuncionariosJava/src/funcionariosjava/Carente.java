/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*/
package funcionariosjava;

import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToOne;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author u16182
 */
public class Carente implements Serializable {

    private static final long serialVersionUID = 1L;
    @Basic(optional = false)
    @Column(name = "nome")
    private String nome;
    @Basic(optional = false)
    @Column(name = "RG")
    private String rg;
    @Basic(optional = false)
    @Column(name = "CPF")
    private String email;
    @Basic(optional = false)
    @Column(name = "telefone")
    private String telefone;
    @OneToOne(cascade = CascadeType.ALL, mappedBy = "funcionario")
    private String renda;



    public Carente(String nome, String rg, String email, String telefone, String renda) {
        this.nome = nome;
        this.rg = rg;
        this.email = email;
        this.telefone = telefone;
        this.renda=renda;
    }

    
    public String getRenda(){
      return this.renda;
    }
       
    public void setRenda(String s)throws Exception{
        if (s==null)
         throw new Exception("Parametro nulo");

       this.renda=s;
    }

    public String getNome() {
        return this.nome;
    }

    public void setNome(String nome) throws Exception{
        if (nome==null)
         throw new Exception("Parametro nulo");
        this.nome = nome;
    }

    public String getRG() {
        return this.rg;
    }

    public void setRG(String rg) throws Exception {
        if (rg==null)
         throw new Exception("Parametro nulo");
        this.rg = rg;
    }

    public String getEmail() {
        return this.email;
    }

    public void setEmail(String email) throws Exception{
        if (email==null)
         throw new Exception("Parametro nulo");
        this.email = email;
    }

    public String getTelefone() {
        return this.telefone;
    }

    public void setTelefone(String telefone)throws Exception{
        if (email==null)
         throw new Exception("Parametro nulo"); 
        
        this.telefone = telefone;
    }

   /*  @Override
   public int hashCode() {
        int hash = 0;
        hash += (matricula != null ? matricula.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Funcionario)) {
            return false;
        }
        Funcionario other = (Funcionario) object;
        if ((this.matricula == null && other.matricula != null) || (this.matricula != null && !this.matricula.equals(other.matricula))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "funcionariosjava.Funcionario[ matricula=" + matricula + " ]";
    }
    */
}