<div class="content-wrapper">
<?= form_open("Duenos/recibirdatos") ?>
<?php
    $nombre = array(
        'name' => 'nombre',
        'placeholder' => 'Escribe el nombre',
    );
    $apellidoP = array(
        'name' => 'apellidoP',
        'placeholder' => 'Escribe el apellido paterno',
    );
    $apellidoM = array(
        'name' => 'apellidoM',
        'placeholder' => 'Escribe el apellido materno',
    );
    $domicilio = array(
        'name' => 'domicilio',
        'placeholder' => 'Escribe el domicilio',
    );
    $fechaNac = array(
        'name' => 'fechaNac',
        'placeholder' => 'Formato: AAAA-MM-DD',
    );
    $genero = array(
        '0' => 'Masculino',
        '1' => 'Femenino'
    );
    $edad = array(
        'name' => 'edad',
        'placeholder' => 'Escribe la edad en años',
    );
    $edoCiv = array(
        'name' => 'edoCiv',
        'placeholder' => 'Soltero, Casado, Divorciado, Viudo',
    );
?>
<!-- Forma con CodeIgniter -->
<?= form_label('Nombre del dueño: ','nombre') ?>
<?= form_input($nombre) ?>
<br>
<?= form_label('Apellido Paterno: ','apellidoP') ?>
<?= form_input($apellidoP) ?>
<br>
<?= form_label('Apellido Materno: ','apellidoM') ?>
<?= form_input($apellidoM) ?>
<br>
<?= form_label('Domicilio del dueño: ','domicilio') ?>
<?= form_input($domicilio) ?>
<br>
<?= form_label('Fecha de nacimiento: ','fechaNac') ?>
<?= form_input($fechaNac) ?>
<br>
<?= form_label('Género: ','genero') ?>
<?= form_dropdown('genero', $genero, $seletedGen) ?>
<br>
<?= form_label('Edad: ','edad') ?>
<?= form_input($edad) ?>
<br>
<?= form_label('Estado Civil: ','edoCiv') ?>
<?= form_input($edoCiv) ?>
<br>
<?= form_submit('','Dar de alta dueño') ?>
<?= form_close() ?>

</div>