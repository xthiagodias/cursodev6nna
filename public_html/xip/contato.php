
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>XipBook, Duvidas, Reclamacoes e/ou Sugestoes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Arquivos de configuracao, bootstrap, css -->
        <script src="libs/JQuery-3.3.1/jquery-3.3.1.min.js" type="text/javascript"></script>
        <link href="libs/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen"/>
        <!--  <script src="libs/bootstrap/bootstrap.min.js" type="text/javascript"></script> -->

        <script src="javascript/contato.js" type="text/javascript"></script>
        <link href="css/estilocontato.css" rel="stylesheet" type="text/css"/>
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

            #contato {
                display: block;
                
                margin: 0 auto !important;
                  text-align: left;
                /* inline-block space fix */
                margin-right: -4px;
                height: auto;
                width: 100%;
                
               position: inherit;
               
                background-color: #fafafa;
                color: white;
               float:  none;
                border: solid 2px red;
            
                border-radius: 1% 1% 1% 1%;




            }

            #sidebar {
                display: inline;
                border: solid 2px yellow;
                height: 900px;
                width: 321px;
                position: relative;
                background-color: #fafafa;
                float: left;
                border-radius: 1% 1% 1% 1%;
            }

            #conteudoCentral {
                display: inline;
                border: solid 2px green;
                margin-left: 330px;
                margin-top: -890px;
                height: 900px;
                width: 550px;
                position: relative;
                background-color: #fafafa;
                border-radius: 1% 1% 1% 1%;
            }  

            #ads {
                display: inline;
                border-radius: 1% 1% 1% 1%;
                border: solid 2px blue;
                margin-left: 890px;
                margin-top: -910px;
                height: 900px;
                width: 250px;
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
        </style>


    </head>


    <body>

 <div class="container col-sm-pull-5 col-md-4" id='contato'>
<div class='col-12'>


                    <div class="imagemLogo">
                        <img src="imagens/logotipo.png" alt="" width="170" height="130"/>


                    </div>
<form>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1" style='margin-top: auto; margin-left: auto; margin-left: -15px;' class='col-12'>Qual assunto voce deseja tratar?</label>
                        
                        <select style="color: green;" class="custom-select-lg form-control col ml-auto" id="exampleFormControlSelect1" required=''>
                            <option></option>
                            <option>Duvidas</option>
                            <option>Reclamacoes</option>
                            <option>Sugestoes</option>
                            <option>Parcerias</option>
                            <option>Indicacoes</option>
                        </select>
                    </div>


                    
                        <div class="form-group">
                            <label style='margin-top: auto; margin-left: auto; margin-left: auto;'>Utilize o campo abaixo e envie sua observacao!</label><br>
                            <textarea style="color: blue; margin-left: auto; margin-right: auto;" class="col-12 col-xl-12" cols="40" rows="6" placeholder="Insira as observações" name="observacoes" required=""></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" title="Entrar com seus dados cadastrados">Enviar</button>
                        <button type="reset" class="btn btn-secondary" title="Limpar campos">Limpar</button>
                        <a href="index.php"><button type="button" class="btn btn-primary" title="Voltar para Pagina Inicial">Voltar</button></a>
                          


                    </form>

                    <br>
                </div>


            </div>
        
        
    </body>


</html>
