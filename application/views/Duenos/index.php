<?= $headers; ?>
<div class="content-wrapper">
<?php
if ($duenos) {
    foreach ($duenos->result() as $dueno) { ?>
        <tr>
            <td><a href="http://localhost/CodeIgniter3/Duenos/index/<?= $dueno->duenoID; ?>"><?= $dueno->nombre; ?></a></td>
            <td><?= $dueno->apellidoP; ?></td>
            <td><?= $dueno->apellidoM; ?></td>
            <td><?= $dueno->domicilio; ?></td>
            <td><?= $dueno->fechaNac; ?></td>
            <td><?= $dueno->genero; ?></td>
            <td><?= $dueno->edad; ?></td>
            <td><?= $dueno->edoCiv; ?></td>
            <td><a href="http://localhost/CodeIgniter3/Duenos/editar/<?= $dueno->duenoID; ?>">Editar</a></td>
            <td><a href="http://localhost/CodeIgniter3/Duenos/eliminar/<?= $dueno->duenoID; ?>">Borrar</a></td>
        </tr>
        <br>
<?php } 
} else {
    echo "<p>Error en la aplicación</p>";
} ?>

<?php echo $segmento; ?>

<br>
<br>

<a href="http://localhost/CodeIgniter3/Autos/nuevo/">Dar de alta un nuevo dueño</a>
    
</div>