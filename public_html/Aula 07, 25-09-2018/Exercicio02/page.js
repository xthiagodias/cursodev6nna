 function LOG1() {

                var login = document.getElementById("login").value;
                var senha = document.getElementById("senha").value;

                if (login === "admin" && senha === "123456") {





                    // alert("Login Efetuado com Sucesso!");
                   // window.open('sucesso.html');
                   window.location.replace("sucesso.html");
                } else
                {

                    //  alert("Dados inválidos!");  
                   // window.open('falha.html');
                   window.location.replace("falha.html");
                }
            }