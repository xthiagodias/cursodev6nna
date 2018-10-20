﻿<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>XipBook, Compartilhamento de Livros =)</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Arquivos de configuracao, bootstrap, css -->
        <script src="libs/JQuery-3.3.1/jquery-3.3.1.min.js" type="text/javascript"></script>
        <link href="libs/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen"/>
        <!--  <script src="libs/bootstrap/bootstrap.min.js" type="text/javascript"></script> -->

        <script src="javascript/page.js" type="text/javascript"></script>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>

        <!--    <script src="css2/ajax.googleapis.com_ajax_libs_jquery_3.3.1_jquery.min.js" type="text/javascript"></script> -->
        <link href="css2/maxcdn.bootstrapcdn.com_bootstrap_3.3.7_css_bootstrap.min.css" rel="stylesheet" type="text/css" media="screen"/> 
        <script src="css2/maxcdn.bootstrapcdn.com_bootstrap_3.3.7_js_bootstrap.min.js" type="text/javascript"></script>



        <style>

            body {

                background-image: url('imagens/imgFundo.png');
                background-position: center center;
                background-repeat: no-repeat;
                position: relative;


            }

            body .container {

                opacity: 0.9;
                filter: alpha(opacity=20);
            }

        </style>

        <style>

            .col-xs-12 {
                display: inline;
                height: 150px;
                width: 100%;
                margin-top: 20px;
                background-color: #fafafa;
                color: white;
                text-align: center;
                border: solid 2px red;
                position: relative;
                border-radius: 1% 1% 1% 1%;

            }

            #sidebar {
                display: inline;
                border: solid 2px yellow;
                height: 900px;
                width: 321px;
                position: relative;
                background-color: #fafafa;

                border-radius: 1% 1% 1% 1%;
            }

            #conteudoCentral {
                display: inline;
                border: solid 2px green;
                margin-left: 330px;
                margin-top: -890px;
                height: 900px;
                width: 570px;
                position: relative;
                background-color: #fafafa;
                border-radius: 1% 1% 1% 1%;
            }  

            #ads {
                display: inline;
                border-radius: 1% 1% 1% 1%;
                border: solid 2px blue;
                margin-left: 909px;
                margin-top: -910px;
                height: 900px;
                width: 231px;
                position: relative;
                background-color: #fafafa;

            }      


            #bottom {
                display: inline;
                border: solid 2px red;
                width: 100%;
                margin-left: 0px;
                margin-top: 20px;
                height: 200px;
                position: relative;
                background-color: #fafafa;

                border-radius: 1% 1% 1% 1%;
            }  


            a:hover { 

                text-decoration:none; 


            }

            #paginacao {
                display: inline;
                height: 50px;
                width: 200px;
                margin-top: -90px;
                margin-left: 180px;
                background-color: #fafafa;
                color: white;
                text-align: center;

                position: relative;


            }

            #brd {
                border: solid 0px white; 

            }
        </style>

        <style type="text/css">
            .carousel{
                background: #2f4357;
                margin-top: 0px;
                height: 196px;
                width: 100%;
            }
            .carousel .item{
                min-height: 50px; /* Prevent carousel from being distorted if for some reason image doesn't load */
            }
            .carousel .item img{
                margin: 0 auto; /* Align slide image horizontally center */
            }
            .bs-example{
                margin: 0px;
                height: 20px;
            }
        </style>

    </head>


    <body>


        <div class="container">


            <div class="row">

                <div class="col-xs-12">

                    <div class="imagemLogo">
                        <img src="imagens/logotipo.png" alt="" width="170" height="130"/>
                    </div>




                    <div class="navMenu">

                        <div class="nav justify-content-end">

                            <div class="mm">




                                <nav class="nav nav-pills nav-justified">

                                    <nav class="navbar navbar-light bg-light">
                                        <form class="form-inline" style="height: 50px;">
                                            <a href='inserirAnuncio.html'><button class="btn btn-success" type="button" title="Anunciar Livro" style="width: 140px; height: 40px">Anuncie Ja!</button></a>
                                            <a href='index.html'><button class="btn btn-default btn-outline-secondary" type="button">Pagina Inicial</button></a>
                                            <a href='cadUsuario.html'><button class="btn btn-default btn-outline-secondary" type="button">Cadastro</button></a>
                                            <a href='login.html'><button class="btn btn-default btn-outline-secondary" type="button">Login</button></a>

                                            <a href='contato.html'><button class="btn btn-default btn-outline-secondary" type="button">Contato</button></a>

                                            <a href='sobre.html'><button class="btn btn-default btn-outline-secondary" type="button">Sobre</button></a>
                                            <a href='configuracao.html'><button class="btn btn-default btn-outline-secondary" type="button">Perfil</button></a>
                                        </form>


                                    </nav>
                                </nav>
                                <div class="row">
                                    <div class="col-xs-1">
                                        <form class="form-group" style="height: 50px;">
                                            <img margin-top: 0px;" src="imagens/unama2.png" alt="" width="200" height="60"/>
                                        </form>  
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>


            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-xs-12" id="sidebar">

                    <div class="campoBuscar">


                        <nav id="navBuscar" class="navbar navbar-light bg-light">
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="O que voce procura?" aria-label="Search">
                                <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
                            </form>
                            <button id="btFiltrar" class="btn btn-success my-2 my-sm-0" type="submit">Filtrar</button>
                        </nav>
                    </div>


                    <div class="campoCategorias">
                        <div class="row">
                            <div class="col-3">
                                <div  id="v-pills-tab" role="tablist">
                                    <span id="cat">Categorias</span>
                                    <hr style="width: 290px; border: solid 1px black;">
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

                    </div>


                </div>               

            </div>

        </div>




        <div class="container">
            <div class="row text-justify">
                <div class="col-xs-offset-12" id="conteudoCentral">

                    <!-- Grid row -->
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
                </div>
            </div>
        </div>


        <div class="container">

            <div class="row">
                <div class="col-xs-12" id="ads">
                    <div class='card' style='height: 150px; margin-top: 10px;'>
                        <labeL>ADS1</labeL>
                        <img src="https://s3-sa-east-1.amazonaws.com/projetos-artes/fullsize%2F2011%2F03%2F29%2F07%2FWDL-Logo-2700_11465_035003743_1869315452.jpg" class="img-fluid" alt="Responsive image">
                        <!--       <div class="campoPropagandas1">
               
               
                                   <div class="card border-success mb-3" style="max-width: 18rem;">
                                       <div class="card-header bg-transparent border-success">Header</div>
                                       <div class="card-body text-success">
                                           <h5 class="card-title">Success card title</h5>
                                           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                       </div>
                                       <div class="card-footer bg-transparent border-success">Footer</div>
                                   </div>
               
               
               
                               </div>
               
               
                        <!--          <div class="campoPropagandas">
                  
                                      TESTE
                  
                  
                                  </div>
                                  <div class="campoPropagandas2">
                  
                                      TESTE
                  
                  
                  
                  
                  
                                  </div> -->
                    </div>

                    <div class='card' style='height: 150px; margin-top: 92px;'>
                        <labeL>ADS2</labeL>
                        <img src="http://www.logotipos.ind.br/conteudo/logos/trilha_letras_logotipo_editoras_infantis.jpg" class="img-fluid" alt="Responsive image">

                    </div>

                    <div class='card' style='height: 150px; margin-top: 20px;'>
                        <labeL>ADS3</labeL>
                        <img src="https://png.pngtree.com/templates/md/20180310/md_5aa3bf3bc3a89.jpg" class="img-fluid" alt="Responsive image">

                    </div>

                </div>               

            </div>

        </div>  
    </div>
