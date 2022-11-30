<?php

include("conexao.php");

$codigomorador = $_POST['codigomorador'];
$nome = $_POST['nome'];
$cep = $_POST['cep'];
$cpf = $_POST['cpf'];
$datanascimento = $_POST['datanascimento'];
$sexo = $_POST['sexo'];

if($nome == "" || $nome == null)
{
    echo "Nome não pode estar vazio!";
}
else
{
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