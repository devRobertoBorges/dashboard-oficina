<?php
include 'conexao.php';

if (isset($_POST['os_id']) && isset($_POST['novo_status'])) {
    $os_id = $_POST['os_id'];
    $novo_status = $_POST['novo_status'];

    $sql = "UPDATE ordens_servico SET status='$novo_status' WHERE id=$os_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Status atualizado com sucesso!";
    } else {
        echo "Erro: " . $conn->error;
    }
}

header("Location: consultarOS.php");
exit;
?>
