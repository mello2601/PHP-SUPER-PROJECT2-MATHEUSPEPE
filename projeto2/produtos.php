<?php
session_start();

$tema = $_SESSION['tema'] ?? 'claro';

if ($tema === 'escuro'){
    echo "<body style='background-color: #222; color: #eee'>";
}else{
    echo "<body style='background-color: #fff; color: #000'>";
}

if (!isset($_SESSION['usuario'])){
    echo"Acesso negado. <a href = 'index.php'>Faça login</a>";
    exit;
}

$produtos = ['camisa', 'calça', 'sapato', 'boné', 'meia', 'guaraná jesus'];
$filtro = $_GET['busca'] ?? '';

echo "<h2>Olá, " . $_SESSION['usuario'] . "!</h2>";

echo "<form method = 'GET'>
        Buscar produto: <input type = 'text' name = 'busca' value = '$filtro'>
        <input type = 'submit' value = 'Pesquisar'>
    </form>";

echo "<ul>";

foreach ($produtos as $p) {
    if ($filtro === '' || str_contains(strtolower($p), strtolower($filtro))) {
        echo "<li>$p</li>";
    }
}

echo "</ul>";

echo "<a href = 'index.php'>Sair</a>";

echo"<p>Método usado: " . $_SERVER['REQUEST_METHOD'] . "</p>";

?>