<?php

include "conn.php";

$nome = $_POST ['nome'];
$sobrenome = $_POST ['sobrenome'];
$sexo = $_POST ['sexo'];
$data_nascimento = $_POST ['data_nascimento'];
$cpf = $_POST ['cpf'];
$email = $_POST ['email'];
$senha = $_POST ['senha'];


$conn->query("INSERT INTO cliente (cli_nome, cli_sobrenome, cli_sexo, cli_cpf, cli_email, cli_senha) VALUES ('$nome', '$sobrenome', '$sexo', '$cpf', '$email', '$senha')");