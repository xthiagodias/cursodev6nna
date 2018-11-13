<?php
//session_start();


$pf_usuario = '';
$pf_senha = '';


include('conexao/conexao.php');


$pf_usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$pf_senha = isset($_POST['senha']) ? $_POST['senha'] : '';



$pf_usuario = mysqli_real_escape_string($conexao, $pf_usuario);
$pf_senha = mysqli_real_escape_string($conexao, $pf_senha);


$query = "select idcad_pf, pf_usuario,pf_senha from cad_pf where pf_usuario = '{$pf_usuario}' and pf_senha = md5('{$pf_senha}')";



/* @var $sql type */
//$sql = mysqli_query($conexao, "SELECT idcadastro, usuario FROM cadastro WHERE usuario = '".$_POST['usuario']."'");



$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);


if ($row == 1) {

    $_SESSION['usuario'] = $pf_usuario;
    //   echo $row;
    //  echo '<BR>';
    //   echo 'Conexao OK!';
    header('Location: perfil.php');
    exit();

} else {
    // echo $row;
    $_SESSION['nao_autenticado'] = true;
    // echo '<BR>';
    // echo 'Usuario ou senha invalidos!';
    // header('Location: index.php');
    //  exit();
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

        <link href="css/estilo6.css" rel="stylesheet" type="text/css"/>

        <script src="javascript/pagina.js" type="text/javascript"></script>
        <script src="javascript/materialize.js" type="text/javascript"></script>

        <script src="css4.1/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="css4.1/js/bootstrap.js" type="text/javascript"></script>

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
                margin: auto;
                display: block;
                border: solid 2px red;
                height: auto;
                width: auto;
                background-color: #fafafa;
                margin-top: auto;

            }

            #conteudoCentral {
                margin: auto;
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
                margin: auto;
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
                margin: 0auto;
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

    <input type="text" name="usuario" id="usuario" hidden="">
    <input type="text" name="senha" id="senha" hidden="">

        <div id='principal'>
            <div class="container">


                <?php
                if(isset($_SESSION['nao_autenticado']));
                ?>

                <div class="notification is-danger">
                    <b></b> <div hidden="" id="erro">ERRO: Usuario ou senha invalidos.</div></b>
                </div>

                <?php
                unset($_SESSION['nao_autenticado']);
                ?>


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
                                                    <a href='cadUsuario.php'><button style="margin-top: 0;" class="btn btn-primary btn-sm" type="button">Cadastro</button></a>


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
                                        <a href=""><div class="anuncios"> 
                                                <img id="imganuncio" src="imagens/direitoadm.png" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Manual Direito Administrativo 2018</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198TT<br>
                                                    Ano: 2018
                                                </div>

                                                <div class="tipoAnuncio">
                                                    <img style="float: right; position: relative; margin-right: auto; margin-top: -110px;" src="imagens/doaLivro.png" alt="" width="100" height="100" title="Anuncio de Doacao"/>
                                                    <div class="dataAnuncio">05/10/18 - 11:43</div>
                                                </div>

                                            </div>

                                        </a>
