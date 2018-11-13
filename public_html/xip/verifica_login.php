<?php
include("login.php");
//include('cadUsuario.php');
?>
<?php
//require_once('index.php');
if(!@$_SESSION['usuario']) {
  //  header('Location: index.php');
   // echo $_SESSION['usuario'];
 //   echo '<script> alert("Você precisa efetuar o login para acessar seu perfil!"); </script>';
    echo "<script> window.onload = function() {
     sobeAviso();
        }; </script>";
  //  echo ' <script> location.replace("index.php"); </script> ';
    exit();
}
?>