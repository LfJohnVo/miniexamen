<?php
$data = file_get_contents('array.txt');
$data = unserialize($data);
$json = json_encode($data);

if (file_exists('json.json')) {
    file_put_contents('json.json', $json);
}

echo $json;
