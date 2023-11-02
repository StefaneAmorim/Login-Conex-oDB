<?php
require '../database/connection.php';

session_start();
if (isset($_SESSION['user_id'])) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]); 
    $user = $stmt->fetch();
    // Renderizar a página do usuário com os dados do usuário
}
