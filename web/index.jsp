<%-- 
    Document   : index
    Created on : 10/11/2018, 16:37:42
    Author     : NorteStore
--%>
<%@page import="java.util.List"%>
<%@page contentType="text/html" pageEncoding="UTF-8"
        import="java.sql.*"%>
<%@page import="cadastrados.cadastros"%>
<%@page language="java" import="conectarBanco.conexao" %>
<%@page language="java" import="conectarBanco.retornaDados" %>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <a href="javascript/configuracao.js"></a>
    <title>Cadastro de Cliente</title>

    <script>
        var campo1;
        var campo2;
        function verificaTexto() {



            campo1 = document.getElementById("nomeCliente");
            campo2 = document.getElementById("emailCliente");
            if (campo1.value === "") {
                alert("O Campo nome não foi informado!");
                        break;
            } else {

                if (campo2.value === "") {
                    alert("O Campo email não foi informado!");
                            break;
                }
            }



        }


    </script>



    <%

        String nome = request.getParameter("nome");
        String email = request.getParameter("email");

        try {

            Connection con = conexao.getConnection();
            String sql2 = "SELECT * FROM cadastro";

            PreparedStatement stmt = con.prepareStatement(sql2);

            stmt.setString(1, "%" + nome + "%");
            stmt.setString(2, "%" + email + "%");

            ResultSet Rs = stmt.executeQuery();

            if (Rs.next()) {
                out.println("Login Succesful! A record with the given user name and password exists");
                out.println(nome);
                out.println(email);
            } else {
                out.println("Login Failed. No records exists with the given user name and password");
            }
           

            stmt.execute();
            stmt.close();
            con.close();

        } catch (Exception e) {

            out.print("Falha no retorno do Banco de Dados!, Erro: <br>" + e);

        }


    %>


</head>
<body style="background-color: #f8f8f8;">
    <% List<cadastrados.cadastros> listaCadastrados = (List<cadastrados.cadastros>) request.getAttribute("LISTA-CADASTROS");%>
    <h1 style="text-align: center;">Cadastro de Cliente</h1>
    <hr>

    <form action="cadastro.jsp" method="POST" id="formulario">

        <div style="padding: 10pt;">
            <div> Nome do Cliente: <input style="margin-left: 4px;" type="text" name="nome" id="nomeCliente" size="30" placeholder="Nome completo" required> </div><p>
            <div> E-mail do Cliente: <input type="text" name="email" id="emailCliente" size="30" placeholder="E-mail" required> </div>
            <BR>
            <div> <input type="submit" style="width: 100px; height: 30px; color: green;" name="enviarDados"  value="Enviar dados" onClick="verificaTexto();"> </div>
        </div>

    </form>


<center> <form action="index.jsp" method="POST" id="dadosSalvos"> </center>

<div style="padding: 10pt;">
    <h1 style="text-align: center;">Clientes Cadastrados</h1>
    <hr>
    <BR>
    <div> <input type="submit" style="width: 130px; height: 30px; color: green;" name="enviarDados"  value="Consultar dados" onClick="verificaTexto();"> </div>
</div>

<div>

    <center> <table border="1"> </center>
    <tbody>
        <tr>
            <th>ID:</th>
            <th>Nome:</th>
            <th>E-mail:</th>
        </tr>

    <thead>






        <tr>

            <td data-label="idcadastro"><%%></td>
            <td data-label="nome"><%%></td>
            <td data-label="email"><%%></td>

        </tr>

    </thead>

</tbody>

</table>

</div>

</form>



</body>
</html>
