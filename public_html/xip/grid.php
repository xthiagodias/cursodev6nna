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

        <!-- Arquivos de configuracao, bootstrap, css -->
        <!--     <script src="libs/JQuery-3.3.1/jquery-3.3.1.min.js" type="text/javascript"></script>
             <link href="libs/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
             <script src="libs/bootstrap/bootstrap.min.js" type="text/javascript"></script>
             <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="css/teste.css" rel="stylesheet" type="text/css"/>



        <script src="css4.1/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="css4.1/js/bootstrap.js" type="text/javascript"></script>

        <link href="css2/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css2/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <script>

        </script>


        <style>

            #topo {
                background-color: #007bff;


               
            }
            @topo {
                @namespace

            }

            #esquerda {
                background-color: wheat;
                
                height: auto;
               



            }

            #centro {
                background-color: whitesmoke;
            
                height: auto;
width: auto;

            }

            #direita {
                background-color: tomato;
              

                height: auto;

            }

            #baixa {
                display: block;
                background-color: thistle;

            position: relative;
          
            }
            
            #teste {
                
                    width: auto;
                    position: relative;
                    display: block;
                    background-color: #00695c;
                
            }
            
            #teste2 {
                
                position: relative;
                display: block;
                width: auto;
                
            }
            
            #lname {
                
                width: 100%;
                
            }
            
              #fname {
                
                width: 100%;
                
            }
            
            #country {
                
                width: 100%;
            }
            
            #subject {
                width: 100%;
            }
            
            #botao {
                width: 50%;
                align-items: center;
                align-content: center;
                align-self: center;
                text-align: center;
            }
          

        </style>



    </head>
    <body>
        
        
<h1 style="font-size:1.5vw;">Livro Programando com Borland Delphi 7 - 2005</h1>
<p style="font-size:2vw;">Resize the browser window to see how the font size scales.</p>

       <div style="border: solid 2px black;" class="container">
  <form action="action_page.php">
    
      <div class="col-md-1">
        <label for="fname">First Name</label>
     
          </div>
      <div class="col-sm-5">
          <input class="form-control" type="text" id="fname" name="firstname" placeholder="Your first name..">
      
    </div>
  
      <div class="col-sm-1">
        <label for="lname">Last Name</label>
        </div>
      <div class="col-sm-5">
        <input class="form-control" type="text" id="lname" name="lastname" placeholder="Your last name..">
    
   </div>
 
      <div class="col-sm-5">
        <label for="country">Country</label>
      </div>
      <div class="col-sm-5">
        <select class="form-control text-center" id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada" selected="">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
  
      <p>
      <div class="col-sm-3">
        <label for="subject">Subject</label>
      </div>
      <div class="col-sm-5">
        <textarea class="form-control text-center" id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    
      <div>
      <center> <input class="customGPlusSignIn btn-success" type="submit" value="Submit" id="botao"> </center>
 </div>

  </form>

            
    
    </body>
</html>
