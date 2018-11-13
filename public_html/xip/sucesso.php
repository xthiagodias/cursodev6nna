<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modal Dialog</title>
    <link rel="stylesheet" href="modal/css/modal.css">


</head>

<style>


    body {
        background-color: white;
       // background-image: url('imagens/imgFundo.png');
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

    .modal_info {
        background-color: white;

        background-position: center center;
        background-repeat: no-repeat;
        padding: 50px 100px;
        text-align: center;
    }

</style>

<script>

function teste() {

  var t = document.getElementById("bt2");
    t.click();
}

</script>



<body onload="teste()">

<center><input hidden id="bt2" style="margin-top: 400px; width: 200px; height: 50px;" type="button" value="TESTANDO"></center>

<div class="btn_container" hidden="" id="btmodal">
    <a class="open_button" href="#">Mostrar</a>
</div>
<div class="modal_info">
    <center><h1>Que legal!!</h1><BR><h3>recebemos seu cadastro!</h3></center>
    <p>Agora você já pode entrar no seu portal e compartilhar muitos livros =)</p>
    <p>
</div>
<div class="modal_overlay">
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


<script src="modal/js/modal.js"></script>
</body>
</html>
