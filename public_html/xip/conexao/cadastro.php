
<?php
session_start();
include('conexao.php');

$username=$_POST['usuario2'];
$senha=$_POST['senha2'];

if(empty($username) || empty($senha)) {
    header('Location: painel.php');
    exit();
}


$usuario = mysqli_real_escape_string($conexao, $username);
$senha = mysqli_real_escape_string($conexao, $senha);

$query = "INSERT INTO usuario (usuario, senha) 
                                     VALUES ('$username', md5('$senha'))";



//$sql = mysqli_query($conexao, "SELECT idcadastro, usuario FROM cadastro WHERE usuario = '".$_POST['usuario']."'");


$result = mysqli_query($conexao, $query);


if ($query == TRUE) {


        echo '<p class="changes-saved">Seu cadastro foi realizado com sucesso! Agora você já pode entrar no seu portal!</p>';
        echo '<BR>';

}


if (!$query) {
        // There was an error...do something about it here...
        print mysqli_error($mysqli);
        return;
}

?>

<html>
<title>
   Cadastro de usuario!
</title>

<head>

</head>
<body>

<a href="index.php">Retornar</a>

</body>


</html>

