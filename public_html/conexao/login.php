
<?php
session_start();
include('conexao.php');

$username=$_POST['usuario'];
$senha=$_POST['senha'];

if(empty($username) || empty($senha)) {
    header('Location: index.php');
    exit();
}


$usuario = mysqli_real_escape_string($conexao, $username);
$senha = mysqli_real_escape_string($conexao, $senha);

$query = "select idusuario, usuario,senha from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";


/* @var $sql type */
//$sql = mysqli_query($conexao, "SELECT idcadastro, usuario FROM cadastro WHERE usuario = '".$_POST['usuario']."'");


$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);



if ($row == 1) {
    
    $_SESSION['usuario'] = $usuario;
 //   echo $row;
  //  echo '<BR>';
 //   echo 'Conexao OK!';
    header('Location: painel.php');
    exit();
    
} else {
   // echo $row;
    $_SESSION['nao_autenticado'] = true;
   // echo '<BR>';
   // echo 'Usuario ou senha invalidos!';
    header('Location: index.php');
    exit();
    
}

