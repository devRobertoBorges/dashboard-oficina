🏍️ Sistema de Gestão – Oficina de Motos






Descrição

Sistema web desenvolvido em PHP e MySQL para gerenciar os serviços de uma oficina de motos.

Funcionalidades do MVP:

Cadastro de clientes e motos.

Abertura e acompanhamento de ordens de serviço (OS).

Consulta de OS com status.

Relatório de faturamento mensal ou semanal.

🗂 Estrutura do Projeto
/site-oficina
│
├─ index.php               → Página inicial com atalhos
├─ clientes.php            → Cadastro/listagem de clientes
├─ motos.php               → Cadastro/listagem de motos
├─ os.php                  → Abrir nova OS
├─ consultarOS.php         → Listagem/consulta de OS
├─ relatorios.php          → Relatórios de faturamento
├─ processarCadastro.php   → Processa cadastro de clientes e motos
├─ processarOS.php         → Processa abertura de OS
├─ alterarStatus.php       → Atualiza status da OS
├─ conexao.php             → Conexão com o banco de dados
├─ funcoes.php             → Funções reutilizáveis (buscar clientes, motos)
└─ README.md               → Documentação

💾 Banco de Dados
Cliente
CREATE TABLE cliente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20),
    email VARCHAR(100)
);

Motos
CREATE TABLE motos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    marca VARCHAR(50),
    modelo VARCHAR(50),
    ano INT,
    placa VARCHAR(20),
    chassi VARCHAR(50),
    FOREIGN KEY (cliente_id) REFERENCES cliente(id) ON DELETE CASCADE
);

Ordem de Serviço (OS)
CREATE TABLE ordem_servico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    moto_id INT NOT NULL,
    data_entrada DATE NOT NULL,
    descricao TEXT NOT NULL,
    valor DECIMAL(10,2) NOT NULL,
    status ENUM('Em andamento','Finalizado') DEFAULT 'Em andamento',
    FOREIGN KEY (cliente_id) REFERENCES cliente(id) ON DELETE CASCADE,
    FOREIGN KEY (moto_id) REFERENCES motos(id) ON DELETE CASCADE
);

⚙️ Tecnologias

PHP 7+

MySQL

HTML5 / CSS3

XAMPP (ou outro servidor local)
