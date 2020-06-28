$(document).on('submit', '#registrar', function (e) {
    e.preventDefault();
    // alert('Hola!');
    $.ajax({
        method: 'post',
        url: this.action,
        data: $(this).serialize(),
        dataType: 'json',
        success: function(data) {
            if (data['error']) {
                alert(data['mensaje']);
            }
        }
    });
});

$(document).on('submit', '#registrar', function (e) {
    e.preventDefault();
    
    if(!$("#agreeTerms").prop('checked') )
    {
        alert('Debes de aceptar los términos y condiciones.');
    }
});