</div>
<!-- Exaple 1 -->

</div>
<!-- Grid column -->

</div>




<div class="container">
    <div class="row">
        <div class="col-xs-12" id="bottom">
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
                            <img style='height: 195px; width: auto;' src="imagens/unama.jpg"  alt="First Slide">
                        </div>
                        <div class="item">
                            <img style='height: 195px; width: auto;' src="imagens/capaLivro.jpeg" alt="Second Slide">
                        </div>
                        <div class="item">
                            <img style='height: 195px; width: auto;' src="imagens/delphi7.jpg" alt="Third Slide">
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

</div>  





<!--  <body id='corpo' style=" background-image: url('imagens/imgFundo.png');
  opacity: 0.6;
  filter: alpha(opacity=60); 
  background-position: center center;
  background-repeat: no-repeat, repeat;
  background-color: white;
  width: 100%;
  background-size: cover">-->



<!-- Corpo da Pagina -->
<!-- Topo -->


<!--
        <div class='topoPagina'>



            <div class="bannerTopo">
                <div class="imagemLogo">
                    <img src="imagens/logotipo2.png" alt="" width="170" height="130"/>
                </div>

                <div class="container0">
                    <div class='menu'>

                        <div class="nav justify-content-end">
                            <a id="btAnunciar" class="nav-link active" href="#">Anuncie Ja!</a>
                            <fieldset>
                                <nav class="nav nav-pills nav-justified">



                                    <a id="menus" class="nav-link" href="#">Home</a>
                                    <a id="menus" class="nav-link" href="#">Contato</a>
                                    <a id="menus" class="nav-link" href="#">Cadastro</a>
                                    <a id="menus" class="nav-link" href="#">Login</a>
                                    <a id="menus" class="nav-link" href="#">Sobre</a>
                                    <a id="menus" class="nav-link" href="#">Config</a>
                                </nav>
                            </fieldset>



                        </div>

                    </div>

                </div>
            </div>


