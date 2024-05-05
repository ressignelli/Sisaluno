<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Cadastro de Aluno</title>
     <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css"  href="index.css" />
</head>

	<script src="script.js" type="text/javascript"></script>
    <body onload="">  

        <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
        <div>
            <h1 id="titulo">Altera Aluno</h1>
            <br>
        </div>

<br><br><hr><br>
                <?php
                   require("conecta.php");
                        $ref3 = $_POST['raalterar'];
                        $sql = mysqli_query($conn, "SELECT * FROM id22110147_sisaluno.aluno WHERE ra = '$ref3'");
 
                        // Verifica se recebeu ao menos um resultado (o que se espera)
                        if($exibe = mysqli_fetch_array($sql))
                        {
                            // Se recebeu, faz a leitura dos dados
                            $ra = $exibe["ra"];
                            $Nome = $exibe["nomealuno"];
                            $Sobrenome = $exibe["sobrenome"];
                            $Datanasc = $exibe["datanasc"];
                            $Regmat = $exibe["rm"];
                            $Serieano = $exibe["serieano"];
                            $Rg = $exibe["rg"];
                            $DE = $exibe["de"];

                            $CPF = $exibe["cpf"];
                            $Email = $exibe["email"];
                            $Telefone = $exibe["telefone"];
                            $Logradouro = $exibe["logradouro"];
                            $Numero = $exibe["numero"];
                            $Bairro = $exibe["bairro"];
                            $CEP = $exibe["cep"];
                            $Cidade = $exibe["cidade"];
                            
                            $Nomemae = $exibe["nomemae"];
                            $Telmae = $exibe["telmae"];
                            $Nomepai = $exibe["nomepai"];
                            $Telpai = $exibe["telpai"];
                            $Nomeresp = $exibe["nomeresp"];
                            $Telresp = $exibe["telresp"];
                            
                            // Imprime formulário pré carregado
                            ?>
                            <form action="salva_alt_aluno.php" method="POST">
                                <a>RA: </a><?php echo $ra; ?>
                                <a> RM: </a><?php echo $Regmat; ?><br>
                                <input type="hidden" name="ra" value="<?php echo $ra; ?>">
                                Série/Ano: <input type="text" name="Serieano" value="<?php echo $Serieano; ?>" required>
                                Nome: <input type="text" name="Nome" value="<?php echo $Nome; ?>" required>
                                Sobrenome: <input type="text" name="Sobrenome" value="<?php echo $Sobrenome; ?>" required>
                                D.N.: <input type="date" name="Datanasc" value="<?php echo $Datanasc; ?>" required>
                                <br><br><hr><br>Documentos Pessoais:
                                <br><br>
                                RG:  <input type="text" name="rg" value="<?php echo $Rg; ?>"> 
                                Data Expedição: <input type="text" name="de" value="<?php echo $DE; ?>"> 
                                CPF: <input type="text" name="cpf" value="<?php echo $CPF; ?>"> 
                                <br><br><hr><br>Contatos Pessoais:
                                <br><br>
                                E-mail: <input type="text" name="email" value="<?php echo $Email; ?>"> 
                                Telefone/Celular: <input type="text" name="telefone" value="<?php echo $Telefone; ?>"> 
                                <br><br><hr><br>Endereço:
                                <br><br>
                                Logradouro: <input type="text" name="logradouro" value="<?php echo $Logradouro; ?>" required>
                                Número: <input type="text" name="numero" value="<?php echo $Numero; ?>" required>
                                Bairro: <input type="text" name="bairro" value="<?php echo $Bairro; ?>" required>
                                CEP: <input type="text" name="cep" value="<?php echo $CEP; ?>" required>
                                Cidade: <input type="text" name="cidade" value="<?php echo $Cidade; ?>" required>
                                
                                <br><br><hr><br>Responsáveis:
                                <br><br>
                                Nome da Mãe: <input type="text" name="nomemae" value="<?php echo $Nomemae; ?>">
                                Telefone: <input type="text" name="telmae" value="<?php echo $Telmae; ?>">
                                <br><br>
                                Nome do Pai: <input type="text" name="nomepai" value="<?php echo $Nomepai; ?>">
                                Telefone: <input type="text" name="telpai" value="<?php echo $Telpai; ?>">                                
                                <br><br>
                                Nome Responsável: <input type="text" name="nomeresp" value="<?php echo $Nomeresp; ?>">
                                Telefone: <input type="text" name="telresp" value="<?php echo $Telresp; ?>">
                                <br><br><hr><br>
                                <input type="submit" value="Salvar Alteração">
                            </form>
                            <a href="index.php"><input type="button" value="Cancelar"></a> 
                            <?php
                        }
                        else // RA inválido
                        {
                            // Imprime alerta em javascript e faz o redirecionamento para alguma página
                            ?>
                            <script>
                                alert("RA Inválido!");
                                window.location = 'index.php';
                            </script>
                            <?php
                        }
                    
                            ?>
      </body>
      </html>
