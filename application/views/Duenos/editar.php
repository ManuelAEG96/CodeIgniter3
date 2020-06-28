<div class="content-wrapper">
<?= form_open("Duenos/actualizar/".$id) ?>
<?php
    $nombre = array(
        'name' => 'nombre',
        'placeholder' => 'Escribe el nombre',
        'value' => $dueno->result()[0]->nombre
    );
    $apellidoP = array(
        'name' => 'apellidoP',
        'placeholder' => 'Escribe el apellido paterno',
        'value' => $dueno->result()[0]->apellidoP
    );
    $apellidoM = array(
        'name' => 'apellidoM',
        'placeholder' => 'Escribe el apellido materno',
        'value' => $dueno->result()[0]->apellidoM
    );
    $domicilio = array(
        'name' => 'domicilio',
        'placeholder' => 'Escribe el domicilio',
        'value' => $dueno->result()[0]->domicilio
    );
    $fechaNac = array(
        'name' => 'fechaNac',
        'placeholder' => 'Formato: AAAA-MM-DD',
        'value' => $dueno->result()[0]->fechaNac
    );
    $genero = array(
        // 'name' => 'genero',
        // 'placeholder' => 'Cantidad de videos del curso',
        // 'value' => $dueno->result()[0]->genero
        '0' => 'Masculino',
        '1' => 'Femenino'
    );
    if ($dueno->result()[0]->genero == 0) {
        $seletedGen = '0';
    } else {
        $seletedGen = '1';
    }
    $edad = array(
        'name' => 'edad',
        'placeholder' => 'Escribe la edad en años',
        'value' => $dueno->result()[0]->edad
    );
    $edoCiv = array(
        'name' => 'edoCiv',
        'placeholder' => 'Soltero, Casado, Divorciado, Viudo',
        'value' => $dueno->result()[0]->edoCiv
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
<?= form_submit('','Actualizar dueño') ?>
<?= form_close() ?>

    
</div>