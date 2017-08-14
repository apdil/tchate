<?php
session_start();

$login = htmlspecialchars($_GET['login']);
$mdp = htmlspecialchars($_GET['mdp']);

$pdo = new PDO('mysql:host=localhost;dbname=tchat', 'admin', 'pomme');

$stmt = $pdo->query('SELECT * FROM `users`');
$users = $stmt->fetchAll();

foreach($users as $user){
    if($user['login'] === $login && $user['mdp'] === $mdp){
        $_SESSION['user'] = $user;
        echo 'succes';
    }
}

?>