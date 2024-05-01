<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Aluno</title>
    <link rel="stylesheet" type="text/css"  href="index.css" />
</head>
<script src="aluno.js" type="text/javascript"></script>
<body>
    <br><hr><br><br><br> 
    <div>
        <h1 id="titulo">SISALUNO</h1>
    </div>
    <br><hr><br><br><br> 

    <nav>
    <ul class="menu">
        <li><a href="novo.html">Novo</a></li>
        <li><a href="#">Imprimir Página</a></li>
    </ul>
    </nav>
    <br><hr><br><br><br>    

        <form id="form3" method="POST" action="altera_aluno.php">
            <label>RA:</label>
                <input type="text" id="raalterar" name="raalterar"/>
                <button type="submit">Alterar Registro</button>
        </form>

        <form id="form4" method="POST" action="excluir_aluno.php">
            <label>RA:</label>
                <input type="text" id="raexcluir" name="raexcluir"/>
                <button type="submit">Excluir Registro</button>
        </form>

    <center>
        <br> <hr>
        <h1>Consulta Aluno</h1>
        <br>
        <form id="form1" method="POST">
            <label>Nome:</label>
                <input type="text" id="query2" name="query2" />
        </form>
        <br>
        <form id="form2" method="POST">
            <label>Sobrenome:</label>
                <input type="text" id="query3" name="query3" />
        </form>
        <br>
        <table border="4">
            <tr>
                <td>RA</td>
                <td>NOME</td>
                <td>SOBRENOME</td>
                <td>DATA DE NASCIMENTO</td>
                <td>RG</td>
                <td>CPF</td>
                <td>SÉRIE/ANO</td>
                <td>LOGRADOURO</td>
                <td>NÚMERO</td>
                <td>BAIRRO</td>
                <td>CIDADE</td>
                <td>CEP</td>
                <td>TELEFONE</td>
            </tr>
            <?php
                require("conecta.php");
                    if(isset($_POST['query2']) != "")
                    {
                        $ref = $_POST['query2'];
                    }
                    else
                    {
                        $ref = '';
                    }  
                    if(isset($_POST['query3']) != "")
                    {
                        $ref2 = $_POST['query3'];
                    }
                    else
                    {
                        $ref2= '';
                    }                       
                    $dados_select = mysqli_query($conn, "SELECT ra, nomealuno, sobrenome, datanasc, rg, cpf, serieano, logradouro, numero, bairro, cidade, cep, telefone FROM aluno.aluno WHERE nomealuno LIKE '%$ref%' and sobrenome LIKE '%$ref2%'");

                    while($dado = mysqli_fetch_array($dados_select)) {
                        echo '<tr>';
                        echo '<td>'.$dado[0].'</td>';
                        echo '<td>'.$dado[1].'</td>';
                        echo '<td>'.$dado[2].'</td>';
                        echo '<td>'.$dado[3].'</td>';
                        echo '<td>'.$dado[4].'</td>';
                        echo '<td>'.$dado[5].'</td>';
                        echo '<td>'.$dado[6].'</td>';
                        echo '<td>'.$dado[7].'</td>';
                        echo '<td>'.$dado[8].'</td>';
                        echo '<td>'.$dado[9].'</td>';
                        echo '<td>'.$dado[10].'</td>';
                        echo '<td>'.$dado[11].'</td>';
                        echo '<td>'.$dado[12].'</td>';
                        echo '</tr>';
                    }
            ?>
        </table>
    </center>
</body>

</html>
