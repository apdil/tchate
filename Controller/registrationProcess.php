<?php
$login = htmlspecialchars($_POST['creatLogin']);
$mdp = htmlspecialchars($_POST['creatMdp']);

$pdo = new PDO('mysql:host=localhost; dbname=tchat', 'admin', 'pomme');
$stmt = $pdo->prepare('INSERT INTO `users` (login, mdp) VALUES (:login, :mdp)');
$stmt->bindValue(':login', $login, PDO::PARAM_STR);
$stmt->bindValue(':mdp', $mdp, PDO::PARAM_STR);
$stmt->execute();

header('Location: ../index.html');
?>