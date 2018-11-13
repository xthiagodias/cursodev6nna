<?php
session_start();


// Var PF
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


// Var PJ
$pj_nome = '';
$pj_sobrenome = '';
$pj_email = '';
$pj_cnpj = '';
$pj_responsavel = '';
$responsavel_cpf = '';
$pj_usuario = '';
$pj_senha = '';
$pj_senha2 = '';




//session_destroy();
//session_start();
//session_destroy();
include('conexao/conexao.php');



//if(isset($_POST)) // Se existir o array post, pq ele não retorna undefined index.
if(isset($_GET['PFsucesso']))
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

        echo "<script> window.onload = function() {
     sobeModal();
        }; </script>";

       // echo  '<script>alert("teste");</script>';
      //  echo  "<script>window.location='sucesso.php?cadastroPF'</script>";
        //  echo "javascript:window.location='index.php';</script>";
      //  echo '<BR>';
    }


    if (!$query) {
        // There was an error...do something about it here...
        print mysqli_error($mysqli);
        return;

    }


} else {


if(isset($_GET['PJsucesso'])) {


    $pj_nome = '';
    $pj_sobrenome = '';
    $pj_email = '';
    $pj_cnpj = '';
    $pj_responsavel = '';
    $responsavel_cpf = '';
    $pj_usuario = '';
    $pj_senha = '';
    $pj_senha2 = '';


    //$tipoCadastro2 = isset($_GET['tipoCadastro']) ? $_POST['tipoCadastro'] : '';
    $pj_nome = isset($_POST['pj_nome']) ? $_POST['pj_nome'] : '';
    $pj_sobrenome = isset($_POST['pj_sobrenome']) ? $_POST['pj_sobrenome'] : '';
    $pj_email = isset($_POST['pj_email']) ? $_POST['pj_email'] : '';
    $pj_cnpj = isset($_POST['pj_cnpj']) ? $_POST['pj_cnpj'] : '';
    $pj_responsavel = isset($_POST['pj_responsavel']) ? $_POST['pj_responsavel'] : '';
    $responsavel_cpf = isset($_POST['responsavel_cpf']) ? $_POST['responsavel_cpf'] : '';
    $pj_usuario = isset($_POST['pj_usuario']) ? $_POST['pj_usuario'] : '';
    $pj_senha = isset($_POST['pj_senha']) ? $_POST['pj_senha'] : '';
    $pj_senha2 = isset($_POST['pj_senha2']) ? $_POST['pj_senha2'] : '';


//

    //$tipoCadastro2 = mysqli_real_escape_string($conexao, $tipoCadastro2);
    $pj_nome = mysqli_real_escape_string($conexao, $pj_nome);
    $pj_sobrenome = mysqli_real_escape_string($conexao, $pj_sobrenome);
    $pj_email = mysqli_real_escape_string($conexao, $pj_email);
    $pj_cnpj = mysqli_real_escape_string($conexao, $pj_cnpj);
    $pj_responsavel = mysqli_real_escape_string($conexao, $pj_responsavel);
    $responsavel_cpf = mysqli_real_escape_string($conexao, $responsavel_cpf);
    $pj_usuario = mysqli_real_escape_string($conexao, $pj_usuario);
    $pj_senha = mysqli_real_escape_string($conexao, $pj_senha);
    $pj_senha2 = mysqli_real_escape_string($conexao, $pj_senha2);


    $query = "INSERT INTO cad_pj (tipo_cadastro, pj_nome, pj_sobrenome, pj_email, pj_cnpj, pj_responsavel, responsavel_cpf, pj_usuario, 
                              pj_senha, pj_senha2, data_cadastro) 
VALUES ('PJ','$pj_nome','$pj_sobrenome','$pj_email','$pj_cnpj','$pj_responsavel','$responsavel_cpf','$pj_usuario', md5('$pf_senha'), md5('$pf_senha2'), NOW())";


//$sql = mysqli_query($conexao, "SELECT idcadastro, usuario FROM cadastro WHERE usuario = '".$_POST['usuario']."'");


    $result = mysqli_query($conexao, $query);


    if ($query == TRUE) {
        // echo 'Cadastro efetuado com Sucesso!';
        //  echo '<p class="changes-saved"><h1>Seu cadastro foi realizado com sucesso! Agora você já pode entrar no seu portal!</h1></p>';
        //echo "<script>alert('Que legal!! Recebemos seu cadastro, agora você já pode entrar no seu portal!');</script>";
    //    echo "<script>window.location='sucesso.php?cadastroPJ'</script>";
        //  echo "javascript:window.location='index.php';</script>";
   //     echo '<BR>';

        echo "<script> window.onload = function() {
     sobeModal();
        }; </script>";
    }

    if (!$query) {
        // There was an error...do something about it here...
        print mysqli_error($mysqli);
        return;

    }
}
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">



        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



        <!-- Arquivos de configuracao, bootstrap, css -->
        <!--     <script src="libs/JQuery-3.3.1/jquery-3.3.1.min.js" type="text/javascript"></script>
             <link href="libs/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
             <script src="libs/bootstrap/bootstrap.min.js" type="text/javascript"></script>
             <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="css/estilocadastro.css" rel="stylesheet" type="text/css"/>
        <link href="css/modal.css" rel="stylesheet" type="text/css"/>

        <script src="javascript/pagina.js" type="text/javascript" language="JavaScript"></script>
        <script src="javascript/materialize.js" type="text/javascript"></script>


        <link href="css2/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css2/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <style>


            body {

                background-image: url('imagens/imgFundo.png');
                background-position: center center;
                background-repeat: no-repeat;



            }

            body #principal {

                opacity: 0.9;
                filter: alpha(opacity=20);
            }

            body .tipoAnuncio {

                opacity: 0.9;
                filter: alpha(opacity=20);
            }            

        </style>


        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */ 
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            .row.content {height: 450px}

            /* Set gray background color and 100% height */
            .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
            }

            /* Set black background color, white text and some padding */
            footer {
                background-color: #555;
                color: white;
                padding: 15px;
            }

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;


                }
                .row.content {height:auto;} 
            }


            #topo {
                margin: 0 auto;
                display: block;
                border: solid 2px red;
                height: auto;
                width: auto;
                background-color: #fafafa;
                margin-top: auto;

            }

            #conteudoCentral {
                margin: 0 auto;
                display: block;
                border: solid 2px green;
                height: auto;



                margin-top: 2px;


                background-color: #fafafa;

                margin-bottom: auto;
                margin-right: 5px;
                margin-left: 5px;
            }

            #ads {
                margin: 0 auto;
                display: block;

                border: solid 2px blue;
                margin-top: 2px;
                height: auto;
                width: auto;
                position: relative;
                background-color: #fafafa;
                margin-left: auto;
                margin-right: auto;

                margin-bottom: 2px;
                border-radius: 1% 1% 1% 1%;
            }   

            #sidebar {
                margin: 0 auto;
                display: block;
                border: solid 2px yellow;
                height: auto;
                width: auto;
                position: relative;
                background-color: #fafafa;
                margin-left: auto;
                margin-top: 2px;

                border-radius: 1% 1% 1% 1%;
            }

            #bottom {
                margin: 0 auto;
                display: block;
                border: solid 2px red;
                margin-bottom: auto;
                margin-top: 2px;



                background-color: #fafafa;


            }  

            a:hover {
                text-decoration: none;
            }
        </style>



        <style>


            .navbar {



            }

        </style>






    </head>
    <body>





        <div id='principal'>
            <div class="container">


                <div class="row">

                    <div id="topo">
                        <nav style="background-color: #fafafa; border: solid 0px transparent;" class="navbar navbar-inverse">
                            <a class="navbar-brand" href="#"><img style=' padding: 0pt; margin-top: -15px;' src='imagens/logotipo.png' alt='' width="50" height="50"></a>
                            <div class="container">

                                <div class="navbar-header">

                                    <button style="background-color: #002752;" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>                        
                                    </button>

                                </div>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav">
                                        <li><form style="padding: 10pt; height: auto;" class="form-inline">

                                                <div class="btn-group">
                                                    <a class="btn ribbon" href="inserirAnuncio.php"><button style="margin-top: -20px; width: 140px; height: 40px; margin-left: -20px;" type="button" class="btn btn-success ribbon">Anuncie Ja!</button></a>



                                                    <a href='index.php'><button style="margin-top: 0; margin-left: 20px;" class="btn btn-primary btn-sm" type="button"><i class="fa fa-fw fa-home"></i>Pagina Inicial</button></a>

                                                    <a href='contato.php'><button style="margin-top: 0;" class="btn btn-primary btn-sm" type="button">Contato</button></a>

                                                    <a href='sobre.php'><button style="margin-top: 0;" class="btn btn-primary btn-sm" type="button">Sobre</button></a>
                                                    <a href='perfil.php'><button style="margin-top: 0;" class="btn btn-primary btn-sm" type="button">Perfil</button></a>
                                                    <a href="http://www.unama.br/" target="_blank"><img style='margin-left: 70px;' src="imagens/unama2.png" alt='' width="200" height="50"></a>
                                                </div>   
                                            </form></li>


                                    </ul>
                                    <ul style="width: auto; margin-top: auto;" class="nav navbar-nav navbar-right">
                                        <li><a href='login.php'><span class="glyphicon glyphicon-log-in"></span><span style="color: #002752;; font-family: Tahoma; width: auto;"> Login</span></a></li>
                                    </ul>


                                </div>
                            </div>
                        </nav>



                    </div>
                </div>
            </div>
            <div class="container">    
                <div class="row">


                    <div style="height: auto; border: solid 2px yellow;" id='sidebar' class="col-sm-3 ">
                        <center> <button type='button' style='width: 252px;' id='btMenu' class="glyphicon glyphicon-align-justify btn btn-primary btn-sm my-2 my-sm-0" data-toggle="collapse" data-target="#myNavbar2"> <span style="font-weight: bold; font-family: Tahoma; font-size: 10pt; color: white; margin-left: 15px;">Categorias</span></button></center> 
                        <p>

                        <div class="collapse" id="myNavbar2">


                            <div class="campoBuscar1" >


                                <nav id="navBuscar" class="navbar navbar-light bg-light">
                                    <form class="form-inline">
                                        <input style='width: 172px;' class="form-control mr-sm-1" type="search" placeholder="O que voce procura?" aria-label="Search"> <button id="btBuscar" class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
                                        <BR>
                                        <br>
                                        <p>  <button type='button' style='margin-left: 0px;' id='btFiltrar' class="btn btn-success my-2 my-sm-0" data-toggle="collapse" data-target="#myNavbar1">Filtrar</button> </p>



                                        <div class="collapse" id="myNavbar1">
                                            <ul class="nav nav-tabs-justified">

                                                <li><input type="checkbox"> Filtro 1</li>

                                                <li><input type="checkbox"> Filtro 2</li>

                                                <li><input type="checkbox"> Filtro 3</li>

                                                <li><input type="checkbox"> Filtro 4</li>

                                                <li><input type="checkbox"> Filtro 5</li>

                                                <li><input type="button" value='Salvar' name='Salvar' data-toggle="collapse" data-target="#myNavbar1"></li>


                                            </ul>

                                        </div>


                                    </form>
                                </nav>


                                <div class="campoCategorias">

                                    <p>  <span id="cat">Categorias</span> </p>
                                    <p> <hr style="border: solid 1px black; width: auto;">

                                    <span>Academicos</span>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Informatica</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Direito</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Administracao</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4">Medicina</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                                        <label class="custom-control-label" for="customCheck5">Portugues</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck6">Ingles</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                                        <label class="custom-control-label" for="customCheck7">Contabilidade</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck8">
                                        <label class="custom-control-label" for="customCheck8">Enfermagem</label>
                                    </div>
                                    <span>Literatura</span>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck9">
                                        <label class="custom-control-label" for="customCheck9">Nacional</label>
                                    </div>

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck10">
                                        <label class="custom-control-label" for="customCheck10">Internacional</label>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>    

                    <div class="col-sm-6 well ml-auto" id="conteudoCentral"> 



                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-12 mb-4">

                                <!-- Exaple 1 -->
                                <div style="width: auto;" class="card example-1 scrollbar-ripe-malinka">
                                    <div class="card-body">
                                        <!--      <h4 style='text-align: center; align-content: center; font-family: Verdana; color:blue;' id="section1"><span style='text-align: center; align-content: center; color: green;'>Lista de Anuncios</span></h4>
                                        -->
                                        <div class="card-text">

                                            <h3 style="text-align: center; color: green;">Cadastro de Usuario</h3>
                                            <hr style="color: green; border: solid 1px green;">
                                            <label>Nao tem cadastro?? <br>Cadastre-se, nao demora nadinha! :)</label>
                                            <BR>

                                            <form class="was-validated">

                                                <div class="form-group">

                                                    <select class="custom-select" name="tipoCadastro" id="tipoCadastro" onchange="selecionaTipoCadastro(this.value)" required>
                                                        <option id='tipo0' value="">Selecione o Tipo de Cadastro</option>
                                                        <option value="1">Pessoa Fisica</option>
                                                        <option value="2">Instituicao</option>

                                                    </select>
                                                    <div class="invalid-feedback">Voce deve informar o Tipo de Cadastro</div>
                                                    <div class="valid-feedback">Ok!</div>
                                                </div>


                                            </form>


                                            <!-- PF  -->
                                            <form action="cadUsuario.php?PFsucesso" method="post"  hidden="" class="needs-validation" name="fisico" id="cadPF" novalidate>
                                                <div class="col-md-6">
                                                    <label for="validationCustom01">Nome</label><br>
                                                    <input type="text" name="pf_nome" id="pf_nome" size="30" class="form-control" id="validationCustom01" placeholder="Nome" value="" required>
                                                    <div class="valid-feedback">
                                                        Otimo!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Insira um nome valido.
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="validationCustom02">Sobrenome</label><br>
                                                    <input type="text" name="pf_sobrenome" id="pf_sobrenome" size="50" class="form-control" id="validationCustom02" placeholder="Sobrenome" value="" required>
                                                    <div class="valid-feedback">
                                                        Otimo!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Insira um sobrenome valido.
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="input-group-prepend">
                                                        <span  class="input-group-text" id="inputGroupPrepend">@</span><label>E-mail</label>

                                                    </div>
                                                    <input  type="email" class="form-control" name="pf_email" id="pf_email" placeholder="E-mail" aria-describedby="inputGroupPrepend" required>
                                                    <div class="valid-feedback">
                                                        Tudo certo com seu E-mail!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        O e-mail informado e invalido.
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <label for="validationCustom06">CPF</label>
                                                    <input type="text" class="form-control" name="pf_cpf" id="pf_cpf" placeholder="CPF" required>
                                                    <div class="valid-feedback">
                                                        CPF Validado!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        O CPF informado nao e valido.
                                                    </div>
                                                </div>                                              

                                                <div class="col-md-4">
                                                    <label for="validationCustom05">CEP</label>
                                                    <input type="text" class="form-control" name="pf_cep" id="pf_cep" placeholder="CEP" required>
                                                    <div class="valid-feedback">
                                                        OK!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Informe um CEP valido.
                                                    </div>
                                                </div>



                                                <div class="col-md-6">
                                                    <label for="validationCustom03">Cidade</label>
                                                    <input type="text" class="form-control" name="pf_cidade" id="pf_cidade" placeholder="Cidade" required>
                                                    <div class="valid-feedback">
                                                        Certo!
                                                    </div>
                                                    <div class="invalid-feedback">

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="validationCustom04">Estado</label>
                                                    <input type="text" class="form-control" name="pf_estado" id="pf_estado" placeholder="Estado" required>
                                                    <div class="valid-feedback">
                                                        Quase la!
                                                    </div>
                                                    <div class="invalid-feedback">

                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <label for="validationCustom07">Telefone</label>
                                                    <input type="tel" class="form-control" name="pf_telefone" id="pf_telefone" placeholder="Telefone" required>
                                                    <div class="valid-feedback">
                                                        Telefone Validado!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Informe um telefone de contato.
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="validationCustom08">Usuario</label>
                                                    <input type="text" class="form-control" name="pf_usuario" id="pf_usuario" placeholder="Usuario" required>
                                                    <div class="valid-feedback">
                                                        Estamos quase finalizando seu cadastro!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Informe um usuario para voce ter acesso total ao site.
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="validationCustom09">Senha</label>
                                                    <input type="password" class="form-control" name="pf_senha" id="pf_senha" placeholder="Senha" required>
                                                    <div class="valid-feedback">
                                                        OK!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Insira uma senha valida.
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="validationCustom10">Confirmar Senha</label>
                                                    <input type="password" class="form-control" name="pf_senha2" id="pf_senha2" placeholder="Confirmar Senha" required>
                                                    <div class="valid-feedback">
                                                        Prontinho!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Insira uma senha valida.
                                                    </div>
                                                </div>

                                                <div class="col-md-8"  style="margin-top: auto;">
                                                    <br>
                                                    <input style="margin-top: 8px;" class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                    <label style="margin-top: -35px; margin-left: auto;" class="form-check-label" for="invalidCheck">
                                                        Aceito os termos e condicoes de uso.
                                                    </label>
                                                    <div class="invalid-feedback">
                                                        Voce deve aceitar os termos de uso.
                                                    </div> 
                                                </div>

                                                <BR>
                                                <BR>
                                                <div>
                                                <div class="row col-md-12">
                                                    <button style="width: 200px;" class="btn btn-success"  type="submit">Enviar Cadastro</button><BR>





                                                    <button style="width: 200px;" type="reset" class="btn btn-secondary" id="btlimpar" title="Limpar campos">Limpar Campos</button>
                                                </div>

                                       </div>
                                        </form> 

                                        <!-- PJ  -->
                                        <form action= "cadUsuario.php?PJsucesso" method="post" hidden="" class="needs-validation" name="juridico" id="cadPJ" novalidate>
                                            <div class="col-md-6">


                                                <label for="validationCustom11">Nome</label><br>
                                                <input type="text" size="30" class="form-control" name="pj_nome" id="pj_nome" placeholder="Nome" value="" required>
                                                <div class="valid-feedback">
                                                    Otimo!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Insira um nome valido.
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom12">Sobrenome</label><br>
                                                <input type="text" size="50" class="form-control" name="pj_sobrenome" id="pj_sobrenome" placeholder="Sobrenome" value="" required>
                                                <div class="valid-feedback">
                                                    Otimo!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Insira um sobrenome valido.
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="input-group-prepend">
                                                    <span  class="input-group-text" id="inputGroupPrepend1">@</span><label>E-mail</label>

                                                </div>
                                                <input  type="email" class="form-control" name="pj_email" id="pj_email" placeholder="E-mail" aria-describedby="inputGroupPrepend" required>
                                                <div class="valid-feedback">
                                                    Tudo certo com seu E-mail!
                                                </div>
                                                <div class="invalid-feedback">
                                                    O e-mail informado e invalido.
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <label for="validationCustom16">CNPJ</label>
                                                <input type="text" size="30" class="form-control" name="pj_cnpj" id="pj_cnpj" placeholder="CNPJ" required>
                                                <div class="valid-feedback">
                                                    CNPJ Validado!
                                                </div>
                                                <div class="invalid-feedback">
                                                    O CNPJ informado nao e valido.
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <fieldset style="margin-top: 20px;">
                                                    <legend style="margin-left: 0px; margin-top: 20px; font-size: 10pt; font-family: Arial; font-weight: bold; color: black;">Inf Resp Legal</legend>
                                                    <div class="col-md-11" style="margin-top: -10px; margin-left:  -15px;">
                                                        <label for="validationCustom17">Nome Completo</label>
                                                        <input type="text" class="form-control" name="pj_responsavel" id="pj_responsavel" placeholder="Nome Completo" required>
                                                        <div class="valid-feedback">
                                                            Otimo!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Informe o nome completo do responsavel pela empresa.
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6" style="margin-top: 10px; margin-left:  -15px; margin-bottom: 20px;">
                                                        <label for="validationCustom18">CPF</label>
                                                        <input type="text" class="form-control" name="responsavel_cpf" id="responsavel_cpf" placeholder="CPF" required>
                                                        <div class="valid-feedback">
                                                            Estamos quase finalizando seu cadastro!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Informe o CPF do responsavel pela empresa.
                                                        </div>
                                                    </div>

                                                </fieldset>
                                                <hr style="margin-top: -10px; color:black;">
                                            </div>
                                            <div class="col-md-6" style="margin-top: -10px;">
                                                <label for="validationCustom21">Usuario</label>
                                                <input type="text" class="form-control" name="pj_usuario" id="pj_usuario" placeholder="Usuario" required>
                                                <div class="valid-feedback">
                                                    OK!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Cadastre seu usuario.
                                                </div>
                                            </div>

                                            <div class="col-md-6" style="margin-top: -10px;">
                                                <label for="validationCustom19">Senha</label>
                                                <input type="password" class="form-control" name="pj_senha" id="pj_senha" placeholder="Senha" required>
                                                <div class="valid-feedback">
                                                    OK!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Insira uma senha valida.
                                                </div>
                                            </div>

                                            <div class="col-md-6" style="margin-top: 10px;">
                                                <label for="validationCustom20">Confirmar Senha</label>
                                                <input type="password" class="form-control" name="pj_senha2" id="pj_senha2" placeholder="Confirmar Senha" required>
                                                <div class="valid-feedback">
                                                    Prontinho!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Insira uma senha valida.
                                                </div>
                                            </div>

                                            <div class="col-md-8" style="margin-top: auto;">
                                                <br>
                                                <input style="margin-top: 8px;" class="form-check-input" type="checkbox" value="" id="invalidCheck1" required>
                                                <label style="margin-top: -35px; margin-left: auto;" class="form-check-label" for="invalidCheck1">
                                                    Aceito os termos e condicoes de uso.
                                                </label>
                                                <div class="invalid-feedback">
                                                    Voce deve aceitar os termos de uso.
                                                </div> 

                                                <BR>
                                                <BR>
                                                <div class="row col-md-12">
                                                    <button style="width: 200px;" class="btn btn-success" type="submit">Enviar Cadastro</button><BR>





                                                    <button style="width: 200px;" type="reset" class="btn btn-secondary" id="btlimpar2" title="Limpar campos">Limpar Campos</button>
                                                </div>

                                            </div>
                                        </form>
                                        <!--      <input type='button' name='Esconder' value='Esconder' onClick='tipoCadastro2()'>
                                              <input type='button' name='Mostrar' value='Mostrar' onClick='tipoCadastro1()'>
                                        -->
                                        <script>
                                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                                            (function () {

                                                'use strict';
                                                window.addEventListener('load', function () {

                                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                                    var forms = document.getElementsByClassName('needs-validation');
                                                    // Loop over them and prevent submission
                                                    var validation = Array.prototype.filter.call(forms, function (form) {
                                                        form.addEventListener('submit', function (event) {


                                                            if (form.checkValidity() === false) {

                                                                event.preventDefault();
                                                                event.stopPropagation();

                                                            }

                                                            form.classList.add('was-validated');

                                                        }, false);

                                                    });
                                                }, false);
                                            })();


                                        </script>  



                                    </div>



                                </div>

                            </div>
                        </div>  

                        <hr>

                    </div>

                </div>
                <div class="col-sm-3 ml-auto" id='ads'>
                    <div style='margin-left: auto; margin-right: auto; height: auto; width: auto;' class="well">
                        <p>ADS1</p>
                        <img style='margin-left: -10px; margin-right: auto; height: 200px; width: 225px;' src="https://s3-sa-east-1.amazonaws.com/projetos-artes/fullsize%2F2011%2F03%2F29%2F07%2FWDL-Logo-2700_11465_035003743_1869315452.jpg"  alt="Responsive image">
                    </div>    

                    <div style='margin-left: auto; margin-right: auto; height: auto; width: auto;' class="well">
                        <p>ADS2</p>
                        <img style='margin-left: -10px; margin-right: auto; height: 200px; width: 225px;' src="http://www.logotipos.ind.br/conteudo/logos/trilha_letras_logotipo_editoras_infantis.jpg"  alt="Responsive image">
                    </div>

                    <div style='margin-left: auto; margin-right: auto; height: auto; width: auto;' class="well">
                        <p>ADS3</p>
                        <img style='margin-left: -10px; margin-right: auto; height: 200px; width: 225px;' src="https://png.pngtree.com/templates/md/20180310/md_5aa3bf3bc3a89.jpg" alt="Responsive image">
                    </div>
                </div>



            </div>


        </div>




        <footer class="container" id='bottom'>
            <div class="row">
                <div class="col">
                    <div class="bs-example">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>   

                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <center> <img style='height: 150px; width: auto;' src="imagens/unama2.png"  alt="First Slide"> </center>
                                </div>
                                <div class="item">
                                    <center> <img style='height: 150px; width: auto;' src="imagens/capaLivro.jpeg" alt="Second Slide"> </center>
                                </div>
                                <div class="item">
                                    <center> <img style='height: 150px; width: auto;' src="imagens/delphi7.jpg" alt="Third Slide"> </center>
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

    </div>



    <!-- /container -->        
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
                                            (function (b, o, i, l, e, r) {
                                                b.GoogleAnalyticsObject = l;
                                                b[l] || (b[l] =
                                                        function () {
                                                            (b[l].q = b[l].q || []).push(arguments)
                                                        });
                                                b[l].l = +new Date;
                                                e = o.createElement(i);
                                                r = o.getElementsByTagName(i)[0];
                                                e.src = '//www.google-analytics.com/analytics.js';
                                                r.parentNode.insertBefore(e, r)
                                            }(window, document, 'script', 'ga'));
                                            ga('create', 'UA-XXXXX-X', 'auto');
                                            ga('send', 'pageview');
    </script>



        <style>

            h1 {
                color: #A6A49C;
                font-family: 'Palanquin', Arial, sans-serif;
            }

            h4 {
                margin-top: -50px;
                color: #A6A49C;
                font-family: 'Palanquin', Arial, sans-serif;
            }

        </style>

        <form id="submitForm">
        <div class="container" hidden="">

            <div class="row text-center">
                <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#basicModal" id="btmodal">Click to open Modal</a>
            </div>
        </div>

        <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="modal-header">
                        <div class="modal-body">
                            <center><h1>Que legal!!</h1></center>
                        </div>
                        <h4 class="modal-title" id="myModalLabel">Recebemos seu cadastro!<BR>
                            Agora você já pode entrar no seu portal e compartilhar muitos livros =)</h4>
                    </div>

                    <div class="modal-footer">
                        <a href="index.php"><button type="button" class="btn btn-primary">Ver Anuncios</button></a>
                        <a href="login.php"><button type="button" class="btn btn-success">Login</button></a>
                    </div>
                </div>
            </div>
        </div>
        </form>


        <form id="submitForm2">
            <div class="container" hidden="">

                <div class="row text-center">
                    <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#basicModal2" id="btmodal2">Click to open Modal</a>
                </div>
            </div>

            <div class="modal fade" id="basicModal2" tabindex="-1" role="dialog" aria-labelledby="basicModal2" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <div class="modal-header">
                            <div class="modal-body">
                                <center><h1>Que chato!! =(</h1></center>
                            </div>
                            <h4 class="modal-title" id="myModalLabel">Você precisa efetuar o login para ter acesso a está pagina!</h4>
                        </div>

                        <div class="modal-footer">
                            <a href="index.php"><button type="button" class="btn btn-primary">Ver Anuncios</button></a>
                            <a href="cadUsuario.php"><button type="button" class="btn btn-success">Cadastre-se</button></a>
                            <a href="login.php"><button type="button" class="btn btn-success">Login</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </form>

      </body>
</html>
