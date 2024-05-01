<?php
    require("conecta.php");
    $ra = $_POST['ra'];
    $nomealuno =  $_POST['Nome'];
    $sobrenome = $_POST['Sobrenome'];
    $datanasc = $_POST['Datanasc'];

    $serieano = $_POST["Serieano"];
    $rg = $_POST["rg"];
    $de = $_POST["de"];
    $cpf = $_POST["cpf"];
                       
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];


    $sql4 = "UPDATE aluno.aluno SET nomealuno='$nomealuno', sobrenome='$sobrenome', datanasc='$datanasc', serieano='$serieano', rg='$rg', de='$de', cpf='$cpf', email='$email', telefone='$telefone', logradouro='$logradouro', numero='$numero', bairro='$bairro', cep='$cep', cidade='$cidade' WHERE ra='$ra'";

    if ($conn->query($sql4) === TRUE) {
      echo "<center><h1>Registro Alterado com Sucesso</h1>";
      echo "<a href='index.php'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql4 . "<br>" . $conn->error;
    }
?>
