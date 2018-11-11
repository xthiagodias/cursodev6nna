<%-- 
    Document   : cadastro
    Created on : 10/11/2018, 17:04:05
    Author     : NorteStore
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"
import="java.sql.*"%>
<%@page language="java" import="conectarBanco.conexao" %>
<%@page language="java" import="conectarBanco.retornaDados" %>

<% 

    String nome = request.getParameter("nome");
    String email = request.getParameter("email");
    

    try {
        
        Connection con = conexao.getConnection();
        String sql = "INSERT INTO cadastro(nome,email) values(?,?)";
        
        
        
        PreparedStatement stmt = con.prepareStatement(sql);
        
        stmt.setString(1, nome);
        stmt.setString(2, email);
        stmt.execute();
        stmt.close();
        con.close();
        
   
    
        } catch (Exception e) {
    
        out.print("Falha no cadastro do cliente!, Erro: <br>"+ e);
        
        }
    


%>







<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body style="background-color: #f8f8f8;">
        <h1 style="text-align: center;">Os dados foram salvos com sucesso!</h1>
    <hr>
        
    <form action="index.jsp" method="POST">
        
        <div style="padding: 10pt;">

        <BR>
        <center> <div> <input style="width: 100px; height: 30px; color: green;" type="submit" name="enviarDados" value="Voltar"> </div> </center>
        </div>
        
        
    </form>
    </body>
</html>