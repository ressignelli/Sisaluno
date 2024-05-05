<?php
    $servername = "localhost";
    $username = "id22110147_sisaluno";
    $password = "Sisaluno+1";
//    $database = "sisaluno";

    $conn = mysqli_connect($servername, $username, $password);
    
    if (!$conn) {
        die("Conexão falhou. Erro: " . mysqli_connect_error());
    }
?>
