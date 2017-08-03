<?php
$pdo = new PDO('mysql:host=localhost;dbname=tchat', 'admin', 'pomme');

$stmt = $pdo->query('SELECT * FROM `users`');
$users = $stmt->fetchAll();

echo json_encode($users);

?>