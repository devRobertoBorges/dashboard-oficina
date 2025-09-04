<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODB - Gestão</title>
</head>
<body>
    <header>
        <h1>Sistema de Gestão – Oficina do Baino</h1>
        <p>“Bem-vindo(a), escolha uma das opções abaixo para começar.”</p>
        <nav> 
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="motos.php">Motos</a></li>
                <li><a href="os.php">Ordens de Serviço</a></li>
                <li><a href="relatorios.php">Relatórios</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section> 
            <h2>Atalhos rápidos: </h2>
            <ul>
                <li><a href="cadastro.php">➕ Cadastrar Cliente</a></li>
                <li><a href="os.php">➕ Abrir Nova OS</a></li>
                <li><a href="consultarOS.php">📋 Consultar Ordens de Serviço</a></li>
                <li><a href="relatorios.php">💰 Relatório de Faturamento</a></li>
            </ul>                
        </section>

        <section> 
            <h2>Resumo da oficina</h2>
            <div class="resumos">
                <article>
                    <h3>👤 Clientes Cadastrados</h3>
                    <p>120</p>
                </article>

                <article>
                    <h3>🏍️ Motos Cadastradas</h3>
                    <p>85</p>
                </article>

                <article>
                    <h3>🔧 OS em Andamento</h3>
                    <p>8</p>
                </article>

                <article>
                    <h3>✅ OS Finalizadas</h3>
                    <p>45</p>
                </article>

                <article>
                    <h3>💰 Faturamento do Mês</h3>
                    <p>R$ 32.500</p>
                </article>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2025 Oficina do Baiano - Todos os direitos reservados.</p>
        <p>Versão 1.0 MVP</p>
    </footer>
    <style>
/* Reset básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background-color: #1f1f1f; /* Fundo escuro */
    color: #eee; /* Texto claro */
    line-height: 1.6;
}

header {
    background-color: #272727;
    padding: 20px;
    text-align: center;
    border-bottom: 3px solid #ff6600; /* Detalhe marcante */
}

header h1 {
    color: #ff6600;
    margin-bottom: 5px;
}

header p {
    font-size: 0.9rem;
    color: #ccc;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 25px;
    margin-top: 10px;
}

nav ul li a {
    text-decoration: none;
    color: #eee;
    font-weight: 500;
    padding: 8px 12px;
    border-radius: 5px;
    transition: 0.3s;
}

nav ul li a:hover {
    background-color: #ff6600;
    color: #fff;
}

main {
    padding: 20px;
}

section {
    margin-bottom: 30px;
}

section h2 {
    color: #ff6600;
    margin-bottom: 15px;
}

ul li a {
    display: inline-block;
    text-decoration: none;
    background-color: #333;
    color: #fff;
    padding: 10px 15px;
    margin: 5px 0;
    border-radius: 8px;
    transition: 0.3s;
}

ul li a:hover {
    background-color: #ff6600;
    color: #fff;
}

.resumos {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 20px;
}

.resumos article {
    background-color: #272727;
    padding: 20px;
    border-left: 5px solid #ff6600;
    border-radius: 10px;
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
}

.resumos article:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(255, 102, 0, 0.4);
}

.resumos article h3 {
    margin-bottom: 10px;
    font-size: 1.1rem;
}

.resumos article p {
    font-size: 1.5rem;
    font-weight: bold;
}

footer {
    background-color: #272727;
    text-align: center;
    padding: 15px;
    border-top: 3px solid #ff6600;
    font-size: 0.85rem;
    color: #ccc;
}
</style>

</body>
</html>