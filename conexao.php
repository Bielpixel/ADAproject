<?php
$servername = "localhost"; // nome do servidor (geralmente "localhost")
$username = "root"; // nome de usuário do MySQL
$password = ""; // senha do MySQL
$database = "ADAproject"; // nome do banco de dados

// Criando uma conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Conexão bem-sucedida, faça as operações desejadas aqui

// Fechando a conexão
$conn->close();
?>
