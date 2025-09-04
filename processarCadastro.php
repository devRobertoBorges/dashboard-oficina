<?php
// Inclui a conexão
include("conexao.php");

// Se for cadastro de cliente
if (isset($_POST['cadastrar_cliente'])) {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO cliente (nome, telefone, email) VALUES ('$nome', '$telefone', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Erro: " . $conn->error;
    }
}

// Se for cadastro de moto
if (isset($_POST['cadastrar_moto'])) {
    $cliente_id = $_POST['cliente_id'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $ano = $_POST['ano'];
    $placa = $_POST['placa'];
    $chassi = $_POST['chassi'];

    $sql = "INSERT INTO motos (cliente_id, marca, modelo, ano, placa, chassi) 
            VALUES ('$cliente_id', '$marca', '$modelo', '$ano', '$placa', '$chassi')";
    if ($conn->query($sql) === TRUE) {
        echo "Moto cadastrada com sucesso!";
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>