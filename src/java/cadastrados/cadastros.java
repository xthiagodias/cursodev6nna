package cadastrados;

public class cadastros {

    private int idcadastro;
    private String nome;
    private String email;

    public cadastros() {
    }

    public cadastros(String nome, String email) {
        this.nome = nome;
        this.email = email;
    }

    public cadastros(int idcadastro, String nome, String email) {
        this.idcadastro = idcadastro;
        this.nome = nome;
        this.email = email;
    }

    public int getIdcadastro() {
        return idcadastro;
    }

    public void setIdcadastro(int idcadastro) {
        this.idcadastro = idcadastro;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

}
