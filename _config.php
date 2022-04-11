<?php

// essa deve ser sempre a primeira linha de codigo em site
header('content-Type: text/html; charset=utf-8');

// conexão com banco de dados:
//         As variaveis abaixo devem ser definidas conforme o provador de hospedagem
//           os dados abaixo são do xampp

$db = array(
    "hostname" => "localhost",
    "server" => "localhost",
    "database" => "vitugo",
    "username" => "root",
    "password" => ""
);
$conn = new mysqli($db["hostname"], $db["username"], $db["password"], $db["database"]);
