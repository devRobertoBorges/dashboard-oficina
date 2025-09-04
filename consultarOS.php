<?php
include 'conexao.php';

// Consulta todas as OS com informações do cliente e da moto
$sql = "SELECT os.id, os.data_entrada, os.descricao, os.valor, os.status,
               c.nome AS cliente, m.modelo, m.placa
        FROM ordens_servico os
        JOIN cliente c ON os.cliente_id = c.id
        JOIN motos m ON os.moto_id = m.id";


$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar OS</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Consulta de Ordens de Serviço</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Moto</th>
            <th>Placa</th>
            <th>Data Entrada</th>
            <th>Descrição</th>
            <th>Valor</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['cliente'] ?></td>
                    <td><?= $row['modelo'] ?></td>
                    <td><?= $row['placa'] ?></td>
                    <td><?= date('d/m/Y', strtotime($row['data_entrada'])) ?></td>
                    <td><?= $row['descricao'] ?></td>
                    <td>R$ <?= number_format($row['valor'], 2, ',', '.') ?></td>
                    <td><?=$row['status']?></td>
                    <td>
                    <?php if ($row['status'] == 'Em andamento'): ?>
                        <form method="POST" action="alterarStatus.php">
                            <input type="hidden" name="os_id" value="<?= $row['id'] ?>">
                            <input type="hidden" name="novo_status" value="Finalizado">
                            <button type="submit">Finalizar</button>
                        </form>
                    </td>
        <?php else: ?>
            ✅
        <?php endif; ?>
    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="7">Nenhuma ordem de serviço cadastrada.</td>
            </tr>
        <?php endif; ?>
    </table>

    <style>
body {
    background-color: #1f1f1f;
    color: #eee;
    font-family: 'Poppins', sans-serif;
    padding: 20px;
}

/* Título */
h1 {
    color: #ff6600;
    text-align: center;
    margin-bottom: 25px;
}

/* Tabela */
table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    background-color: #272727;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(255, 102, 0, 0.2);
}

th, td {
    padding: 12px 15px;
    text-align: left;
}

th {
    background-color: #333;
    color: #ff6600;
    font-weight: 600;
}

td {
    border-top: 1px solid #3a3a3a;
    color: #eee;
}

/* Linha alternada */
tr:nth-child(even) td {
    background-color: #2a2a2a;
}

/* Hover nas linhas */
tr:hover td {
    background-color: #ff660033; /* laranja transparente */
}

/* Botões de ação */
button {
    background-color: #ff6600;
    color: #fff;
    border: none;
    padding: 8px 12px;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background-color: #e65c00;
}

/* Mensagem quando não há OS */
td[colspan="7"] {
    text-align: center;
    padding: 20px;
    color: #ccc;
}
</style>

</body>
</html>
