<?php
session_start();
//include('login.php');
include_once('verifica_login.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Configurações de Perfil</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Arquivos de configuracao, bootstrap, css -->
    <script src="libs/JQuery-3.3.1/jquery-3.3.1.min.js" type="text/javascript"></script>
    <link href="libs/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen"/>
    <!--  <script src="libs/bootstrap/bootstrap.min.js" type="text/javascript"></script> -->

    <script src="javascript/contato.js" type="text/javascript"></script>
    <link href="css/estiloperfil.css" rel="stylesheet" type="text/css"/>
    <!--    <script src="css2/ajax.googleapis.com_ajax_libs_jquery_3.3.1_jquery.min.js" type="text/javascript"></script> -->
    <link href="css2/maxcdn.bootstrapcdn.com_bootstrap_3.3.7_css_bootstrap.min.css" rel="stylesheet" type="text/css" media="screen"/>
    <!--    <script src="css2/maxcdn.bootstrapcdn.com_bootstrap_3.3.7_js_bootstrap.min.js" type="text/javascript"></script>
    -->


    <style>

        body {

            background-image: url('imagens/imgFundo.png');
            background-position: center center;
            background-repeat: no-repeat;



        }

        body .container {

            opacity: 0.9;
            filter: alpha(opacity=20);
        }

    </style>

    <style>

        #perfil {
            display: flex;

            margin: 0 auto !important;
            text-align: left;
            /* inline-block space fix */
            margin-right: -4px;
            height: 50%;
            width: 50%;

            position: inherit;

            background-color: #fafafa;
            color: white;
            float:  none;
            border: solid 2px red;






        }



        a:hover {

            text-decoration:none;


        }


    </style>


</head>


<body>

<div class="col-12" id='perfil'>
    <div class='col-12'>


        <div class="imagemLogo">
          <center><img class="imgperfil" src="imagens/camera.png" alt="" width="170" height="130"/></center>
        </div>
        <form>
            <div class="form-group">
                <label style='margin-top: auto; margin-left: auto; margin-left: -15px;' class='col-12'>Olá, <?php echo $_SESSION['usuario']; ?></label>
                <label style='margin-top: auto; margin-left: auto; margin-left: -15px;' class='col-12'>Perfil</label>
                <h2><a href="logout.php">Sair</a></h2>





            </div>
        </form>

        <br>
    </div>


</div>


</body>


</html>
