<?php
session_start();

$pf_nome = '';
$pf_sobrenome = '';
$pf_email = '';
$pf_cpf = '';
$pf_cep = '';
$pf_cidade = '';
$pf_estado = '';
$pf_telefone = '';
$pf_usuario = '';
$pf_senha = '';
$pf_senha2 = '';

//session_destroy();
//session_start();
//session_destroy();
include('conexao/conexao.php');



//if(isset($_POST)) // Se existir o array post, pq ele não retorna undefined index.
if(isset($get['sucesso']))
{





    //$tipoCadastro2 = isset($_GET['tipoCadastro']) ? $_POST['tipoCadastro'] : '';
    $pf_nome = isset($_POST['pf_nome']) ? $_POST['pf_nome'] : '';
    $pf_sobrenome = isset($_POST['pf_sobrenome']) ? $_POST['pf_sobrenome'] : '';
    $pf_email = isset($_POST['pf_email']) ? $_POST['pf_email'] : '';
    $pf_cpf = isset($_POST['pf_cpf']) ? $_POST['pf_cpf'] : '';
    $pf_cep = isset($_POST['pf_cep']) ? $_POST['pf_cep'] : '';
    $pf_cidade = isset($_POST['pf_cidade']) ? $_POST['pf_cidade'] : '';
    $pf_estado = isset($_POST['pf_estado']) ? $_POST['pf_estado'] : '';
    $pf_telefone = isset($_POST['pf_telefone']) ? $_POST['pf_telefone'] : '';
    $pf_usuario = isset($_POST['pf_usuario']) ? $_POST['pf_usuario'] : '';
    $pf_senha = isset($_POST['pf_senha']) ? $_POST['pf_senha'] : '';
    $pf_senha2 = isset($_POST['pf_senha2']) ? $_POST['pf_senha2'] : '';

//

    //$tipoCadastro2 = mysqli_real_escape_string($conexao, $tipoCadastro2);
    $pf_nome = mysqli_real_escape_string($conexao, $pf_nome);
    $pf_sobrenome = mysqli_real_escape_string($conexao, $pf_sobrenome);
    $pf_email = mysqli_real_escape_string($conexao, $pf_email);
    $pf_cpf = mysqli_real_escape_string($conexao, $pf_cpf);
    $pf_cep = mysqli_real_escape_string($conexao, $pf_cep);
    $pf_cidade = mysqli_real_escape_string($conexao, $pf_cidade);
    $pf_estado = mysqli_real_escape_string($conexao, $pf_estado);
    $pf_telefone = mysqli_real_escape_string($conexao, $pf_telefone);
    $pf_usuario = mysqli_real_escape_string($conexao, $pf_usuario);
    $pf_senha = mysqli_real_escape_string($conexao, $pf_senha);
    $pf_senha2 = mysqli_real_escape_string($conexao, $pf_senha2);


    $query = "INSERT INTO cad_pf (tipo_cadastro, pf_nome, pf_sobrenome, pf_email, pf_cpf, pf_cep, pf_cidade, pf_estado, 
                              pf_telefone, pf_usuario, pf_senha, pf_senha2, data_cadastro) 
VALUES ('PF','$pf_nome','$pf_sobrenome','$pf_email','$pf_cpf','$pf_cep','$pf_cidade','$pf_estado','$pf_telefone','$pf_usuario', md5('$pf_senha'), md5('$pf_senha2'), NOW())";


//$sql = mysqli_query($conexao, "SELECT idcadastro, usuario FROM cadastro WHERE usuario = '".$_POST['usuario']."'");


    $result = mysqli_query($conexao, $query);




    if ($query == TRUE) {
       // echo 'Cadastro efetuado com Sucesso!';
      //  echo '<p class="changes-saved"><h1>Seu cadastro foi realizado com sucesso! Agora você já pode entrar no seu portal!</h1></p>';
        echo  "<script>alert('Seu cadastro foi realizado com sucesso! Agora você já pode entrar no seu portal!');</script>";
        echo  "<script>window.location='login.php'</script>";
      //  echo "javascript:window.location='index.php';</script>";
        echo '<BR>';
    }

    if (!$query) {
        // There was an error...do something about it here...
        print mysqli_error($mysqli);
        return;

    }

}

?>
<html>
<title>Cadastro OK!</title>
<head>
    <body>



</body>
</html>
