<div class="content-wrapper">
<?= form_open("Registros/actualizar/".$id) ?>
<?php
    // foreach ($autos->result() as $auto) {
    //     $carros[] = array(strval($auto->autoID) => strval($auto->nombre));
    // }
    $key1 = array('0');
    foreach ($autos->result() as $auto) {
        array_push($key1, strval($auto->autoID));
    }
    array_shift($key1);
    $carros = array_fill_keys($key1, 'a');
    $i = 0;
    foreach ($carros as &$carro) {
        $carro = $autos->result()[$i]->nombre;
        $i = $i + 1;
    }
    $seletedAuto = $registro->result()[0]->autoID;
    //print_r($carros);
    $key2 = array('0');
    foreach ($duenos->result() as $dueno) {
        array_push($key2, strval($dueno->duenoID));
    }
    array_shift($key2);
    $personas = array_fill_keys($key2, 'a');
    $i = 0;
    foreach ($personas as &$persona) {
        $persona = $duenos->result()[$i]->nombre;
        $i = $i + 1;
    }
    $seletedDueno = $registro->result()[0]->duenoID;
    // print_r($personas);
    $uso = array(
        'name' => 'uso',
        'placeholder' => 'En que sector se usa el vehículo',
        'value' => $registro->result()[0]->uso
    );
    $placa = array(
        'name' => 'placa',
        'placeholder' => 'Escribe las placas del vehículo',
        'value' => $registro->result()[0]->placa
    );
    $numSerie = array(
        'name' => 'numSerie',
        'placeholder' => '10 dígitos alfanuméricos',
        'value' => $registro->result()[0]->numSerie
    );
    $robado = array(
        '0' => 'No',
        '1' => 'Si'
    );
    //print_r($robado);
    if ($registro->result()[0]->robado == 0) {
        $seletedRob = '0';
    } else {
        $seletedRob = '1';
    }
?>
<!-- Forma con CodeIgniter -->
<?= form_label('Auto: ','autoID') ?>
<?= form_dropdown('autoID', $carros, $seletedAuto) ?>
<br>
<?= form_label('Dueño: ','duenoID') ?>
<?= form_dropdown('duenoID', $personas, $seletedDueno) ?>
<br>
<?= form_label('Uso: ','uso') ?>
<?= form_input($uso) ?>
<br>
<?= form_label('Número de placa: ','placa') ?>
<?= form_input($placa) ?>
<br>
<?= form_label('Número de serie: ','numSerie') ?>
<?= form_input($numSerie) ?>
<br>
<?= form_label('Reporte de robo: ','robado') ?>
<?= form_dropdown('robado', $robado, $seletedRob) ?>
<br>
<?= form_submit('','Actualizar curso') ?>
<?= form_close() ?>

    
</div>