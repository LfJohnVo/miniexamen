<?php
include 'header.php';
?>

<body>
    <?php
    include 'nav.php';
    ?>
    <br>
    <div class="container">
        <form method="post" action="generacionarray.php">
            <div class="mb-3">
                <label for="clave" class="form-label">Clave</label>
                <input type="text" class="form-control" id="clave" name="clave">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <?php
    include 'footer.php';
    ?>