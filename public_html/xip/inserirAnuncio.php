<?php
date_default_timezone_set('America/Sao_Paulo');
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
<html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Compartilhe seu Livro! É Gratuito...</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <!-- Arquivos de configuracao, bootstrap, css -->
        <script src="libs/JQuery-3.3.1/jquery-3.3.1.min.js" type="text/javascript"></script>
        <link href="libs/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen"/>
        <!--  <script src="libs/bootstrap/bootstrap.min.js" type="text/javascript"></script> -->

        <script src="javascript/pagina.js" type="text/javascript"></script>
        <link href="css/estiloInserirAnuncio.css" rel="stylesheet" type="text/css"/>

        <!--    <script src="css2/ajax.googleapis.com_ajax_libs_jquery_3.3.1_jquery.min.js" type="text/javascript"></script> -->
        <link href="css2/maxcdn.bootstrapcdn.com_bootstrap_3.3.7_css_bootstrap.min.css" rel="stylesheet" type="text/css" media="screen"/> 
        <script src="css2/maxcdn.bootstrapcdn.com_bootstrap_3.3.7_js_bootstrap.min.js" type="text/javascript"></script>

        <script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>

        <script src="javascript/pagina.js" type="text/javascript"></script>



        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


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

            #principal {

                width: 100%;

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

                display: block;

                margin-left: -15px;
                width: auto;


                border: solid 0px red;


                position: relative;
                background-color: #fafafa;


            }


            #topo2 {

                display: block;

                margin-left: auto;
                width: 300px;


                border: solid 2px red;


                position: relative;
                background-color: #fafafa;


            }

            #centro {
                margin: auto;
                display: block;

                height: auto;
                width: auto;
                border: solid 2px blue;
                margin-top: 2px;
                margin-left: auto;

                background-color: #fafafa;

                margin-bottom: 2px;
                margin-right: auto;
            }

            #ads {
                margin: auto;
                display: block;

                border: solid 2px blue;
                margin-top: 5px;
                height: auto;
                width: auto;
                position: relative;
                background-color: #fafafa;

                margin-bottom: 5px;
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


            }

            #bottom {

                margin: auto;
                display: block;
                border: solid 2px yellow;
                height: auto;
                width: auto;
                position: relative;
                background-color: #fafafa;
                margin-left: auto;
                margin-top: 2px;


            }  

            a:hover {
                text-decoration: none;
            }
        </style>

        <script>

            function habilitaPreco() {


                var local = document.forms['cadAnuncio'];

                for (var i = 0, l = local.elements.length; i < l; i++)
                {

                    if (local.elements[i].type === 'radio' && local.elements[i].checked)
                    {

                        if (local.elements[i].value === "0") {

                            alert("Voce deve selecionar o tipo de anuncio!");



                        } else {


                            if (local.elements[i].value === "1") {

                                $('#validationCustom08').attr('disabled', false);



                            } else {

                                $('#validationCustom08').attr('disabled', true);
                            }



                        }
                    }
                }
            }

            function keypressed(obj, e) {
                var tecla = (window.event) ? e.keyCode : e.which;
                var texto = document.getElementById("validationCustom08").value;
                var indexvir = texto.indexOf(",");
                var indexpon = texto.indexOf(".");

                if (tecla == 8 || tecla == 0)
                    return true;
                if (tecla != 44 && tecla != 46 && tecla < 48 || tecla > 57)
                    return false;
                if (tecla == 44) {
                    if (indexvir !== -1 || indexpon !== -1) {
                        return false
                    }
                }
                if (tecla == 46) {
                    if (indexvir !== -1 || indexpon !== -1) {
                        return false
                    }
                }
            }

            function addRS() {

                var edtPreco = document.getElementById("validationCustom08");

                edtPreco.value = "R$ ";

            }

            function resetar() {

              var edtPreco = document.getElementById("validationCustom08");

                edtPreco.disabled = true;

            }

        </script>
    </head>
    <body>

        <!-- Button HTML (to Trigger Modal) -->
        <!--<a href="#myModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Launch Demo Modal</a> -->

        <!-- Modal HTML -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Confirmation</h4>
                    </div>
                    <div class="modal-body">
                        <p>Do you want to save changes you made to document before closing?</p>
                        <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div id='principal'>

            <div class="container col-12" style='width: 800px; height: auto;' id='topo2'>
               



                <div id="topo">

                    <nav style="background-color: #fafafa; border: solid 0px transparent;" class="navbar navbar-inverse">
                        <a class="navbar-brand" href="#"><img style=' padding: auto; margin-top: -15px;' src='imagens/logotipo.png' alt='' width="50" height="50"></a>
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
                                    <li><form style="padding: auto; height: auto;" class="form-inline">

                                            <div class="btn-group-xs">
                                                <a href='index.php'><button style="margin-top: 0; margin-left: 0;" class="btn btn-primary btn-sm" type="button"><i class="fa fa-fw fa-home"></i>Pagina Inicial</button></a>
                                                <!--     <a href='cadUsuario.html'><button style="margin-top: 0;" class="btn btn-primary btn-sm" type="button">Cadastro</button></a> -->
                                                <a href='contato.php'><button style="margin-top: 0;" class="btn btn-primary btn-sm" type="button">Contato</button></a>
                                                <a href='sobre.php'><button style="margin-top: 0;" class="btn btn-primary btn-sm" type="button">Sobre</button></a>
                                                <a href='perfil.php'><button style="margin-top: 0;" class="btn btn-primary btn-sm" type="button">Perfil</button></a>

                                            </div>   
                                        </form></li>


                                </ul>
                                <a href="http://www.unama.br/" target="_blank"><img style='margin-left: 50px;' src="imagens/unama2.png" alt='' width="200" height="50"></a>
                                <ul style="width: auto; margin-top: auto;" class="nav navbar-nav navbar-right">
                                    <li><a href='logout.php'><span class="glyphicon glyphicon-log-out"></span><span style="color: #002752;; font-family: Tahoma; width: auto;"> Sair</span></a></li>
                                </ul>


                            </div>
                        </div>
                    </nav>



                </div>
            </div>
        </div>
        <div class="container col-12" style='width: 800px; height: auto;' id='centro'>
            



                <BR>

                <label style="padding: 10pt; color: #004085;">Que tal compartilhar seu Livro?? <br>Abaixo, voce consegue de varias formas... Vender, Trocar, Doar, etc..! :)</label>
                <BR>

                <!-- Form Cadastro Anuncio -->
                <form class="needs-validation" name="cadAnuncio" novalidate>
                    <div class="col-md-6">
                        <label for="validationCustom01">Titulo</label><br>
                        <input type="text" size="30" class="form-control" id="validationCustom01" placeholder="Titulo do Anuncio" value="" required>
                        <div class="valid-feedback">
                            Otimo!
                        </div>
                        <div class="invalid-feedback">
                            Voce deve informar o Titulo do anuncio.
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 col-12">
                        <label for="validationCustom02">ISBN</label><br>
                        <input type="number" size="10" class="form-control" id="validationCustom02" placeholder="ISBN" value="">
                        <div class="valid-feedback">
                            Otimo!
                        </div>
                        <div class="invalid-feedback">
                            Voce pode informar o ISBN do livro ( Campo nao obrigatorio ).
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6 col-12">
                        <div class="input-group-prepend">
                            <label>Autor</label>

                        </div>
                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Autor do Livro" aria-describedby="inputGroupPrepend" required>
                        <div class="valid-feedback">
                            OK!
                        </div>
                        <div class="invalid-feedback">
                            Voce deve informar o autor do livro.
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-3 col-12">

                        <label for="validationCustom03">Editora</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="Editora">
                        <div class="valid-feedback">
                            Certo!
                        </div>
                        <div class="invalid-feedback">

                        </div>
                    </div>

                    <div style="margin-left: 0px; margin-top: 0px;" class="col-xl- col-md-3 col-12">
                        <label for="validationCustom04">Categoria</label>

                        <input list="categorias" class="form-control" id="validationCustom04" name="categorias" placeholder="Categoria" required />
                        <datalist id="categorias">
                            <option value="Informatica"> Informatica
                            <option value="Direito"> Direito
                            <option value="Contabilidade"> Contabilidade
                            <option value="Literatura"> Literatura
                            <option value="Matematica"> Matematica
                            <option value="Programacao"> Programacao
                        </datalist>

                        <div class="valid-feedback">
                            Quase la!
                        </div>
                        <div class="invalid-feedback">
                            Voce deve informar a categoria do livro.
                        </div>
                    </div>

                    <div style="margin-left: 0px; margin-top: 0px;" class="col-xl-2 col-md-3 col-12">
                        <label for="validationCustom05">Ano</label>


                        <input list="ano" class="form-control" id="validationCustom05" name="ano" placeholder="Ano" required />
                        <datalist id="ano">
                            <option value="1980"> 1980
                            <option value="1990"> 1990
                            <option value="2000"> 2000
                            <option value="2010"> 2010
                            <option value="2015"> 2015
                            <option value="2018"> 2018
                        </datalist>            

                        <input hidden="" type="text" class="form-control" id="validationCustom05" placeholder="Ano" required>
                        <div class="valid-feedback">
                            OK!
                        </div>
                        <div class="invalid-feedback">

                        </div>
                    </div>

                    <div class="col-xl-2 col-md-3 col-12">
                        <label for="validationCustom06">Paginas</label>
                        <input type="number" class="form-control" id="validationCustom06" placeholder="Paginas">
                        <div class="valid-feedback">
                            OK!
                        </div>
                        <div class="invalid-feedback">

                        </div>
                    </div>

                    <div class="col-xl-2 col-md-3 col-12">
                        <label for="validationCustom07">Edicao</label>
                        <input type="tel" class="form-control" id="validationCustom07" placeholder="Edicao">
                        <div class="valid-feedback">
                            OK!
                        </div>
                        <div class="invalid-feedback">

                        </div>
                    </div>

                    <div class="image-upload">
                        <label for="file-input">
                            <input type="file" id="file1" name="image" accept="image/*" multiple="" style="display:none" />
                            <img src="imagens/camera.png" width="100" height="100" id="upfile1" alt="Carregar imagem do anuncio." style="cursor:pointer" />
                            <input hidden="" id="file-input" type="file"/>

                        </label>

                    </div>

                    <br>


                    <div class="col-xl-12 col-md-12 col-12">
                        <br>

                        <fieldset style="border-style: dashed; border: solid 1px #F5F5F5;">
                            <legend style="border-style: dashed; border: solid 1px #000\9;"><label>Tipo de Anuncio</label></legend> 
                            <input hidden="" type="radio" name="tipoAnuncio" value="0" checked>



                            <div class="custom-control">
                                <img src="imagens/vendeLivro.png" alt="" width="50" height="50" id="idvenda" title="Anuncio de Venda" for="customCheck1"/>
                                <input type="radio" name="tipoAnuncio" class="custom-control-input" id="customCheck1" value="1" required  onchange="habilitaPreco();">
                                <label style="margin-left: 15px;"  class="custom-control-label" for="customCheck1">Venda</label>
                            </div>

                            <div class="custom-control">
                                <img src="imagens/trocaLivro.png" alt="" width="50" height="50" id="idtroca" title="Anuncio de Troca"/>
                                <input type="radio" name="tipoAnuncio" class="custom-control-input" id="customCheck2" value="2" required="" onchange="habilitaPreco();">
                                <label style="margin-left: 15px;"  class="custom-control-label" for="customCheck2">Troca</label>
                            </div>

                            <div class="custom-control">
                                <img src="imagens/doaLivro.png" alt="" width="50" height="50" id="iddoacao" title="Anuncio de Doacao"/>
                                <input type="radio" name="tipoAnuncio" class="custom-control-input" id="customCheck3" value="3" required="" onchange="habilitaPreco();">
                                <label style="margin-left: 15px;"  class="custom-control-label" for="customCheck3">Doação</label>
                            </div>

                            <div class="custom-control">
                                <img src="imagens/buscaLivro.png" alt="" width="50" height="50" id="idprocuro" title="Anuncio de Procura Livro"/>
                                <input type="radio" name="tipoAnuncio" class="custom-control-input" id="customCheck4" value="4" required="" onchange="habilitaPreco();">
                                <label style="margin-left: 15px;"  class="custom-control-label" for="customCheck4">Procuro</label>
                            </div>

                            <div class="custom-control">
                                <img src="imagens/aceitaDoacao.png" alt="" width="50" height="50" id="idaceitodoacao" title="Anuncio de Aceito Doacao"/>
                                <input type="radio" name="tipoAnuncio" class="custom-control-input" id="customCheck5" value="5" required="" onchange="habilitaPreco();">
                                <label style="margin-left: 15px;"  class="custom-control-label" for="customCheck5">Aceito Doação</label>
                            </div>
                            <div class="valid-feedback">
                                OK!
                            </div>
                            <div class="invalid-feedback">
                                Você deve informar o tipo de anuncio.
                            </div>
                        </fieldset>
                    </div>


                    <div class="col-xl-3 col-md-3 col-12">
                        <br>
                        <label for="validationCustom08">Preco(R$)</label>
                        <input type="text" class="form-control" id="validationCustom08" value="" placeholder="Preco do livro" onfocus="addRS();" onkeypress="return keypressed(this, event);" disabled required>
                        <div class="valid-feedback">
                            Estamos quase finalizando!
                        </div>
                        <div class="invalid-feedback">
                            Voce deve informar o valor caso seu anuncio seja de venda.
                        </div>
                    </div>

                    <div class="card text-white bg-warning mb-3" style="margin-left: 16px; max-width: 18rem;">
                        <div class="card-header">Informacao</div>
                        <div class="card-body">
                            <h5 class="card-title">Venda ??</h5>
                            <p class="card-text">O campo preço aparecerá somente se o tipo for VENDA!.</p>
                        </div>
                    </div>

                    <p>
                        <br>
                    <div class="col-12 col-md-12 col-xl-12">
                        <br>

                        <label for="validationCustom10">Descricao</label><br>
                        <textarea style="color:blue; border: solid 1px yellow;" class="col-12 col-xl-12" rows="7" cols="95" id="validationCustom10" placeholder="Fale um pouco sobre o livro" required></textarea>
                        <div class="valid-feedback">
                            Prontinho!
                        </div>
                        <div class="invalid-feedback">
                            Fale um pouco mais sobre o livro que esta anunciando.
                        </div>
                    </div>

                    <div class="col-xl-12 col-md-12 col-12">
                        <br>
                        <input style="margin-top: 10px;" class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label style="margin-top: 8px; margin-left: 20px;" class="form-check-label" for="invalidCheck">
                            Aceito os termos e condicoes para publicao de livro.
                        </label>
                        <div class="invalid-feedback">
                            Voce deve aceitar os termos de uso.
                        </div> 
                    </div>
                    <div class="col-xl-12 col-md-8 col-12">
                        <br>
                        <br>
                        <div class="align-content-center col-12">
                        <button class="btn btn-success" type="submit" title="Cadastrar Anuncio" onclick="habilitaPreco()">Anunciar Agora</button>
                        <button type="reset" id="btReset" class="btn btn-primary" title="Limpar Campos" onClick="resetar();">Limpar Campos</button>
                        <a href="index.php"><button type="button" class="btn btn-secondary" title="Salva os dados informados para anunciar depois!">Anunciar Depois</button></a>
                        </div>
                        <div style="margin-top: 20px;">
                            <label>Codigo do anuncio:</label> <div style="color: #004085; font-weight: bold; font-family: Tahoma; margin-left: 6px; margin-top: -5px;">
                                <?php
                                echo'000001';
                                ?></div>
                            <label>Data e Hora:</label> <div style="color: #004085; font-weight: bold; font-family: Tahoma; margin-left: 6px; margin-top: -5px;">
                                <?php
                                echo date ("Y-m-d");
                                echo'<span> - </span>';
                                echo date('H:i:s');
                                ?>
                            </div>
                            <hr style="border: solid 1px black; margin-top: 5px; width: auto;">
                            <label style="float: left; margin-top: -10px; font-family: monospace">Copyright (xipbook)</label>
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
                    }
                    )();
                </script>  





            </div>

        </div>


        <footer class="container col-12" style='width: 800px; height: auto;' id='bottom'>
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



    </body>
</html>