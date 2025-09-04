<?php
// Conexão com o banco
include 'conexao.php';

// Verifica se o formulário foi enviado
if (isset($_POST['cadastrar_os'])) {
    // Pegando os dados enviados pelo formulário
    $cliente_id   = $_POST['cliente_id'];
    $moto_id      = $_POST['moto_id'];
    $data_entrada = $_POST['data_entrada'];
    $descricao    = $_POST['descricao'];
    $valor        = $_POST['valor'];
    $status       = $_POST['status'];

    // Monta o SQL para inserir os dados
    $sql = "INSERT INTO ordens_servico (cliente_id, moto_id, data_entrada, descricao, valor, status) 
            VALUES ('$cliente_id', '$moto_id', '$data_entrada', '$descricao', '$valor', '$status')";

    // Executa a query
    if ($conn->query($sql) === TRUE) {
        echo "<p>✅ Ordem de Serviço cadastrada com sucesso!</p>";
        echo "<a href='os.php'>Abrir nova OS</a> | <a href='index.php'>Voltar ao início</a>";
    } else {
        echo "<p>❌ Erro ao cadastrar OS: " . $conn->error . "</p>";
    }

    // Fecha a conexão
    $conn->close();
}
?>
