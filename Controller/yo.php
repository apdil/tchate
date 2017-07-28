<?php
$comment = htmlspecialchars($_GET['comment']);

echo 'pomm' . $comment;
// $pdo = new PDO('mysql:host=localhost; dbname=tchat', 'admin', 'pomme');

// $stmt = $pdo->prepare('INSERT INTO `comment` (comment) VALUES (:comment)');
// $stmt->bindValue(':comment', $comment);
// $stmt->execute();
?>