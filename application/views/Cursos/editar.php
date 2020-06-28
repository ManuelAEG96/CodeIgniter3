<body>
<?= form_open("Cursos/actualizar/".$id) ?>
<?php
    $nombre = array(
        'name' => 'nombre',
        'placeholder' => 'Escribe tu nombre',
        'value' => $curso->result()[0]->nombreCurso
    );
    $videos = array(
        'name' => 'videos',
        'placeholder' => 'Cantidad de videos del curso',
        'value' => $curso->result()[0]->videosCurso
    );
?>
<!-- Forma con CodeIgniter -->
<?= form_label('Nombre: ','nombre') ?>
<?= form_input($nombre) ?>
<br>
<!-- Forma tradicional con HTML -->
<?= form_label('Número de videos: ','video') ?>
<?= form_input($videos) ?>
<br>
<?= form_submit('','Actualizar curso') ?>
<?= form_close() ?>

    
</body>
</html>