<?php
    $servername = "localhost";
    $database = "";
    $username = "root";
    $password = "";


    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Conexão falhou. Erro: " . mysqli_connect_error());
    }
?>
