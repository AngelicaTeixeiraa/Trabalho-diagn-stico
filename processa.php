<?php

include_once("config.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf =  $_POST['cpf'];
$genero = $_POST['sexo'];
$data = $_POST['data'];
$senha = $_POST['senha'];



$sql= "INTESERT INTO cadastro(nome, email, cpf, sexo, data, senha) VALUES('$nome','$email','$cpf', '$genero','$data','$senha')";
$sql= mysqli_query($cadastro, $sql);

?>