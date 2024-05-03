<?php
// Variáveis de conexão com o banco de dados
$dbhostname = "localhost"; // Nome do servidor do banco de dados
$dbusername = "root"; // Nome de usuário do banco de dados
$dbpassword = "123456"; // Senha do banco de dados
$dbdatabase = "cadastr"; // Nome do banco de dados

// Conexão com o banco de dados
$conexao = new mysqli($hostname, $username, $password, $database);

// Verifica a conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida";
}

// Fechar a conexão
$conn->close();
?>