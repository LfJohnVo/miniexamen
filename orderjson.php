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
                $data = file_get_contents('json.json');
                $json = json_decode($data, TRUE);
                $columns = array_column($json, '0');
                array_multisort($columns, SORT_ASC, $json);
                foreach ($json as $key => $value) {
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