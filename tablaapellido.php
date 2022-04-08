<?php
include 'header.php';
?>

<body>
    <?php
    include 'nav.php';
    ?>
    <br>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Clave</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = file_get_contents('array.txt');
                $data = unserialize($data);
                $columns = array_column($data, '2');
                array_multisort($columns, SORT_ASC, $data);
                foreach ($data as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $value[0] . '</td>';
                    echo '<td>' . $value[1] . '</td>';
                    echo '<td>' . $value[2] . '</td>';
                    echo '</tr>';
                } ?>
            </tbody>
        </table>
    </div>

    <?php
    include 'footer.php';
    ?>