<?php
include("conexao.php");

$query = "select * from morador"; 
$result_query = mysqli_query( $conn, $query );

echo "<table>";
# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $result_query ))
{ 
      echo "<tr>";
      print "<td>" . $row[0] . "<td>" . $row[1] . "<td>" . $row[2] . "<td>" . $row[3] ."<td>" . $row[4] . "<td>" . $row[5];
      echo "</tr>";
}          
echo "</table>";

mysqli_close($conn);

function listamorador(){

      $query = "select * from morador"; 
      $result_query = mysqli_query( $conn, $query );
      
      echo "<table>";
      # Exibe os registros na tela 
      while ($row = mysqli_fetch_array( $result_query ))
      { 
            echo "<tr>";
            print "<td>" . $row[0] . "<td>" . $row[1] . "<td>" . $row[2] . "<td>" . $row[3] ."<td>" . $row[4] . "<td>" . $row[5];
            echo "</tr>";
      }          
      echo "</table>";

      mysqli_close($conn);
    
}

function insertmorador($codigomorador,$nome,$cep,$cpf,$datanascimento,$sexo){

   $query = "INSERT INTO morador (codigomorador, nome, cep, cpf, datanascimento, sexo) VALUES ('$codigomorador','$nome','$cep','$cpf','$datanascimento','$sexo')";
   $insert = mysqli_query($query,$connect);

   if($insert){
       echo"<script language='javascript' type='text/javascript'>
       alert('Morador cadastrado com sucesso!');window.location.
       href='index.html'</script>";
     }else{
       echo"<script language='javascript' type='text/javascript'>
       alert('Não foi possível cadastrar esse morador');window.location
       .href='cadastromorador.html'</script>";
     }
}

?>