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



$(document).ready(function(e) {
        $(".showonhover").click(function(){
			$("#selectfile").trigger('click');
		});
    });


var input = document.querySelector('input[type=file]'); // see Example 4

input.onchange = function () {
  var file = input.files[0];

  drawOnCanvas(file);   // see Example 6
  displayAsImage(file); // see Example 7
};

function drawOnCanvas(file) {
  var reader = new FileReader();

  reader.onload = function (e) {
    var dataURL = e.target.result,
        c = document.querySelector('canvas'), // see Example 4
        ctx = c.getContext('2d'),
        img = new Image();

    img.onload = function() {
      c.width = img.width;
      c.height = img.height;
      ctx.drawImage(img, 0, 0);
    };

    img.src = dataURL;
  };

  reader.readAsDataURL(file);
}

function displayAsImage(file) {
  var imgURL = URL.createObjectURL(file),
      img = document.createElement('img');

  img.onload = function() {
    URL.revokeObjectURL(imgURL);
  };

  img.src = imgURL;
  document.body.appendChild(img);
}

$("#upfile1").click(function () {
    $("#file1").trigger('click');
});
$("#upfile2").click(function () {
    $("#file2").trigger('click');
});
$("#upfile3").click(function () {
    $("#file3").trigger('click');
});