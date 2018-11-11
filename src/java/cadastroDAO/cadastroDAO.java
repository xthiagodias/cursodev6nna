package cadastroDAO;

import cadastrados.cadastros;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.sql.DataSource;

public class cadastroDAO {

    private DataSource datasource;
    private List<cadastrados.cadastros> listaAlunos;

    public cadastroDAO(DataSource ds) {
        this.datasource = ds;
    }

    public List<cadastrados.cadastros> consultaAluno() {
        listaAlunos = new ArrayList<cadastrados.cadastros>();
        Connection con = null;
        Statement st = null;
        ResultSet result = null;
        try {
            //Obter Conexão com Banco
            con = datasource.getConnection();

            //Criar o SQL 
            st = con.createStatement();
            String sql = "select * from aluno";
            
          //  String sql = "INSERT INTO aluno values(5,'Teste','Teste','Teste')";

            //Executar o SQL
            result = st.executeQuery(sql);
           // result = st.executeQuery(sql2);

            //Processar os dados retornados 
            while (result.next()) {
                int id = result.getInt("idcadastro");
                String nome = result.getString("nome");
                String email = result.getString("email");
             
                cadastrados.cadastros cliente = new cadastrados.cadastros(id, nome, email);

                listaAlunos.add(cliente);

            }

        } catch (SQLException ex) {
            ex.printStackTrace();
        }

        return listaAlunos;

    }
    


}
