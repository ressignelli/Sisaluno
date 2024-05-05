<?php
    require("conecta.php");
    $ra = $_POST['raexcluir'];

    $sql = mysqli_query($conn, "SELECT * FROM id22110147_sisaluno.aluno WHERE ra = '$ra'");
 
      if($verifica = mysqli_fetch_array($sql))
      {

        $sql = "DELETE FROM id22110147_sisaluno.aluno WHERE ra = '$ra'";

          if ($conn->query($sql) === TRUE) {
            echo "<center><h1>Registro Excluido com Sucesso</h1>";
            echo "<a href='index.php'><input type='button' value='Voltar'></a></center>";
          } else {
            echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
          } 
      } else {
                            // Imprime alerta em javascript e faz o redirecionamento para alguma página
          ?>
            <script>
              alert("RA Inválido!");
              window.location = 'index.php';
            </script>
          <?php
          }
?>