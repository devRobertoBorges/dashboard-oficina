<?php
$host = "localhost";   // servidor do MySQL
$user = "root";        // usuário (padrão do XAMPP/WAMP é root)
$pass = "roberto2002";            // senha (vazio por padrão no XAMPP)
$db   = "oficina"; // nome do seu banco

// Criar conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>