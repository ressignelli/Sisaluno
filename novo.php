<!DOCTYPE HTML>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <title>Cadastro de Aluno</title>
     <!-- Aqui chamamos o nosso arquivo css externo -->
    <link rel="stylesheet" type="text/css"  href="index.css" />
</head>

    <body onload="">  

        <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
        <div>
            <h1 id="titulo">Cadastro de Alunos</h1>
            <br>
        </div>

<br><br><hr><br>
	 <!-- Início do formulário -->
        <form id="form1" method="POST" action="cadaluno.php">
            <div class="campo">

                <label for="rm"><strong>Registro de Matrícula (RM): </strong></label>
                <input type="text" name="rm" id="rm" size="10" required>

                <label for="ra"><strong>Registro do Aluno (RA): </strong></label>
                <input type="text" name="ra" id="ra" size="10" required>

                <label for="serieano"><strong>Série/ano: </strong></label>
                <input type="text" name="serieano" id="serieano" size="10" required>
            </div>

            <div class="campo">
		<br>
                <label for="rg"><strong>Registro Geral (RG): </strong></label>
                <input type="text" name="rg" id="rg" class="rg" size="11" value="0">
                <label for="de"><strong>Data de Expedição: </strong></label>
                <input type="date" name="de" id="de">
                <label for="cpf"><strong>CPF: </strong></label>
                <input type="text" name="cpf" id="cpf" size="12" value="0">
            </div>

            <div class="campo">
		<br>
                <label for="rne"><strong>Registro Nacional de Estrangeiro (RNE): </strong></label>
                <input type="text" name="rne" id="rne" size="10" value="0">

                <label for="paisrne"><strong>País: </strong></label>
                <input type="text" name="paisrne" id="paisrne" size="15" value="null">

                <label for="datarne"><strong>Data: </strong></label>
                <input type="date" name="datarne" id="datarne">
            </div>

<br><hr><br>

            <div class="campo">
                <label for="nomealuno"><strong>Nome: </strong></label>
                <input type="text" name="nomealuno" id="nomealuno" size="30" required>

                <label for="sobrenome"><strong>Sobrenome: </strong></label>
                <input type="text" name="sobrenome" id="sobrenome" size="20" required>

                <label for="datanasc"><strong>Data de Nascimento: </strong></label>
                <input type="date" name="datanasc" id="datanasc" required>
            </div>
		<br>
            <div class="campo">
                <label><strong>Sexo Genético</strong></label>
                <label><input type="radio" name="sexo" value="m" checked>Masculino</label>
                <label><input type="radio" name="sexo" value="f">Feminino</label>
            	<label><strong>| Grupo Étnico</strong></label>
            	<label><input type="radio" name="cor" value="branco" checked>Branco</label>
            	<label><input type="radio" name="cor" value="preto">Preto</label>
                <label><input type="radio" name="cor" value="pardo">Pardo</label>
                <label><input type="radio" name="cor" value="indio">Indígena</label>
        	</div>

<br><hr><br>

            <div class="campo">
                <label for="nis"><strong>Número de Identificação Social (NIS)</strong></label>
                <input type="text" name="nis" id="nis" size="10" value="0">

                <label><strong>Bolsa Família/outro</strong></label>
                <label><input type="radio" name="bf" value="s" checked>Sim</label>
                <label><input type="radio" name="bf" value="n">Não</label>

                <label><strong> | Portador de Necessidades Especiais</strong></label>
                <label><input type="radio" name="pne" value="s" checked>Sim</label>
                <label><input type="radio" name="pne" value="n">Não</label>

                <label for="qualpne"><strong> | Qual:</strong></label>
                <input type="textarea" name="qualpne" id="qualpne" size="20" value="null">
            </div>

	    <br>

            <div class="campo">
                <label for="localnasc"><strong>Naturalidade</strong></label>
                <input type="text" name="naturalidade" id="naturalidade" size="30" required>

                <label for="estadonasc"><strong>UF</strong></label>
                <input type="text" name="uf" id="uf" size="2" required>		

                <label for="nacionalidade"><strong>Nacionalidade</strong></label>
                <input type="text" name="nacionalidade" id="nacionalidade" size="20" required>
            </div>

	    <br>

            <!-- Campo de email com-->
            <div class="campo">
                <label for="email"><strong>Email</strong></label>
                <input type="email" name="email" id="email" size="20" value="null@null.com">
                <label for="telefone"><strong>Telefone/Celular</strong></label>
                <input type="text" name="telefone" id="telefone" size="15" value="null">
            </div>

<br><hr><br>


            <div class="campo">
                <label for="nomemae"><strong>Nome da Mãe</strong></label>
                <input type="text" name="nomemae" id="nomemae" size="30" value="null">
                <label for="telefonemae"><strong>Telefone/Celular</strong></label>
                <input type="text" name="telefonemae" id="telefonemae" size="15" value="null">
<br><br>
                <label for="nomepai"><strong>Nome do Pai</strong></label>
                <input type="text" name="nomepai" id="nomepai" size="30" value="null">
                <label for="telefonepai"><strong>Telefone/Celular</strong></label>
                <input type="text" name="telefonepai" id="telefonepai" size="15" value="null">
<br><br>
                <label for="nomeresp"><strong>Nome do Responsável Legal</strong></label>
               	<input type="text" name="nomeresp" id="nomeresp" size="30" value="null">
                <label for="telefoneresp"><strong>Telefone/Celular</strong></label>
                <input type="text" name="telefoneresp" id="telefoneresp" size="15" value="null">
            </div>

<br><hr><br>

            <div class="campo">
                <label for="log"><strong>Logradouro (Rua/Av./Al.)</strong></label>
                <input type="text" name="logradouro" id="logradouro" size="30" required>

                <label for="numero"><strong>Nº</strong></label>
                <input type="text" name="numero" id="numero" size="6" required>
<br><br>
                <label for="bairro"><strong>Bairro</strong></label>
                <input type="text" name="bairro" id="bairro" size="20" required>

                <label for="cep"><strong>CEP</strong></label>
                <input type="text" name="cep" id="cep" size="10" required>
<br><br>
                <label for="cidade"><strong>Cidade-UF</strong></label>
                <input type="text" name="cidade" id="cidade" size="30" required>
            </div>
            
<br><hr><br>

        <input type="submit" value="Salvar">
<!--
    <button class="botaosalvar" type="submit" onsubmit="">Salvar</button> 
-->
    
        </form>

        <a href="index.php"><input type="button" value="Cancelar"></a> 

    </body>

</html>
