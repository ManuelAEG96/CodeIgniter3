$(document).on('submit', '#encr', function (e) {
    e.preventDefault();
    // alert('Hola!');
    $.ajax({
        method: 'post',
        url: this.action,
        data: $(this).serialize(),
        dataType: 'json',
        success: function(data) {
            // document.write('<p>' + dkata + '</p>');
            // document.getElementById('resultado').innerHTML='<p>' + data + '</p>';
            // alert(data);
            if (!data['error']) {
                document.getElementById('resultado').innerHTML='';
                document.getElementById('resultado').innerHTML='<p>' + data['mensaje'] + '</p>' +  '<p>' + 'Longitud del encriptado: ' + data['mensaje'].length + ' caracteres</p>';
                // document.getElementById('mensaje').setAttribute('value',data['mensaje']);
                // textbox.setAttribute('value',data['mensaje']);
                // document.desencr.mensaje2.value = data['mensaje'];
            }
        }
    });
});

$(document).on('submit', '#desencr', function (e) {
    e.preventDefault();
    // alert('Hola!');
    $.ajax({
        method: 'post',
        url: this.action,
        data: $(this).serialize(),
        dataType: 'json',
        success: function(data) {
            // document.write('<p>' + dkata + '</p>');
            // document.getElementById('resultado').innerHTML='<p>' + data + '</p>';
            // alert(data);
            if (!data['error']) {
                document.getElementById('resultado').innerHTML='';
                document.getElementById('resultado').innerHTML='<p>' + data['mensaje'] + '</p>';
                // document.getElementById('mensaje').setAttribute('value',data['mensaje']);
                // textbox.setAttribute('value',data['mensaje']);
                // document.encr.mensaje.value = data['mensaje'];
            }
        }
    });
});