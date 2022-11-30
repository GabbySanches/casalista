<?php

include("conexao.php");

$cep = $_POST['cep'];
$numero = $_POST['numero'];
$data_vistoria = $_POST['datavistoria'];
$data_construcao = $_POST['dataconstrucao'];
$complemento = $_POST['complemento'];
$nome_edificio = $_POST['nomeedificio'];

if($numero == "" || $numero == null)
{
    echo "Numero não pode estar vazio!";
}
else
{
    $query = "INSERT INTO edificio (cep, numero, datavistoria, dataconstrucao, complemento, nomeedificio) VALUES ('$cep','$numero','$data_vistoria','$data_construcao','$complemento','$nome_edificio')";
    $insert = mysqli_query($query,$connect);
    if($insert){
        echo"<script language='javascript' type='text/javascript'>
        alert('Edificio cadastrado com sucesso!');window.location.
        href='index.html'</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse edificio');window.location
        .href='cadastroedificio.html'</script>";
      }
}

?>