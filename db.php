<?php

$db = new mysqli;

$db->connect('localhost', 'root', '', 'crudphp');

if ($db) {
    echo "sucess";
}


?>