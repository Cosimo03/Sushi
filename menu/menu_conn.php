<?php
    session_start();

    $host = 'localhost';
    $name = 'root';
    $pass = 'root';
    $database = 'sushi';

    $db = mysqli_connect($host, $name, $pass, $database);

    $query = 'SELECT * FROM category';
    $queryFood = mysqli_query($db, $query);

    $json = mysqli_fetch_all ($queryFood, MYSQLI_ASSOC);
    $result = json_encode($json);

    
?>