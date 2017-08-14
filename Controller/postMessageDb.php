<?php
session_start();

$message = htmlspecialchars($_GET['message']);
$date = htmlspecialchars($_GET['date']);
// echo $_SESSION['login'];
$login = 2;

$pdo = new PDO('mysql:host=localhost; dbname=tchat', 'admin', 'pomme');
$stmt = $pdo->prepare('INSERT INTO `comments` (comment, `date`, user) VALUES (:comment, :`date`, :user)');
$stmt->bindValue(':comment', $message, PDO::PARAM_STR);
$stmt->bindValue(':`date`', $date, PDO::PARAM_STR);
$stmt->bindValue(':user', $login, PDO::PARAM_STR);
$stmt->execute();


?>