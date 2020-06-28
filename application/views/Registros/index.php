<?= $headers; ?>
<div class="content-wrapper">
<?php
if ($registros) {
    foreach ($registros->result() as $registro) { ?>
        <tr>
            <td><a href="http://localhost/CodeIgniter3/Registros/index/<?= $registro->duenoautoID; ?>"><?= $registro->auto; ?></a></td>
            <td><?= $registro->marca; ?></td>
            <td><?= $registro->nombre; ?></td>
            <td><?= $registro->apellidoP; ?></td>
            <td><?= $registro->apellidoM; ?></td>
            <td><?= $registro->uso; ?></td>
            <td><?= $registro->placa; ?></td>
            <td><?= $registro->numSerie; ?></td>
            <td><?= $registro->robado; ?></td>
            <td><a href="http://localhost/CodeIgniter3/Registros/editar/<?= $registro->duenoautoID; ?>">Editar</a></td>
            <td><a href="http://localhost/CodeIgniter3/Registros/eliminar/<?= $registro->duenoautoID; ?>">Borrar</a></td>
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