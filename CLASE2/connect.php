<?php

    $name = $_POST['nombre'];

    $dbhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "usuarios";

    $conn = mysqli_connect($dbhost, $username, $password, $dbname);

    if (mysqli_connect_error()) {
        die("Connection error: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO datos (nombre)
            VALUES(?)";

    $stmt = mysqli_stmt_init($conn);

    if ( ! mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "s", $name);

    mysqli_stmt_execute($stmt);

    echo "Guardado :)";
?>