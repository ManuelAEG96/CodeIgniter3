<?= $headers; ?>

<div class="content-wrapper">
<?php echo $segmento; ?>

<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Autos disponibles para registros</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">


<div class="card">
    <div class="card-header">
    <h3 class="card-title">Lista de los autos</h3>
        <div class="card-tools">
            <a class="btn btn-block btn-success btn-xs" href="http://localhost/CodeIgniter3/Autos/nuevo/">Dar de alta un nuevo vehículo</a>
            
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table class="table table-bordered">
        <thead>                  
        <tr>
            <th>Marca</th>
            <th>Nombre</th>
            <th>Año</th>
            <th>Tipo</th>
            <th>Opciones</th>
        </tr>
        </thead>
        <tbody>
<?php
if ($autos) {
    foreach ($autos->result() as $auto) { ?>
            <tr>
                <td><a href="http://localhost/CodeIgniter3/Autos/index/<?= $auto->autoID; ?>"><?= $auto->nombre; ?></a></td>
                <td><?= $auto->marca; ?></td>
                <td><?= $auto->modelo; ?></td>
                <td><?= $auto->tipo; ?></td>
                <td>
                <a href="http://localhost/CodeIgniter3/Autos/editar/<?= $auto->autoID; ?>" class="btn btn-block btn-primary btn-sm">Editar</a>
                <a href="http://localhost/CodeIgniter3/Autos/eliminar/<?= $auto->autoID; ?>" class="btn btn-block btn-danger btn-sm">Borrar</a>
                </td>
            </tr>
<?php } 
} else {
    echo "<p>Error en la aplicación</p>";
} ?>
        </tbody>
            </table>
            
            </div>
            
            </div>

    </div>
    </div>
    </div>
    </section>

<br>
<br>


</div>


