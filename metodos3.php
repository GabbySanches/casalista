<?php
include("conexao.php");

$query = "select * from apartamento"; 
$result_query = mysqli_query($conn,$query);

echo "<table>";
# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $result_query ))
{ 
      echo "<tr>";
      print "<td>" . $row[0] . "<td>" . $row[1] . "<td>" . $row[2] . "<td>" . $row[3] ."<td>" . $row[4];
      echo "</tr>";
}          
echo "</table>";

mysqli_close($conn);



function listaapartamento(){

      $query = "select * from apartamento"; 
      $result_query = mysqli_query($conn,$query);
      
      echo "<table>";
      # Exibe os registros na tela 
      while ($row = mysqli_fetch_array( $result_query ))
      { 
            echo "<tr>";
            print "<td>" . $row[0] . "<td>" . $row[1] . "<td>" . $row[2] . "<td>" . $row[3] ."<td>" . $row[4];
            echo "</tr>";
      }          
      echo "</table>";

      mysqli_close($conn);
    
   }

function insertapartamento($numeroapto, $areaapto, $codigoedificio, $codigomorador, $valor){

   $query = "INSERT INTO apartamento (numeroapto, areaapto, codigoedificio, codigomorador, valor) VALUES ('$numeroapto', '$areaapto', '$codigoedificio', '$codigomorador', '$valor')";
   $insert = mysqli_query($query,$connect);

   if($insert){
       echo"<script language='javascript' type='text/javascript'>
       alert('Apartamento cadastrado com sucesso!');window.location.
       href='index.html'</script>";
     }else{
       echo"<script language='javascript' type='text/javascript'>
       alert('Não foi possível cadastrar esse apartamento');window.location
       .href='cadastroapto.html'</script>";
     }
}

?>