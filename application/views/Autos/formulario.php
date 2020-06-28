<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Alta para autos nuevos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nuevo auto</h3>
              </div>
    
<?= form_open("Autos/recibirdatos") ?>
<?php
    $nombre = array(
        'name' => 'nombre',
        'placeholder' => 'Nombre del vehículo',
        'class' => 'form-control'
    );
    $marca = array(
        'name' => 'marca',
        'placeholder' => 'Marca del vehículo',
        'class' => 'form-control'
    );
    $modelo = array(
        'name' => 'modelo',
        'placeholder' => 'Año del vehículo',
        'class' => 'form-control'
    );
    $tipo = array(
        'name' => 'tipo',
        'placeholder' => 'Sedán, Pickup, Hashbag, Van',
        'class' => 'form-control'
    );
?>
<div class="card-body">
    <div class="form-group">
<!-- Forma con CodeIgniter -->
<?= form_label('Nombre','nombre') ?>
<?= form_input($nombre) ?>
</div>
<div class="form-group">
<!-- Forma tradicional con HTML -->
<?= form_label('Marca','marca') ?>
<?= form_input($marca) ?>
</div>
<div class="form-group">
<!-- Forma tradicional con HTML -->
<?= form_label('Modelo','modelo') ?>
<?= form_input($modelo) ?>
</div>
<div class="form-group">
<!-- Forma tradicional con HTML -->
<?= form_label('Tipo','tipo') ?>
<?= form_input($tipo) ?>
</div>

</div>
<!-- /.card -->

<div class="card-footer">
<?= form_submit('','Dar de alta') ?>
</div>
<?= form_close() ?>


</div>

</div>
</div>
</div>
</section>

</div>