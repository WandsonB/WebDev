<?php
$servername = "localhost"; // Endereço do servidor (geralmente "localhost" para conexão local)
$database = "aoinicio"; // Nome do banco de dados que você criou
$username = "Adm"; // Nome de usuário do banco de dados
$password = "SetStrongPass"; // Senha do banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $database);

// if ($connect->connect_error) {
//     die("Conexão falhou: " . $connect->connect_error);
// }


echo "Conectado com sucesso!";
$conn->close(); // Fecha a conexão
?>