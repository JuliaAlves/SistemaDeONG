/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package funcionariosjava;

import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToOne;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;
import java.sql.*;
import Usuario.java;

/**
 *
 * @author u16182
 */
@Entity
@Table(name = "usuarioFuncionario")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "UsuarioFuncionario.findAll", query = "SELECT u FROM UsuarioFuncionario u"),
    @NamedQuery(name = "UsuarioFuncionario.findByMatricula", query = "SELECT u FROM UsuarioFuncionario u WHERE u.matricula = :matricula"),
    @NamedQuery(name = "UsuarioFuncionario.findBySenha", query = "SELECT u FROM UsuarioFuncionario u WHERE u.senha = :senha")})
public class Usuarios implements Serializable {

    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "matricula")
    private Integer matricula;
    @Basic(optional = false)
    @Column(name = "senha")
    private String senha;
    @JoinColumn(name = "matricula", referencedColumnName = "matricula", insertable = false, updatable = false)
    @OneToOne(optional = false)
    private Funcionario funcionario;

    public Usuarios() {
    }

    public Usuarios(Integer matricula) {
        this.matricula = matricula;
    }

    public Usuarios(Integer matricula, String senha) {
        this.matricula = matricula;
        this.senha = senha;
    }

    public Integer getMatricula() {
        return matricula;
    }

    public void setMatricula(Integer matricula) {
        this.matricula = matricula;
    }

    public String getSenha() {
        return senha;
    }

    public void setSenha(String senha) {
        this.senha = senha;
    }

    public Funcionario getFuncionario() {
        return funcionario;
    }

    public void setFuncionario(Funcionario funcionario) {
        this.funcionario = funcionario;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (matricula != null ? matricula.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Usuarios)) {
            return false;
        }
        Usuarios other = (Usuarios) object;
        if ((this.matricula == null && other.matricula != null) || (this.matricula != null && !this.matricula.equals(other.matricula))) {
            return false;
        }
        return true;
    }

    @Override
    
    public String toString() {
        return "funcionariosjava.UsuarioFuncionario[ matricula=" + matricula + " ]";
    }
    
     public Usuario getUsuario (int codigo) throws Exception
    {
        Usuario usuario = null;

        try
        {
            String sql;

            sql = "SELECT * " +
                  "FROM usuarioFuncionario " +
                  "WHERE matricula = ? AND senha=?";

            DAOs.getBD().prepareStatement (sql);

            DAOs.getBD().setInt (1, codigo);

            MeuResultSet resultado = (MeuResultSet)DAOs.getBD().executeQuery ();

            if (!resultado.first())
                throw new Exception ("Nao cadastrado");

            usuario = new Usuario (resultado.getString("matricula"),
                                    resultado.getString("senha"));
        }
        catch (SQLException erro)
        {
            throw new Exception ("Erro ao procurar Usuario");
        }

        return usuario;
    }

}
