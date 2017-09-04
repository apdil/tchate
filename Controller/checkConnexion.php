<?php
session_start();

$login = htmlspecialchars($_POST['connectLogin']);
$mdp = htmlspecialchars($_POST['connectMdp']);

$pdo = new PDO('mysql:host=localhost;dbname=tchate', 'admin', 'pomme');

$stmt = $pdo->query('SELECT * FROM `users`');
$users = $stmt->fetchAll();

foreach($users as $user){
    if($user['login'] === $login && $user['mdp'] === $mdp){
        $_SESSION['login'] = $user;
        header('Location:../tchat.html');
        return;
    }
}
header('Location:../index.html');

?>