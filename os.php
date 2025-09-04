<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abertura de Ordem de Serviço</title>
</head>
<body>
    <h1>ABERTURA DE ORDEM DE SERVIÇO</h1>

    <form method="POST" action="processarOS.php">
        <!-- Cliente -->
        <label>Cliente:</label><br>
        <select name="cliente_id" required>
            <option value="">-- Selecione o cliente --</option>
            <?php
            // Exemplo de conexão e busca de clientes
            include 'conexao.php';
            $sql = "SELECT id, nome FROM cliente";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['nome']."</option>";
            }
            ?>
        </select>
        <br><br>

        <!-- Moto -->
        <label>Moto:</label><br>
        <select name="moto_id" required>
            <option value="">-- Selecione a moto --</option>
            <?php
            
            $sql = "SELECT id, modelo, placa FROM motos";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "<option value='".$row['id']."'>".$row['modelo']." - ".$row['placa']."</option>";
            }
            ?>
        </select>
        <br><br>

        <!-- Data de entrada -->
        <label>Data de Entrada:</label><br>
        <input type="date" name="data_entrada" required><br><br>

        <!-- Descrição do problema -->
        <label>Descrição do Problema:</label><br>
        <textarea name="descricao" rows="4" cols="40" required></textarea><br><br>

        <!-- Valor -->
        <label>Valor do Serviço (R$):</label><br>
        <input type="number" name="valor" step="0.01" required><br><br>

        <!-- Status -->
        <label>Status:</label><br>
        <select name="status" required>
            <option value="Em andamento">Em andamento</option>
            <option value="Finalizado">Finalizado</option>
        </select>
        <br><br>

        <button type="submit" name="cadastrar_os">Abrir Ordem de Serviço</button>
    </form>

    <style>
/* Reset e fonte */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background-color: #1f1f1f;
    color: #eee;
    padding: 20px;
}

/* Título */
h1 {
    color: #ff6600;
    text-align: center;
    margin-bottom: 30px;
}

/* Formulário */
form {
    background-color: #272727;
    padding: 30px;
    border-radius: 10px;
    max-width: 600px;
    margin: 0 auto;
    box-shadow: 0 5px 15px rgba(255, 102, 0, 0.3);
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: 500;
    color: #ccc;
}

input[type="text"],
input[type="number"],
input[type="date"],
select,
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 8px;
    background-color: #1f1f1f;
    color: #eee;
    font-size: 1rem;
    outline: none;
    transition: 0.3s;
}

input[type="text"]:focus,
input[type="number"]:focus,
input[type="date"]:focus,
select:focus,
textarea:focus {
    border: 2px solid #ff6600;
}

/* Botão */
button {
    background-color: #ff6600;
    color: #fff;
    border: none;
    padding: 12px 25px;
    border-radius: 8px;
    font-size: 1rem;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background-color: #e65c00;
}

/* Placeholder textarea */
textarea {
    resize: vertical;
}
</style>

</body>
</html>