</div>
                                        
                                        <a href="mostraAnuncio.php"><div class="anuncios">
                                                <img id="imganuncio" src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Redes de computadores e a internet</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198XX<br>
                                                    Ano: 2013
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img style="float: right; position: relative; margin-right: auto; margin-top: -110px;" src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                                                </div>
                                                <div class="valor">
                                                    <b>R$ 100,00</b>

                                                </div>
                                                <div class="dataAnuncio">05/10/18 - 11:43</div>


                                            </div>


                                        </a>

                                        <a href=""><div class="anuncios"> 
                                                <img id="imganuncio" src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Redes de computadores e a internet</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198XX<br>
                                                    Ano: 2013
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img style="float: right; position: relative; margin-right: auto; margin-top: -110px;" src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                                                </div>
                                                <div class="valor">
                                                    <b>R$ 100,00</b>

                                                </div>
                                                <div class="dataAnuncio">05/10/18 - 11:43</div>

                                            </div>

                                        </a>
                                        <a href=""><div class="anuncios"> 
                                                <img id="imganuncio" src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Redes de computadores e a internet</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198XX<br>
                                                    Ano: 2013
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img style="float: right; position: relative; margin-right: auto; margin-top: -110px;" src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                                                </div>
                                                <div class="valor">
                                                    <b>R$ 100,00</b>

                                                </div>

                                                <div class="dataAnuncio">05/10/18 - 11:43</div>

                                            </div>

                                        </a>


                                        <a href=""><div class="anuncios">

                                                <img id="imganuncio" src="imagens/capaJava.jpeg" alt="" width="120" height="149"/>                          
                                                <div class="conteudoLivro"> 
                                                    <b>Java para Iniciantes by Adalberto!</b><br>
                                                    <!--       <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/>  -->
                                                    <p>por Google (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198YY<br>
                                                    Ano: 2010
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img style="float: right; position: relative; margin-right: auto; margin-top: -110px;" src="imagens/aceitaDoacao.png" alt="" width="100" height="100" title="Anuncio de Aceita Doacao"/>
                                                </div>
                                                <div class="valor">


                                                </div>
                                                <div class="dataAnuncio">01/10/18 - 16:13</div>

                                            </div>
                                        </a>

                                        <a href=""><div class="anuncios">

                                                <img id="imganuncio" src="imagens/capaArtedaGuerra.jpg" alt="" width="120" height="149"/>                         
                                                <div class="conteudoLivro"> 
                                                    <b>A Arte da Guerra</b><br>
                                                    <!--  <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Sun Tzu (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198ZZ<br>
                                                    Ano: 2009
                                                </div>
                                                <div class="tipoAnuncio">

                                                    <img style="float: right; position: relative; margin-right: auto; margin-top: -110px;" src="imagens/trocaLivro.png" alt="" width="100" height="100" title="Anuncio de Troca"/>
                                                </div>     
                                                <div class="dataAnuncio">06/10/18 - 07:43</div>



                                            </div>


                                        </a>



                                        <a href=""><div class="anuncios"> 
                                                <img id="imganuncio" src="imagens/delphi7.jpg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Aprenda a programar com Borland Delphi 7</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198OO<br>
                                                    Ano: 2005
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img style="float: right; position: relative; margin-right: auto; margin-top: -110px;" src="imagens/buscaLivro.png" alt="" width="100" height="100" title="Anuncio de Busca"/>
                                                </div>


                                                <div class="dataAnuncio">07/10/18 - 19:43</div>


                                            </div>

                                        </a>

                                        <a href=""><div class="anuncios"> 
                                                <img id="imganuncio" src="imagens/direitoadm.png" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Manual Direito Administrativo 2018</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198TT<br>
                                                    Ano: 2018
                                                </div>

                                                <div class="tipoAnuncio">
                                                    <img style="float: right; position: relative; margin-right: auto; margin-top: -110px;" src="imagens/doaLivro.png" alt="" width="100" height="100" title="Anuncio de Doacao"/>
                                                    <div class="dataAnuncio">05/10/18 - 11:43</div>
                                                </div>

                                            </div>

                                        </a>

                                        <a href=""><div class="anuncios"> 
                                                <img id="imganuncio" src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Redes de computadores e a internet</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198XX<br>
                                                    Ano: 2013
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img style="float: right; position: relative; margin-right: auto; margin-top: -110px;" src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                                                </div>
                                                <div class="valor">
                                                    <b>R$ 100,00</b>

                                                </div>
                                                <div class="dataAnuncio">05/10/18 - 11:43</div>


                                            </div>

                                        </a>

                                        <a href=""><div class="anuncios"> 
                                                <img id="imganuncio" src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Redes de computadores e a internet</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198XX<br>
                                                    Ano: 2013
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img style="float: right; position: relative; margin-right: auto; margin-top: -110px;" src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                                                </div>
                                                <div class="valor">
                                                    <b>R$ 100,00</b>

                                                </div>
                                                <div class="dataAnuncio">05/10/18 - 11:43</div>


                                            </div>

                                        </a>
                                        <a href=""><div class="anuncios"> 
                                                <img id="imganuncio" src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Redes de computadores e a internet</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198XX<br>
                                                    Ano: 2013
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img style="float: right; position: relative; margin-right: auto; margin-top: -110px;" src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                                                </div>
                                                <div class="valor">
                                                    <b>R$ 100,00</b>

                                                </div>
                                                <div class="dataAnuncio">05/10/18 - 11:43</div>


                                            </div>

                                        </a>
                                        <a href=""><div class="anuncios"> 
                                                <img id="imganuncio" src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Redes de computadores e a internet</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198XX<br>
                                                    Ano: 2013
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img style="float: right; position: relative; margin-right: auto; margin-top: -110px;" src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                                                </div>
                                                <div class="valor">
                                                    <b>R$ 100,00</b>

                                                </div>
                                                <div class="dataAnuncio">05/10/18 - 11:43</div>


                                            </div>

                                        </a>
                                        <a href=""><div class="anuncios"> 
                                                <img id="imganuncio" src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Redes de computadores e a internet</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198XX<br>
                                                    Ano: 2013
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img style="float: right; position: relative; margin-right: auto; margin-top: -110px;" src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                                                </div>
                                                <div class="valor">
                                                    <b>R$ 100,00</b>

                                                </div>
                                                <div class="dataAnuncio">05/10/18 - 11:43</div>


                                            </div>

                                        </a>

                                        <!--     <div class='col-xs-1' id='paginacao'>
                                                 <nav aria-label="Page navigation example">
                                                     <ul class="pagination">
                                                         <li class="page-item">
                                                             <a class="page-link" href="#" aria-label="Previous">
                                                                 <span aria-hidden="true">&laquo;</span>
                                                                 <span class="sr-only">Previous</span>
                                                             </a>
                                                         </li>
                                                         <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                         <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                         <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                         <li class="page-item">
                                                             <a class="page-link" href="#" aria-label="Next">
                                                                 <span aria-hidden="true">&raquo;</span>
                                                                 <span class="sr-only">Next</span>
                                                             </a>
                                                         </li>
                                                     </ul>
                                                 </nav>
                                             </div> -->
                                    </div>



                                </div>

                            </div>
                        </div>  

                        <hr>

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

    </body>
</html>
