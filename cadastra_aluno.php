<?php
    require("conecta.php");

    $ra = $_POST['ra'];
    $rm = $_POST['rm'];
    $serieano = $_POST['serieano'];
    $rg = $_POST['rg'];
    $de = $_POST['de'];
    $cpf = $_POST['cpf'];
    $rne = $_POST['rne'];
    $paisrne = $_POST['paisrne'];
    $datarne = $_POST['datarne'];
    $nomealuno =  $_POST['nomealuno'];
    $sobrenome = $_POST['sobrenome'];
    $datanasc = $_POST['datanasc'];
    $nis = $_POST['nis'];
    $qualpne = $_POST['qualpne'];
    $naturalidade = $_POST['naturalidade'];
    $uf = $_POST['uf'];
    $nacionalidade = $_POST['nacionalidade'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $nomemae = $_POST['nomemae'];
    $telefonemae = $_POST['telefonemae'];
    $nomepai = $_POST['nomepai'];
    $telefonepai = $_POST['telefonepai'];
    $nomeresp = $_POST['nomeresp'];
    $telefoneresp = $_POST['telefoneresp'];
    $sexo = $_POST['sexo'];
    $cor = $_POST['cor'];
    $bf = $_POST['bf'];
    $pne = $_POST['pne'];

    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];


    $sql = "INSERT INTO aluno.aluno (ra, nomealuno, rm, serieano, rg, de, cpf, rne, paisrne, datarne, sobrenome, datanasc, nis, qualpne, naturalidade, uf, nacionalidade, email, telefone, sexo, cor, bf, pne, logradouro, numero, bairro, cep, cidade) VALUES ('$ra', '$nomealuno', '$rm', '$serieano', '$rg', '$de', '$cpf', '$rne', '$paisrne', '$datarne', '$sobrenome', '$datanasc', '$nis', '$qualpne', '$naturalidade', '$uf', '$nacionalidade', '$email', '$telefone', '$sexo', '$cor', '$bf', '$pne', '$logradouro', '$numero', '$bairro', '$cep', '$cidade')";

    $sql2 = "INSERT INTO aluno.paisaluno (raaluno, nomemae, telefonemae, nomepai, telefonepai, nomeresp, telefoneresp) VALUES ('$ra', '$nomemae', '$telefonemae', '$nomepai', '$telefonepai', '$nomeresp', '$telefoneresp')";


    if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {
      echo "<center><h1>Registro Inserido com Sucesso</h1>";
      echo "<a href='index.php'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>
