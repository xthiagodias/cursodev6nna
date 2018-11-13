
<?php
session_start();
//include('verifica_login.php');
?>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Tela de Login</title>

</head>

<body>


<form action="login.php" method="post">

    <h2>Entre com os dados de acesso</h2>
    <hr>

    <div>Usuario: <input name="usuario" id="usuario" type="text"  placeholder="Usuario"> </div>
    <div>Senha: <input name="senha" id="senha" type="password"  placeholder="Senha"> </div>
    <BR>

    <button class="btn btn-success" type="submit" title="Acessar Portal" onclick="verificaLogin();">Acessar Portal</button>




</form>



<?php
if(isset($_SESSION['nao_autenticado']));
?>

<div class="notification is-danger">
    <b></b> <div hidden="" id="erro">ERRO: Usuario ou senha invalidos.</div></b>
</div>

<?php
unset($_SESSION['nao_autenticado']);
?>

<BR>
<BR>
<BR>
<form action="cadUsuario.php" method="post">

    <h2>Cadastro de Usuario, para acesso ao Portal!</h2>
    <hr>

    <div>Entre com o usuario: <input name="usuario2" id="usuario2" type="text"  placeholder="Informe o usuario"> </div>
    <div>Entre com a senha: <input name="senha2" id="senha2" type="password"  placeholder="Informe a senha"> </div>
    <BR>

    <button class="btn btn-success" type="submit" title="Cadastrar Usuario">Cadastrar Usuario</button>




</form>




</body>




</html>