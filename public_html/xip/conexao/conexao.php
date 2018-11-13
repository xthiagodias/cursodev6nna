<?php
    
    define('HOST','localhost');
    define('USUARIO','projetoweb');
    define('SENHA', 'thi1087');
    define('DB','bd_xipbook');

    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar o banco de dados!');


    