<?php

$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$array = array($clave => [$clave, $nombre, $apellido]);

if (file_exists('array.txt')) {
    if (filesize('array.txt') > 0) {
        $restore = file_get_contents('array.txt');
        $data = unserialize($restore);
        $data = array_merge($data, $array);
        file_put_contents('array.txt', serialize($data));
        $columns = array_column($data, '1');
        array_multisort($columns, SORT_ASC, $data);
        echo '<script language="javascript">';
        echo 'alert("Cargado correctamente");';
        echo 'window.location.href="index.php";';
        echo '</script>';
    } else {
        file_put_contents('array.txt', serialize($array));
        echo '<script language="javascript">';
        echo 'alert("Cargado correctamente");';
        echo 'window.location.href="index.php";';
        echo '</script>';
    }
}
