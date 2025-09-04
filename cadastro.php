<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1>CADASTRO DE CLIENTES</h1>
        <form method="POST" action="processarCadastro.php">
            <label>Nome:</label><br>
            <input type="text" name="nome" required><br><br>

            <label>Telefone:</label><br>
            <input type="text" name="telefone" required><br><br>

            <label>E-mail:</label><br>
            <input type="email" name="email" required><br><br>

            <button type="submit" name="cadastrar_cliente"> CADASTRAR CLIENTE</button>
        </form>
        
        <hr>

        <form method="POST" action="processarCadastro.php">
            <label>Cliente:</label><br>
            <select name="cliente_id" required>
            <?php
            
            include 'conexao.php';
            $sql = "SELECT id, nome FROM cliente";
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "</option>";
            }
            
            ?>
            </select><br><br>

            <label>Marca:</label><br>
            <input type="text" name="marca" required><br><br>

            <label>Modelo:</label><br>
            <input type="text" name="modelo" required><br><br>

            <label>Ano:</label><br>
            <input type="number" name="ano" required><br><br>

            <label>Placa:</label><br>
            <input type="text" name="placa" required><br><br>

            <label>Chassi:</label><br>
            <input type="text" name="chassi" required><br><br>

            <button type="submit" name="cadastrar_moto">CADASTRAR MOTO</button>
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

/* Títulos */
h1 {
    color: #ff6600;
    text-align: center;
    margin-bottom: 30px;
}

/* Formulários */
form {
    background-color: #272727;
    padding: 25px 30px;
    border-radius: 10px;
    max-width: 600px;
    margin: 0 auto 30px auto;
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
input[type="email"],
select {
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
input[type="email"]:focus,
select:focus {
    border: 2px solid #ff6600;
}

/* Botões */
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

/* Separador */
hr {
    border: 1px solid #333;
    margin: 40px 0;
}
</style>

</body>
</html>