<body>
<?= form_open("Cursos/recibirdatos") ?>
<?php
    $nombre = array(
        'name' => 'nombre',
        'placeholder' => 'Escribe tu nombre'
    );
    $videos = array(
        'name' => 'videos',
        'placeholder' => 'Cantidad de videos del curso'
    );
?>
<!-- Forma con CodeIgniter -->
<?= form_label('Nombre: ','nombre') ?>
<?= form_input($nombre) ?>
<br>
<!-- Forma tradicional con HTML -->
<label>
    Número videos:
    <?= form_input($videos) ?>
</label>
<br>
<?= form_submit('','Subir curso') ?>
<?= form_close() ?>

    
</body>
</html>