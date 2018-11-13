<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="libs/JQuery-3.3.1/jquery-3.3.1.min.js" type="text/javascript"></script>
        <link href="libs/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="libs/bootstrap/bootstrap.min.js" type="text/javascript"></script>

        <script>

            var dados = [];
            var nome;
            var sobrenome;
            var email;
            var resultado;
            function salvarDados() {


                nome = document.getElementById("nome").value;
                sobrenome = document.getElementById("sobrenome").value;
                email = document.getElementById("email").value;

                resultado = "Nome: " + "<label style='color: blue;'>" + nome + "</label>" + "<p>" + " Sobrenome: " + "<label style='color: blue;'>" + sobrenome + "</label>" + "<br>" + " E-mail: " + "<label style='color: blue;'>" + email + "</label>";
                dados.push(resultado);
                document.getElementById("nome").value = "";
                document.getElementById("sobrenome").value = "";
                document.getElementById("email").value = "";

                alert("Os dados foram salvos com sucesso!");


            }



            function mostrarDados() {

                var res = document.getElementById("dd");


                if (dados.length > 0) {

                    res.innerHTML = dados[Math.floor(Math.random() * dados.length)];



                } else {


                    res.innerHTML = "Nenhum registro foi encontrado!";

                }
            }


        </script>

        <script language="javascript" type="text/javascript">
            function mostraImagem() {
                var imagem = document.getElementById("imagem");
                var diretorio = document.getElementById("diretorio").value;
                var teste = diretorio.split("\\");
                imagem.src = teste[3];
            }
        </script> 



        <script type="text/javascript">
            var carregar;

            function abrePagina(img)
            {
                carregar = new Image();
                carregar.src = img;
                document.getElementById("dd").innerHTML = "Carregando...";
                setTimeout("verificaCarregamento()", 100);
            }

            function verificaCarregamento()
            {
                if (carregar.complete)
                {
                    document.getElementById("imagem").innerHTML = "<img src='" + carregar.src + "'" + " />";
                } else
                {
                    setTimeout("verificaCarregamento()", 100);
                }
            }
        </script>


        <style>

            img {
                border-radius: 50%;
                width: 150px;
                height: 150px;
                border: solid 1px black;

            }

            input[type="text"] {
                background-color: red;
                width: 100%;
            }

            input[type=button] {
                background-color: blue;
            }

            input:invalid+span:after {
                position: absolute; content: '✖';
                padding-left: 5px;
            }

            input:valid+span:after {
                position: absolute;
                content: '✓';
                padding-left: 5px;
            }


        </style>


    </head>
    <body>
        <form action="sucesso.php" method="POST">
            <div style="border: solid 1px black;" class="container">
                <nav class="nav navbar navbar-inverse">
                    <input type="button" name="btInicial" value="Pagina Inicial">
                    <input type="button" name="btInicial" value="Pagina Inicial">
                    <input type="button" name="btInicial" value="Pagina Inicial">
                    <input type="button" name="btInicial" value="Pagina Inicial">
                    <input type="button" name="btInicial" value="Pagina Inicial">
                    <input type="button" name="btInicial" value="Pagina Inicial">
                </nav>
                <div style="border: solid 1px black;" class="row">
                    <div class="col-md-4">

                        <label>Nome:</label><input class="form-control input-group-addon" id="nome" type="text" style="width: 100%;">
                        <label>Sobrenome:</label><input class="form-control" id="sobrenome" type="text" style="width: 100%;">
                        <label>E-mail:</label><input class="form-control" id="email" type="text" style="width: 100%;"><p>
                            <br>
                            <input class="btn-outline-success" style="width: 100%;" id="salvar" type="button" name="btSalvar" value="Salvar" onClick="salvarDados();">
                            <input class="btn-outline-secondary" style="width: 100%;" id="mostrar" type="button" name="btMostrar" value="Gerar" onClick="mostrarDados();">
                            <br>
                        <div style="color: red; font-size: 12pt;" id="dd"></div>

                        <br>
                        <center>  <img class="img-circle circle" style="border-radius: 50%;" src="imagens/unama2.png" alt=""> </center>
                        <br>

                        <input type="file" id="diretorio" onchange="mostraImagem()" />


                        <input name="foto" type="file" class="texto_manager" id="foto" size="30" onchange="abrePagina('');" />
                        <div id="imagem"></div>

                    </div>
                    <div style="border: solid 2px blue; height: 250px;" class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                </div>
                <div style="border: solid 1px black;" class="row">
                    <div class="col-md-3 ml-md-auto">.col-md-3 .ml-md-auto</div>
                    <div class="col-md-3 ml-md-auto">.col-md-3 .ml-md-auto</div>
                </div>
                <div style="border: solid 1px black;" class="row">
                    <div class="col-auto mr-auto">.col-auto .mr-auto</div>
                    <div class="col-auto">.col-auto</div>
                </div>

                <div style="border: solid 1px black;" class="row">
                    <div class="col-sm-3 ml-sm-auto">.col-auto .mr-auto</div>
                    <div class="col-sm-3 ml-sm-auto">.col-auto</div>
                </div>




                <div style="border: solid 1px black;" class="row">
                    <div class="column 3">
                        <div class="col-sm-12 ml-sm-auto form-group"><input type="text"></div>
                        <div class="col-sm-12 ml-sm-auto"><input type="text"></div>
                    </div>
                </div>
            </div>
            
            
            <form>
  <div>
    <label for="uname">Choose a username: </label>
    <input type="text" id="uname" name="name" required>
    <span class="validity"></span>
  </div>
  <div>
    <button>Submit</button>
  </div>
                
                
                
<label for="myBrowser">Choose a browser from this list:</label>
<input list="browsers" id="myBrowser" name="myBrowser" />
<datalist id="browsers">
  <option value="Chrome">
  <option value="Firefox">
  <option value="Internet Explorer">
  <option value="Opera">
  <option value="Safari">
  <option value="Microsoft Edge">
</datalist>
</form>
            
            
   <form>
  <div>
    <label for="uname">Choose a username: </label>
    <input type="text" id="uname" name="name" required size="45"
           pattern="[a-z]{4,8}">
    <span class="validity"></span>
    <p>Usernames must be lowercase and 4-8 characters in length.</p>
  </div>
  <div>
    <button>Submit</button>
  </div>
</form>  
            
            <br>      
            <br>
         TESTE   
<form oninput="result.value=parseInt(a.value)+parseInt(b.value)">
  <input type="range" name="b" value="50" /> +
  <input type="number" name="a" value="10" /> =
  <output name="result">60</output>
</form>
           
         <br>  
         <br>
         
         
         <label for="myBrowser">Choose a browser from this list:</label>
<input list="browsers" id="myBrowser" name="myBrowser" />
<select id="browsers1">
    <option value="Chrome"></option>
    <option value="Chrome" selected="">Teste 1 </option>
  <option value="Firefox">Teste 2</option>
  <optgroup label="---------------"> </optgroup>
  <option value="Internet Explorer">Teste 3 </option>
  <option value="Opera">Teste 4 </option>
  <option value="Safari">Teste 5 </option>
  <option value="Microsoft Edge"> Teste 6 </option>
</select>
       
    </body>
</html>


        <!-- /container -->        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        
        
        
        
        
        <div id="principal">
             <div id="topo">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
   

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
