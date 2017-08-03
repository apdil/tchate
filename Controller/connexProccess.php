<?php
session_start();

$login = htmlspecialchars($_POST['login']);
$mdp = htmlspecialchars($_POST['mdp']);

$pdo = new PDO('mysql:host=localhost;dbname=tchat', 'admin', 'pomme');
$stmt = $pdo->query('SELECT * FROM `users`');
$users = $stmt->fetchAll();

foreach($users as $user){
    if($login === $user['login']){
        if($mdp === $user['mdp']){
            $_SESSION['user'] = $user;
            header('Location:../index.html');
            break;
        } else {
            header('Location:../registration.html');
        }
    } else{
        header('Location:../registration.html');
    }
}
?>