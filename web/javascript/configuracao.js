$("#formulario").submit(function() {
    if($("#nomeCliente").val()== null || $("#emailCliente").val() ==""){
        alert('Verifique se todos os dados foram informados!');      
        return false;
    }
});

