<body>
<?php
if ($cursos) {
    foreach ($cursos->result() as $curso) { ?>
        <ul>
            <li><a href="<?= $curso->idCurso; ?>"><?= $curso->nombreCurso; ?></a></li>
        </ul>
<?php } 
} else {
    echo "<p>Error en la aplicación</p>";
} ?>

<?php echo $segmento; ?>
    
</body>
</html>