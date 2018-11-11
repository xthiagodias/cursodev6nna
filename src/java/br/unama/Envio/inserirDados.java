package br.unama.Envio;

import cadastroDAO.cadastroDAO;
import cadastrados.cadastros;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.List;
import javax.annotation.Resource;
import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.sql.DataSource;


@WebServlet(name = "inserirDados", urlPatterns = {"/inserirDados"})
public class inserirDados extends HttpServlet {
    
        @Resource(name = "jdbc/aluno")
    private DataSource datasource;
    private cadastroDAO alunoDao;
    private int qtd = 0;
    
    
        @Override
    public void init(ServletConfig config) throws ServletException {
        alunoDao = new cadastroDAO(datasource);
    }
    
    

    
   
 
    protected void InserirDados(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        
               try (PrintWriter out = response.getWriter()) {
            /* TODO output your page here. You may use following sample code. */
            
            
            cadastros cliente = new cadastros();
            
            cliente.setIdcadastro(1000);
            cliente.setNome("teste@gmail.com");
            cliente.setEmail("Teste");
        
            
            
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Servlet inserirDados</title>");            
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>Servlet inserirDados at " + request.getContextPath() + "</h1>");
            out.println("<h1>Servlet inserirDados at " + request.getLocalAddr() + "</h1>");
            out.println("<h1>Servlet inserirDados at " + request.getLocalName() + "</h1>");
            out.println("<h1>Servlet inserirDados at " + request.getRemoteUser() + "</h1>");
            out.println("<h1>Servlet inserirDados at " + request.getUserPrincipal() + "</h1>");
            
        
            out.println("</body>");
            out.println("</html>");
        } 
        
        
        
        
        List<cadastros> clientes = alunoDao.consultaAluno();
        request.setAttribute("LISTA-CADASTRADOS", clientes);
        request.getRequestDispatcher("/index.jsp").forward(request, response);
    }

 
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        
        //List<Aluno> alunos = alunoDao.consultaAluno();
       // request.setAttribute("LISTA-ALUNOS", alunos);
      //  request.getRequestDispatcher("/ListaAlunos.jsp").forward(request, response);
        
        
        try (PrintWriter out = response.getWriter()) {
            /* TODO output your page here. You may use following sample code. */
            
            
        
            
            
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Servlet inserirDados</title>");            
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>Servlet inserirDados at " + request.getContextPath() + "</h1>");
            out.println("</body>");
            out.println("</html>");
        }
    }


    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        InserirDados(request, response);
    }

   
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        InserirDados(request, response);
    }

    @Override
    public String getServletInfo() {
        return "Short description";
    }

}
