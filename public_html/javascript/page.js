/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var login;
var senha;

function salvaCadastroPF() {

    login = document.getElementById("validationCustom08").value;
    senha = document.getElementById("validationCustom09").value;
    alert("Cadastro Efetuado com Sucesso! Agora voce pode efetuar seu Login.");
    window.location.replace("index.html");
    

    

}




$('body').scrollspy({target: '.anuncios'});


function tipoCadastro1() {

    $('#cadPF').show();

}

function tipoCadastro2() {

    $('#cadPF').hide();

}

function tipoCadastro3() {

    $('#cadPJ').hide();

}

function tipoCadastro4() {

    $('#cadPJ').show();

}

function selecionaTipoCadastro(valor) {

    var tipo0 = document.getElementById("tipo0");
    var visivel = document.getElementById("cadPF").hidden = false;
    var visivel2 = document.getElementById("cadPJ").hidden = false;


    if (tipo0) {

        tipoCadastro2();
        tipoCadastro3();

    }

    if ((valor === "1")) {
        tipoCadastro1();
        tipoCadastro3();
    }


    if (valor === "2") {
        tipoCadastro2();
        tipoCadastro4();


    }
}