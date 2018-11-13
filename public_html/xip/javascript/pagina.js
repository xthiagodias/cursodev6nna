/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$('body').scrollspy({target: '.anuncios'});



function sobeModal() {

    document.getElementById("btmodal").click();
    document.submitForm.submit();
}



function sobeAviso() {

    document.getElementById("btmodal2").click();
    document.submitForm2.submit();
}



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




let modalId = $('#image-gallery');

$(document)
    .ready(function () {

        loadGallery(true, 'a.thumbnail');

        //This function disables buttons when needed
        function disableButtons(counter_max, counter_current) {
            $('#show-previous-image, #show-next-image')
                .show();
            if (counter_max === counter_current) {
                $('#show-next-image')
                    .hide();
            } else if (counter_current === 1) {
                $('#show-previous-image')
                    .hide();
            }
        }

        /**
         *
         * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
         * @param setClickAttr  Sets the attribute for the click handler.
         */

        function loadGallery(setIDs, setClickAttr) {
            let current_image,
                selector,
                counter = 0;

            $('#show-next-image, #show-previous-image')
                .click(function () {
                    if ($(this)
                        .attr('id') === 'show-previous-image') {
                        current_image--;
                    } else {
                        current_image++;
                    }

                    selector = $('[data-image-id="' + current_image + '"]');
                    updateGallery(selector);
                });

            function updateGallery(selector) {
                let $sel = selector;
                current_image = $sel.data('image-id');
                $('#image-gallery-title')
                    .text($sel.data('title'));
                $('#image-gallery-image')
                    .attr('src', $sel.data('image'));
                disableButtons(counter, $sel.data('image-id'));
            }

            if (setIDs == true) {
                $('[data-image-id]')
                    .each(function () {
                        counter++;
                        $(this)
                            .attr('data-image-id', counter);
                    });
            }
            $(setClickAttr)
                .on('click', function () {
                    updateGallery($(this));
                });
        }
    });

// build key actions
$(document)
    .keydown(function (e) {
        switch (e.which) {
            case 37: // left
                if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                    $('#show-previous-image')
                        .click();
                }
                break;

            case 39: // right
                if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                    $('#show-next-image')
                        .click();
                }
                break;

            default:
                return; // exit this handler for other keys
        }
        e.preventDefault(); // prevent the default action (scroll / move caret)
    });

