package conectarBanco;

import java.sql.DriverManager;
import java.sql.*;


public class conexao {
    
    
    public static Connection getConnection() throws SQLException {
        
        try {
            
            Class.forName("com.mysql.jdbc.Driver");
            return DriverManager.getConnection("jdbc:mysql://localhost/base_dados?serverTimezone=UTC", "projetoweb", "thi1087");
            
            
        } catch (ClassNotFoundException e) {
            
            throw new SQLException(e.getException());
        }
        
        
    }
    
    
}
