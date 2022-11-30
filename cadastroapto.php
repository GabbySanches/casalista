<?php

include("conexao.php");

$numeroapto = $_POST["numeroapto"];
$areaapto = $_POST["areaapto"];
$codigoedificio = $_POST["codigoedificio"];
$codigomorador = $_POST["codigomorador"];
$valor = $_POST["valor"];

if($numeroapto == "" || $numeroapto == null)
{
    echo "Numero do apartamento não pode estar vazio!";
}
else
{
  $query = "INSERT INTO apartamento (numeroapto, areaapto, codigoedificio, codigomorador, valor) VALUES ('$numeroapto', '$areaapto', '$codigoedificio', '$codigomorador', '$valor')";
  $insert = mysqli_query($conn,$query);
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