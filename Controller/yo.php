<?php
$message = htmlspecialchars($_GET['message']);

$pdo = new PDO('mysql:host=localhost; dbname=tchat', 'admin', 'pomme');

$stmt = $pdo->prepare('INSERT INTO `comment` (comment) VALUES (:comment)');
$stmt->bindValue(':comment', $message);
$stmt->execute();
?>