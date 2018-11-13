<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>XipBook, Compartilhamento de Livros =)</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <link href="css/estilo2.css" rel="stylesheet" type="text/css"/>

        <link href="css/estilo3.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo4.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo5.css" rel="stylesheet" type="text/css"/>



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
                width: auto;

                margin-top: 5px;
                margin-left: 5px;

                background-color: #fafafa;
                border-radius: 1% 1% 1% 1%;
                margin-bottom: 5px;
                margin-right: 5px;
            }

            #ads {
                margin: auto;
                display: block;
                border-radius: 1% 1% 1% 1%;
                border: solid 2px blue;
                margin-top: 5px;
                height: 909px;
                width: auto;
                position: relative;
                background-color: #fafafa;

                margin-bottom: 5px;
            }   

            #sidebar {
                margin: auto;
                display: block;
                border: solid 2px yellow;
                height: 909px;
                width: auto;
                position: relative;
                background-color: #fafafa;
                margin-left: auto;
                margin-top: 5px;

                border-radius: 1% 1% 1% 1%;
            }

            #bottom {

                display: block;
                border: solid 2px red;


                height: auto;
                width: auto;

                background-color: #fafafa;

                border-radius: 1% 1% 1% 1%;
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
                                        <li><form style="padding: 10pt; height: 80px;" class="form-inline">

                                                <div class="btn-group">
                                                    <a class="btn ribbon" href="inserirAnuncio.html"><span class="btn ribbon"><button style="margin-top: 0px; width: 140px; height: 40px" type="button" class="btn btn-success ribbon">Anuncie Ja!</button></span></a>



                                                    <a href='index.html'><button style="margin-top: 20px;" class="btn btn-primary btn-sm" type="button">Pagina Inicial</button></a>
                                                    <a href='cadUsuario2.html'><button style="margin-top: 20px;" class="btn btn-primary btn-sm" type="button">Cadastro</button></a>


                                                    <a href='contato.html'><button style="margin-top: 20px;" class="btn btn-primary btn-sm" type="button">Contato</button></a>

                                                    <a href='sobre.html'><button style="margin-top: 20px;" class="btn btn-primary btn-sm" type="button">Sobre</button></a>
                                                    <a href='configuracao.html'><button style="margin-top: 20px;" class="btn btn-primary btn-sm" type="button">Perfil</button></a>
                                                </div>   
                                            </form></li>


                                    </ul>
                                    <ul style="width: 50px;" class="nav navbar-nav navbar-right">
                                        <li><a href='login.html'><span class="glyphicon glyphicon-log-in"></span><span style="color: #002752;; font-family: Tahoma; width: auto;"> Login</span></a></li>
                                    </ul>


                                </div>
                            </div>
                        </nav>



                    </div>
                </div>
            </div>
            <div class="container">    
                <div class="row content">
                    <div class="col-sm-3 col-xs sidenav ml-auto" id='sidebar'>
                        <div class="campoBuscar1">


                            <nav id="navBuscar" class="navbar navbar-light bg-light">
                                <form class="form-inline">
                                    <input style='width: 260px;' class="form-control mr-sm-1" type="search" placeholder="O que voce procura?" aria-label="Search"> <button id="btBuscar" class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
                                    <BR>
                                    <br>
                                    <p>  <button type='button' style='margin-left: 0px;' id='btFiltrar' class="btn btn-success my-2 my-sm-0" data-toggle="collapse" data-target="#myNavbar1">Filtrar</button> </p>



                                    <div class="collapse" id="myNavbar1">
                                        <ul class="nav navbar-nav">
                                            <li><input type="checkbox"> TESTE 1</li>
                                            <li><input type="checkbox"> TESTE 2</li>
                                            <li><input type="checkbox"> TESTE 3</li>
                                            <li><input type="checkbox"> TESTE 4</li>
                                            <li><input type="checkbox"> TESTE 5</li>
                                            <li><input type="button" value='OK' name='OK'></li>


                                        </ul>

                                    </div>


                                </form>
                            </nav>
                        </div>
                        <div style="width: auto;" class="campoCategorias">

                            <div  id="v-pills-tab" role="tablist" style="width: auto;">
                                <span id="cat">Categorias</span>
                                <hr style="border: solid 1px black; width: auto;">
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
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Portugues</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Ingles</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Contabilidade</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Enfermagem</label>
                                </div>
                                <span>Literatura</span>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label" for="customCheck5">Nacional</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                    <label class="custom-control-label" for="customCheck6">Internacional</label>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-sm-7 ml-auto text-left" id="conteudoCentral"> 


                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12 mb-4">

                                <!-- Exaple 1 -->
                                <div class="card example-1 scrollbar-ripe-malinka">
                                    <div class="card-body">
                                        <!--      <h4 style='text-align: center; align-content: center; font-family: Verdana; color:blue;' id="section1"><span style='text-align: center; align-content: center; color: green;'>Lista de Anuncios</span></h4>
                                        -->
                                        <a href=""><div class="anuncios"> 
                                                <img src="imagens/direitoadm.png" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Manual Direito Administrativo 2018</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198TT<br>
                                                    Ano: 2018
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img src="imagens/doaLivro.png" alt="" width="100" height="100" title="Anuncio de Doacao"/>
                                                </div>

                                            </div>

                                            <div class="dataAnuncio3">07/10/18 - 15:12</div>
                                        </a>
                                        <a href="mostraAnuncio.html"><div class="anuncios"> 
                                                <img src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Redes de computadores e a internet</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198XX<br>
                                                    Ano: 2013
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                                                </div>
                                                <div class="valor">
                                                    <b>R$ 100,00</b>

                                                </div>
                                                <div class="data">05/10/18 - 11:43</div>


                                            </div>

                                        </a>

                                        <a href=""><div class="anuncios"> 
                                                <img src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Redes de computadores e a internet</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198XX<br>
                                                    Ano: 2013
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                                                </div>
                                                <div class="valor">
                                                    <b>R$ 100,00</b>

                                                </div>
                                                <div class="data">05/10/18 - 11:43</div>
                                                <div class="dataAnuncio">05/10/18 - 11:43</div>

                                            </div>

                                        </a>
                                        <a href=""><div class="anuncios"> 
                                                <img src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Redes de computadores e a internet</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198XX<br>
                                                    Ano: 2013
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                                                </div>
                                                <div class="valor">
                                                    <b>R$ 100,00</b>

                                                </div>
                                                <div class="data">05/10/18 - 11:43</div>
                                                <div class="dataAnuncio">05/10/18 - 11:43</div>

                                            </div>

                                        </a>


                                        <a href=""><div class="anuncios">

                                                <img src="imagens/capaJava.jpeg" alt="" width="120" height="149"/>                          
                                                <div class="conteudoLivro"> 
                                                    <b>Java para Iniciantes by Adalberto!</b><br>
                                                    <!--       <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/>  -->
                                                    <p>por Google (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198YY<br>
                                                    Ano: 2010
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img src="imagens/aceitaDoacao.png" alt="" width="100" height="100" title="Anuncio de Aceita Doacao"/>
                                                </div>
                                                <div class="valor">


                                                </div>
                                                <div class="dataAnuncio">01/10/18 - 16:13</div>

                                            </div>
                                        </a>

                                        <a href=""><div class="anuncios">

                                                <img src="imagens/capaArtedaGuerra.jpg" alt="" width="120" height="149"/>                         
                                                <div class="conteudoLivro"> 
                                                    <b>A Arte da Guerra</b><br>
                                                    <!--  <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Sun Tzu (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198ZZ<br>
                                                    Ano: 2009
                                                </div>
                                                <div class="tipoAnuncio">

                                                    <img src="imagens/trocaLivro.png" alt="" width="100" height="100" title="Anuncio de Troca"/>
                                                </div>
                                                <div class="valor"></div>
                                                <div class="data"></div>
                                                <div class="dataAnuncio">06/10/18 - 07:43</div>



                                            </div>


                                        </a>



                                        <a href=""><div class="anuncios"> 
                                                <img src="imagens/delphi7.jpg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Aprenda a programar com Borland Delphi 7</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198OO<br>
                                                    Ano: 2005
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img src="imagens/buscaLivro.png" alt="" width="100" height="100" title="Anuncio de Busca"/>
                                                </div>

                                                <div class="data"></div>
                                                <div class="dataAnuncio1">07/10/18 - 19:43</div>


                                            </div>

                                        </a>

                                        <a href=""><div class="anuncios"> 
                                                <img src="imagens/direitoadm.png" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Manual Direito Administrativo 2018</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198TT<br>
                                                    Ano: 2018
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img src="imagens/doaLivro.png" alt="" width="100" height="100" title="Anuncio de Doacao"/>
                                                </div>

                                            </div>
                                            <div class="data"></div>
                                            <div class="dataAnuncio4">07/10/18 - 15:12</div>



                                        </a>

                                        <a href=""><div class="anuncios"> 
                                                <img src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Redes de computadores e a internet</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198XX<br>
                                                    Ano: 2013
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                                                </div>
                                                <div class="valor">
                                                    <b>R$ 100,00</b>

                                                </div>
                                                <div class="data">05/10/18 - 11:43</div>


                                            </div>

                                        </a>

                                        <a href=""><div class="anuncios"> 
                                                <img src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Redes de computadores e a internet</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198XX<br>
                                                    Ano: 2013
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                                                </div>
                                                <div class="valor">
                                                    <b>R$ 100,00</b>

                                                </div>
                                                <div class="data">05/10/18 - 11:43</div>


                                            </div>

                                        </a>
                                        <a href=""><div class="anuncios"> 
                                                <img src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Redes de computadores e a internet</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198XX<br>
                                                    Ano: 2013
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                                                </div>
                                                <div class="valor">
                                                    <b>R$ 100,00</b>

                                                </div>
                                                <div class="data">05/10/18 - 11:43</div>


                                            </div>

                                        </a>
                                        <a href=""><div class="anuncios"> 
                                                <img src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Redes de computadores e a internet</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198XX<br>
                                                    Ano: 2013
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                                                </div>
                                                <div class="valor">
                                                    <b>R$ 100,00</b>

                                                </div>
                                                <div class="data">05/10/18 - 11:43</div>


                                            </div>

                                        </a>
                                        <a href=""><div class="anuncios"> 
                                                <img src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          

                                                <div class="conteudoLivro"> 
                                                    <b>Redes de computadores e a internet</b><br>
                                                    <!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
                                                    <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                                                    <BR>
                                                    ISBN: 9788535928198XX<br>
                                                    Ano: 2013
                                                </div>
                                                <div class="tipoAnuncio">
                                                    <img src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                                                </div>
                                                <div class="valor">
                                                    <b>R$ 100,00</b>

                                                </div>
                                                <div class="data">05/10/18 - 11:43</div>


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

                    <div class="col-sm-2 sidenav ml-auto" id='ads'>
                        <div class="well">
                            <p>ADS1</p>
                            <img style='height: 200px; width: auto;' src="https://s3-sa-east-1.amazonaws.com/projetos-artes/fullsize%2F2011%2F03%2F29%2F07%2FWDL-Logo-2700_11465_035003743_1869315452.jpg"  alt="Responsive image">
                        </div>    

                        <div class="well">
                            <p>ADS1</p>
                            <img style='height: 200px; width: auto;' src="http://www.logotipos.ind.br/conteudo/logos/trilha_letras_logotipo_editoras_infantis.jpg"  alt="Responsive image">
                        </div>

                        <div class="well">
                            <p>ADS1</p>
                            <img style='height: 200px; width: auto;' src="https://png.pngtree.com/templates/md/20180310/md_5aa3bf3bc3a89.jpg" alt="Responsive image">
                        </div>
                    </div>



                </div>


            </div>




            <footer class="container" id='bottom'>
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
                                <img style='height: 200px; width: auto;' src="imagens/unama2.png"  alt="First Slide">
                            </div>
                            <div class="item">
                                <img style='height: 200px; width: auto;' src="imagens/capaLivro.jpeg" alt="Second Slide">
                            </div>
                            <div class="item">
                                <img style='height: 200px; width: auto;' src="imagens/delphi7.jpg" alt="Third Slide">
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
            </footer>

        </div>
    </body>
</html>
