<?php
$comment = htmlspecialchars($_POST['comment']);

$pdo = new PDO('mysql:host=localhost; dbname=tchat', 'admin', 'pomme');

$stmt = $pdo->prepare('INSERT INTO `comment` (comment) VALUES (:comment)');
$stmt->bindValue(':comment', $comment);
$stmt->execute();
?>