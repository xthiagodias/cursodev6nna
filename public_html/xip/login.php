<?php
$pf_usuario = '';
$pf_senha = '';


include('conexao/conexao.php');

if(isset($_GET['logado'])) {


    $pf_usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $pf_senha = isset($_POST['senha']) ? $_POST['senha'] : '';

}
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
        // header('Location: perfil.php');
        //   exit();

    } else {
        // echo $row;
        $_SESSION['nao_autenticado'] = true;
        // echo '<BR>';
        // echo 'Usuario ou senha invalidos!';
        // header('Location: index.php');
      //    exit();

    }

?>
<html>
    <head>
        <title>XipBook, Ingressar no site =)</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">




        <!-- Arquivos de configuracao, bootstrap, css -->
        <script src="libs/JQuery-3.3.1/jquery-3.3.1.min.js" type="text/javascript"></script>
        <link href="libs/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--  <script src="libs/bootstrap/bootstrap.min.js" type="text/javascript"></script> -->

        <script src="javascript/pagina.js" type="text/javascript"></script>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="css/modal.css" rel="stylesheet" type="text/css"/>
        <!--    <script src="css2/ajax.googleapis.com_ajax_libs_jquery_3.3.1_jquery.min.js" type="text/javascript"></script> -->
        <link href="css2/maxcdn.bootstrapcdn.com_bootstrap_3.3.7_css_bootstrap.min.css" rel="stylesheet" type="text/css" media="screen"/>
        <!--    <script src="css2/maxcdn.bootstrapcdn.com_bootstrap_3.3.7_js_bootstrap.min.js" type="text/javascript"></script>
        -->

        <script>

            function escondeTipo() {

                document.getElementById("msgtipo").hidden = true;

            }




            function testando() {

                //  $("#msg").show;
                document.getElementById("msg").hidden = false;
                //  var x =   document.getElementById("msg");
                //          x.style.visibility = "visible";
                //          x.hidden === false;
            }

            function testando2() {

                //   $("#msg").show;
                document.getElementById("msg").hidden = true;
                //   var x2 =  document.getElementById("msg")
                //           x2.style.visibility = "hidden";
                //            x2.hidden === true;
            }

            function sleep(ms) {
                return new Promise(resolve => setTimeout(resolve, ms));
            }



            var tipoAcesso;
            var campo1;
            var campo2;
            var ii;
            async  function validarAcesso() {
                campo1 = document.getElementById("usuario").value;
                campo2 = document.getElementById("senha").value;
                tipoAcesso = document.getElementById("acesso1").checked;


                var local = document.forms['formLogin'];

                for (var i = 0, l = local.elements.length; i < l; i++)
                {

                    if (local.elements[i].type === 'radio' && local.elements[i].checked)
                    {



                        if (local.elements[i].value === "Nenhum") {


                            document.getElementById("container").hidden = true;
                            document.getElementById("msgok").hidden = true;
                            document.getElementById("msginfo").hidden = true;
                            document.getElementById("msgerro").hidden = true;
                            document.getElementById("msgtipo").hidden = false;



                        }

                        if (local.elements[i].value === "Cliente") {



                            // alert("Cliente Selecionado");
                            //   $().alert();
                            //   $(".alert-success").show();
                            //  $("#teste").show();

                            // Este evendo é acionado após o carregamento da página
                            //  jQuery(window).load(function () {
                            //Após a leitura da pagina o evento fadeOut do loader é acionado, esta com delay para ser perceptivo em ambiente fora do servidor.
                            //      jQuery("#loader").delay(2000).fadeOut("slow");
                            //  });
                            if (campo1 === "admin" && campo2 === "123456") {
                                document.getElementById("container").hidden = false;
                                document.getElementById("msgerro").hidden = true;
                                document.getElementById("msgtipo").hidden = true;
                                //    document.getElementById("msgok").hidden = false;
                                //  $(".alert-success").html("<strong>Info!</strong>" + " Cliente Selecionado!" + " <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>");
                                //    $("div").html("<img style='text-align: center; align-content: center; margin-top: 200px; margin-left: 500px' src='imagens/carregando.gif' width='150' heigth='150'>");
                                await  sleep(5000);

                                //     document.getElementById("msgok").hidden = false;
                                //     $("div").hide();
                                //     document.getElementById("msginfo").hidden = true;

                                document.getElementById("container").hidden = true;
                                document.getElementById("msgok").hidden = false;
                                document.getElementById("msgtipo").hidden = true;
                                // await sleep(5000);
                                await  sleep(2000);
                               // window.location.replace("index.php");
                            } else {
                                document.getElementById("msgerro").hidden = false;
                                document.getElementById("msginfo").hidden = true;
                                document.getElementById("msgok").hidden = true;
                                document.getElementById("msgtipo").hidden = true;
                            }
                        } else {

                            if (local.elements[i].value === "Instituicao") {
                                // alert("Instituicao Selecionado");
                                if (campo1 === "admin" && campo2 === "123456") {
                                    document.getElementById("container").hidden = false;
                                    document.getElementById("msgerro").hidden = true;
                                    document.getElementById("msgtipo").hidden = true;
                                    //    document.getElementById("msgok").hidden = false;
                                    //  $(".alert-success").html("<strong>Info!</strong>" + " Cliente Selecionado!" + " <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>");
                                    //    $("div").html("<img style='text-align: center; align-content: center; margin-top: 200px; margin-left: 500px' src='imagens/carregando.gif' width='150' heigth='150'>");
                                    await  sleep(5000);

                                    //     document.getElementById("msgok").hidden = false;
                                    //     $("div").hide();
                                    //     document.getElementById("msginfo").hidden = true;

                                    document.getElementById("container").hidden = true;
                                    document.getElementById("msgok").hidden = false;
                                    document.getElementById("msgtipo").hidden = true;
                                    // await sleep(5000);
                                    await  sleep(2000);
                                 //   window.location.replace("index.php");

                                } else {

                                    document.getElementById("msgerro").hidden = false;
                                    document.getElementById("msginfo").hidden = true;
                                    document.getElementById("msgok").hidden = true;
                                    document.getElementById("msgtipo").hidden = true;
                                }

                                if (!local.elements[i].checked) {
                                    document.getElementById("msgerro").hidden = false;
                                    document.getElementById("msginfo").hidden = true;
                                    document.getElementById("msgok").hidden = true;
                                    document.getElementById("msgtipo").hidden = true;
                                }
                            }

                        }



                    }

                }

            }


            function voltarPaginaPrincipal() {

                window.location.replace("index.php");


            }


        </script>


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

            body #gif {

                opacity: 0.9;
                filter: alpha(opacity=20);
            }

            body #container {

                opacity: 0.9;
                filter: alpha(opacity=20);
            }

        </style>

        <style>

            #login {
                display: block;
                
                margin: 0 auto !important;
                  text-align: left;
                /* inline-block space fix */
                margin-right: -4px;
                height: auto;
                width: auto;
                
               position: inherit;
               
                background-color: #fafafa;
                color: white;
               float:  none;
                border: solid 2px red;
            
                border-radius: 1% 1% 1% 1%;


            }

            




            a:hover { 

                text-decoration:none; 


            }



        </style>


    </head>


    <body>

    <?php
    if(isset($_SESSION['nao_autenticado']));
    ?>

    <div class="notification is-danger">
        <b></b> <div hidden="" id="erro">ERRO: Usuario ou senha invalidos.</div></b>
    </div>

    <?php
    unset($_SESSION['nao_autenticado']);
    ?>

        <div id="container" hidden="">
            <div id="loader" ></div>
            <div id="content">
                <center> <img style="margin-left: auto; margin-top: auto; position: relative; align-content: center; align-items: center;" src="imagens/carregando.gif" alt="" width="150" height="150" id="gif"/> </center>
            </div>
        </div>


        <form>
            <div class="alert alert-info alert-dismissible" aria-hidden="true" hidden="" role="alert" id="msginfo">
                <strong>Aviso!</strong> Entre com seu usuario e senha para acesso completo ao site.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="alert alert-info alert-dismissible" aria-hidden="true" hidden="" role="alert" id="msgtipo">
                <strong>Aviso!</strong> Voce deve informar o Tipo de Usuario.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="alert alert-success alert-dismissible" aria-hidden="true" hidden="" role="alert" id="msgok">
                <strong>Sucesso!</strong> Seus dados foram validados com sucesso!.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="alert alert-danger alert-dismissible" aria-hidden="true" hidden="" role="alert" id="msgerro">
                <strong>Aviso!</strong> Algum dado pode estar incorreto, verifique se foram digitados corretamente.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </form>




        <div class="container col-md-3" id='login'>
        

                    <div class="imagemLogo">
                        <img src="imagens/logotipo.png" alt="" width="170" height="130"/>


                    </div>

            <!--
                    <form class='form-group' method="POST" name="formLogin">
                        <div class="custom-control">


                        <input type="radio" name="tipo" value="Nenhum" id="acesso1" hidden="" checked><label></label>
                        <input hidden='' type="radio" name="tipo" class="custom-control-input" value="Cliente" id="acesso2" onchange="escondeTipo();" required>
                        <input hidden='' type="radio" name="tipo" class="custom-control-input" value="Instituicao" id="acesso3" onchange="escondeTipo();" required>

                        </div>
                        <BR>
                        <div style='background-image: radial-gradient(#faff68, white); border: solid 0px black; text-align: center; align-items: center; align-content: center; margin-top: 150px;'> 
                            <label style='margin-top: -1px;' class="radio-inline"><input type="radio" name="tipo" value="Cliente" id="acesso2" onchange="escondeTipo();" required><span style='font-family: monospace; font-weight: bold;'>Cliente</span></label>
                            <label class="radio-inline"><input type="radio" name="tipo" value="Instituicao" id="acesso3" onchange="escondeTipo();" required><span style='font-family: monospace; font-weight: bold;'>Instituicao</span></label>
                        </div>
                        <br>
                        <br>
                    </form>
            -->


                    <form action="perfil.php?logado" class="needs-validation" name="formlogin" method="post">

                        <div class="form-group">
                            <label style='margin-top: auto; margin-left: auto; margin-left: -15px;' class='col-12' for="usuario">Usuário</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="emailHelp" placeholder="Usuario" required=''>
                            <small id="emailHelp" class="form-text text-muted">Informe seu usuario e senha para ter acesso ao site.</small>
                        </div>
                        <div class="form-group">
                            <label style='margin-top: auto; margin-left: auto; margin-left: auto;' for="senha">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required=''>
                        </div>
                        <input hidden="" type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" placeholder="nome">
                        <center>  <input type="submit" class="btn btn-success" title="Entrar com seus dados cadastrados" value="Entrar" name="btEntrar" onclick="validarAcesso()"><input style='margin-left: 5px;' type="button" class="btn btn-primary" title="Voltar para Pagina Inicial" name="brVoltar" value="Voltar" onClick="voltarPaginaPrincipal()"> </center>
                    </form>


                    <br>
                    <center> <!--Facebook--><input style='color: white; background-color: blue; font-family: Arial;' type="button" class="btn btn-fb" title='Entrar com Facebook' value="Facebook" name="btFacebook"><i class="fa fa-facebook pr-1"></i><!--Google +--><input style='color: white; background-color: red; font-family: Arial; margin-left: 3px;' type="button" class="btn btn-gplus" title='Entrar com Google' value="Google +" name="btGoogle"><i class="fa fa-google-plus pr-1"></i></center>

                    <br>
                    <br>
                    <center> <small id="emailHelp2" class="form-text text-muted">Nao tem cadastro?</small><a href="cadUsuario.php" title="Cadastro de novos usuarios"><span style="color:blue;">Cadastre-se</span></a> </center>
                </div>

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




    <style>

        h2 {
            color: #A6A49C;
            font-family: 'Palanquin', Arial, sans-serif;

        }

        h4 {

            color: #A6A49C;
            font-family: 'Palanquin', Arial, sans-serif;

        }

    </style>



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
                            <center><h2>Que Chato!! =(</h2></center>
                        </div>
                        <h4 class="modal-title" id="myModalLabel2"><BR>
                            Você precisa efetuar o login para ter acesso a está pagina!</h4>
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
