﻿<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Detalhes do Anuncio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!-- Arquivos de configuracao, bootstrap, css -->
        <!--     <script src="libs/JQuery-3.3.1/jquery-3.3.1.min.js" type="text/javascript"></script>
             <link href="libs/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
             <script src="libs/bootstrap/bootstrap.min.js" type="text/javascript"></script>
             <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        -->
        
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="css/detalheAnuncio.css" rel="stylesheet" type="text/css"/>

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

            }   

            #sidebar {
                margin: auto;
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


        <style>
            body{
                width: auto;
            }
            #items{
                overflow-x: scroll;
                width: auto;
                white-space: nowrap;
            }
            .imagemAnuncio {

                display: inline-block;
                width: 100px;
                height: 100px;
                border:1px solid;
                margin-left: 10px;
                margin-right: auto;
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


                    <div class="container">

                        <div class="row">

                            <div class="col-sm-6 ml-auto" id="conteudoCentral" style="border: solid 2px green;"> 




                                <center><label style="color: green; font-weight: bold; font-size: 17pt;">Detalhe do anuncio</label></center>

                                <div style="margin-left: 10px; width: auto;" id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">


                                        <div class="item active">
                                            <center>   <img src="imagens/capaLivro.jpeg" alt="Livro Redes de Computadores" style="width: 200px; height: 200px;"> </center>
                                            <div class="carousel-caption">

                                                <h3>Redes de Computadores</h3>
                                                <p>2018!</p>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <center>   <img src="imagens/capaLivro.jpeg" alt="Imagem 2" style="width: 200px; height: 200px;"> </center>
                                            <div class="carousel-caption">

                                                <h3>Kurose</h3>
                                                <p>2018!</p>
                                            </div>
                                        </div>

                                        <div class="item">
                                            <center>     <img src="imagens/capaLivro.jpeg" alt="Imagem 3" style="width: 200px; height: 200px;"> </center>
                                            <div class="carousel-caption">
                                                <h3>Sobre o Livro</h3>
                                                <p>Informacoes!</p>
                                            </div>


                                        </div>



                                    </div>





                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>

                                </div>


                                <br>
                                <div class="col">
                                    <div id="items" class="card example-1 scrollbar-ripe-malinka" style="width: auto; height: auto; margin-left: auto;">
                                        <div class="imagemAnuncio">
                                            <img src="imagens/capaLivro.jpeg" alt="Imagem 1" style="width: 100px; height: 100px;">
                                        </div>
                                        <div class="imagemAnuncio">
                                            <img src="imagens/capaLivro.jpeg" alt="Imagem 2" style="width: 100px; height: 100px;">
                                        </div>
                                        <div class="imagemAnuncio">
                                            <img src="imagens/capaLivro.jpeg" alt="Imagem 3" style="width: 100px; height: 100px;">
                                        </div>
                                        <div class="imagemAnuncio">
                                            <img src="imagens/capaLivro.jpeg" alt="Imagem 4" style="width: 100px; height: 100px;">
                                        </div>
                                        <div class="imagemAnuncio">
                                            <img src="imagens/capaLivro.jpeg" alt="Imagem 5" style="width: 100px; height: 100px;">
                                        </div>
                                        <div class="imagemAnuncio">
                                            <img src="imagens/capaLivro.jpeg" alt="Imagem 6" style="width: 100px; height: 100px;">
                                        </div>
                                    </div>
                                    <br>
                                    <br>        

                                    <div class='container' style='width: auto; height: auto;'>
                                        <div class='row'>

                                         

                                            <fieldset style="border: dashed 1px #c9ffcb; width: auto; padding: 5pt; width: auto; height: auto; margin-left: 5px; margin-top: auto; margin-right: auto;">
                                                <legend style='width: auto;'>Dados do Livro</legend>
                                                
                                              
                                       <div class="card bg-warning mb-4" style=" float: right; margin-left: 16px; max-width: 20rem;">
                                                     <center>  <div class="card-header text-warning"><b style='color: red; font-family: Tahoma; font-size: 13pt;'>Importante!!</b></div> </center>
                                                <div class="card-body">
                                                     
                                                    <center>  <h5 class="card-title">Venda, Troca ou Doacoes..</h5> </center>
                                                        <center>  <p class="card-text">Dicas importantes para uma boa negociacao.</p> </center>
                                                    <ul> 
                                                        <li> <p class="card-text">Confirme a identidade do anunciance.</p> </li>
                                                        <li> <p class="card-text">sempre marque sua negociacao em locais publicos.</p> </li>
                                                    </ul>
                                                </div>
                                            

                                         </div>
                                                <span class="text-info">Livro:</span><br> <label class="custom-control"> Redes de Computadores </label><br>
                                                <span class="text-info">ISBN:</span><br> <label class="custom-control"> 3928318029382 </label><br>
                                                <span class="text-info">Editora:</span><br> <label class="custom-control"> Teste </label><br>
                                                <span class="text-info">Categoria:</span><br> <label class="custom-control"> Informatica </label><br>

                                                <span class="text-info"><img src="imagens/vendeLivro.png" alt='Anuncio Vende livro' width="60" height="60" title='Anuncio de Venda'></span>
                                                <span class="text-info"></span><label class="custom-control" style='color: red; font-size: 14pt;'> R$ 80,00 </label>


                                                
                                                
                                                <div>
                                                    <br>
                                                    <span class="text-info">Discricao:</span><br>
                                                    <div class='card'>
                                                        Descricao do Livro de Redes..............<br>
                                                        Teste do compo de descricao!
                                                    </div>
                                                </div>

                                                <br>
                                                <br>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class='container' style='width: auto; height: auto;'>
                                    <div class='row'>
                                        <fieldset style="border: dashed 1px #c9ffcb; width: auto; padding: 5pt; width: auto; height: auto; margin-left: 5px; margin-top: auto; margin-right: auto;">
                                            <legend style='width: auto;'>Dados do Anunciante</legend>

                                            <span class="text-info">Nome:</span><br> <label class="custom-control">Thiago Dias </label><br>
                                            <span class="text-info">Telefone:</span><br> <label class="custom-control">(91) 98222-2232 </label>

                                            <div>
                                                <span class="text-info">Avaliacao do Anunciante:</span><br>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span> 

                                            </div>

                                            <br>
                                            <br>
                                        </fieldset>

                                    </div>
                                </div>


                            </div>
                            <!-- Grid row -->





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

                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                        </ol>   


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
            </div>
        </div>
        
        
        
        
        
    </body>


</html>
