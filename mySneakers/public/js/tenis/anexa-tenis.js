function showAlert(element, alert, elMsg, type) {
    $(element).removeClass('d-none');
    $(element).addClass(alert);
    if (type === 'success') {
        $(elMsg).text('Sneaker cadastrado com sucesso');
    } else {
        $(elMsg).text('Sneaker deletado com sucesso');
    }
}

function counterCarac() {
    $('#desc').keyup(({ target }) => {
        let limit = 255;
        let carac = $(target).val().length;
        $('#count').text(carac);

        if (carac > limit) {
            alert('Opa, você ultrapassou o limite de caracteres');
            $('#count').text('255');
        }
    });
}

function changeInput() {
    $('[data-input="upload"]').change(function () {
        if ($(this).prop('files').length > 0) {
            $('#styleBtn').addClass('d-none');
            $('#saveImg').removeClass('d-none');
        } else {
            $('#saveImg').addClass('d-none');
        }
    });
}

$(document).ready(function () {
    counterCarac();
    changeInput();
});
