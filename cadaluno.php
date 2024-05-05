<?php
require("conecta.php");
    $ra = $_POST['ra'];
    $rm = $_POST['rm'];
    $serieano = $_POST['serieano'];
    $rg = $_POST['rg'];
    $de = $_POST['de'];
    
    if(!empty($_POST['de']))
    {
        $de = $_POST['de'];
    }
    else
    {
        $de = '0001-01-01';
    }
    
    $cpf = $_POST['cpf'];
    $rne = $_POST['rne'];
    $paisrne = $_POST['paisrne'];
    $datarne = $_POST['datarne'];
    
    if(!empty($_POST['datarne']))
    {
        $datarne = $_POST['datarne'];
    }
    else
    {
        $datarne = '0001-01-01';
    }

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
    $telmae = $_POST['telefonemae'];
    $nomepai = $_POST['nomepai'];
    $telpai = $_POST['telefonepai'];
    $nomeresp = $_POST['nomeresp'];
    $telresp = $_POST['telefoneresp'];
    $sexo = $_POST['sexo'];
    $cor = $_POST['cor'];
    $bf = $_POST['bf'];
    $pne = $_POST['pne'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    
    $sql = "INSERT INTO id22110147_sisaluno.aluno (ra, nomealuno, rm, serieano, rg, de, cpf, rne, paisrne, datarne, sobrenome, datanasc, nis, qualpne, naturalidade, uf, nacionalidade, email, telefone, sexo, cor, bf, pne, logradouro, numero, bairro, cep, cidade, nomemae, telmae, nomepai, telpai, nomeresp, telresp) VALUES ('$ra', '$nomealuno', '$rm', '$serieano', '$rg', '$de', '$cpf', '$rne', '$paisrne', '$datarne', '$sobrenome', '$datanasc', '$nis', '$qualpne', '$naturalidade', '$uf', '$nacionalidade', '$email', '$telefone', '$sexo', '$cor', '$bf', '$pne', '$logradouro', '$numero', '$bairro', '$cep', '$cidade', '$nomemae', '$telmae', '$nomepai', '$telpai', '$nomeresp', '$telresp')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<center><h3>Registro Inserido com Sucesso</h3>";
        echo "<a href='index.php'><input type='button' value='Voltar'></a></center>";
    } else {
        echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }

?>