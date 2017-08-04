<?php

$pdo = new PDO('mysql:host=localhost; dbname=tchat', 'admin', 'pomme');

$stmt = $pdo->query('SELECT * FROM comments');
$messages = $stmt->fetchAll();

echo json_encode($messages);

?>