<!--        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">Navbar</a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav> -->
<!--     <div class="conteudo">

         <div class="container">

             <div class="campoBuscar">


                 <nav id="navBuscar" class="navbar navbar-light bg-light">
                     <form class="form-inline">
                         <input class="form-control mr-sm-2" type="search" placeholder="O que voce procura?" aria-label="Search">
                         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                     </form>
                     <button id="btFiltrar" class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
                 </nav>
             </div>


             <div class="campoCategorias">
                 <div class="row">
                     <div class="col-3">
                         <div  id="v-pills-tab" role="tablist">
                             <span id="cat">Categorias</span>
                             <hr style="width: 290px; border: solid 1px black;">
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

             </div>


         </div>



         <div class="container2">
             <a href=""><div class="anuncios">
                     <img src="imagens/capaLivro.jpeg" alt="" width="120" height="149"/>                          
                     <div class="conteudoLivro"> <b>Redes de computadores e a internet</b><br>
<!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
<!--                 <p>por Jim Kurose (Autor),‎ Keith Ross (Autor)</p>
                 <BR>
                 ISBN: 9788535928198XX<br>
                 Ano: 2013
                 <div class="tipoAnuncio">
                     <img src="imagens/vendeLivro.png" alt="" width="100" height="100" title="Anuncio de Venda"/>
                 </div>
                 <div class="valor">
                     <b>R$ 100,00</b>

                 </div>
                 <div class="data">
                    05/10/18 - 11:43
                 </div>
             </div>
         </div>
     </a>
     <a href=""><div class="anuncios">
             <img src="imagens/capaJava.jpeg" alt="" width="120" height="149"/>                          
             <div class="conteudoLivro"> <b>Java para Iniciantes by Adalberto!</b><br>
<!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
<!--             <p>por Google (Autor)</p>
             <BR>
             ISBN: 9788535928198YY<br>
             Ano: 2010
             <div class="tipoAnuncio">
                 <img src="imagens/aceitaDoacao.png" alt="" width="100" height="100" title="Anuncio de Aceita Doacao"/>
             </div>
             <div class="valor">
                 <b></b>

             </div>
             <div class="data">
                 10/09/18 - 17:43 
             </div>
         </div>
     </div></a>
 <a href=""><div class="anuncios">
         <img src="imagens/capaArtedaGuerra.jpg" width="120" height="149"/>                         
         <div class="conteudoLivro"> <b>A Arte da Guerra</b><br>
<!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
<!--       <p>por Sun Tzu (Autor)</p>
       <BR>
       ISBN: 9788535928198ZZ<br>
       Ano: 2009
       <div class="tipoAnuncio">
           <img src="imagens/trocaLivro.png" alt="" width="100" height="100" title="Anuncio de Troca"/>
       </div>
       <div class="valor">
           <b></b>

       </div>
       <div class="data">
           03/10/18 - 09:50 
       </div>
   </div>
</div></a>
<a href=""><div class="anuncios">
   <img src="imagens/delphi7.jpg" width="120" height="149"/>                         
   <div class="conteudoLivro"> <b>Aprenda a programar com Borland Delphi 7</b><br>
<!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
<!--          <p>por (Autor)</p>
          <BR>
          ISBN: 9788535928198PP<br>
          Ano: 2005
          <div class="tipoAnuncio">
              <img src="imagens/buscaLivro.png" alt="" width="100" height="100" title="Anuncio de Busca"/>
          </div>
          <div class="valor">
              <b></b>

          </div>
          <div class="data">
              03/10/18 - 09:50 
          </div>
      </div>
  </div></a>
<a href=""><div class="anuncios">
      <img src="imagens/direitoadm.png" width="120" height="149"/>                         
      <div class="conteudoLivro"> <b>Manual Direito Administrativo 2018</b><br>
<!--   <img src="imagens/vendeLivro.png" alt="" width="70" height="70"/> -->
<!--             <p>por (Autor)</p>
             <BR>
             ISBN: 9788535928198TT<br>
             Ano: 2018
             <div class="tipoAnuncio">
                 <img src="imagens/doaLivro.png" alt="" width="100" height="100" title="Anuncio de Doa"/>
             </div>
             <div class="valor">
                 <b></b>

             </div>
             <div class="data">
                 03/10/18 - 09:50 
             </div>
         </div>
     </div></a>

</div> 
</div>

<!--        <div class="container4">


    <div class="campoPropagandas1">
                        <div class="row">
                            <div class="col-3">
                                <div  id="v-pills-tab" role="tablist">
                                    <span id="cat">PROPAGANDA</span>
                                  


                                </div>

                            </div>

                        </div> 

                    </div>


                    <div class="campoPropagandas">
                        <div class="row">
                            <div class="col-3">
                                <div  id="v-pills-tab" role="tablist">
                                    <span id="cat">PROPAGANDA</span>
                                    


                                </div>

                            </div>

                        </div> 

                    </div>
                    <div class="campoPropagandas2">
                        <div class="row">
                            <div class="col-3">
                                <div  id="v-pills-tab" role="tablist">
                                    <span id="cat">PROPAGANDA</span>
                                 


                                </div>

                            </div>

                        </div> 

                    </div>

                    </div> -->

<!--    </div>


</div>

</div> -->
</body>


</html>
