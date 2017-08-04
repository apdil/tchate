<?php
$login = htmlspecialchars($_POST['login']);
$mdp = htmlspecialchars($_POST['mdp']);

$pdo = new PDO('mysql:host=localhost;dbname=tchat', 'admin', 'pomme');

$stmt = $pdo->query('SELECT * FROM `users`');
$users = $stmt->fetchAll();

foreach($users as $user){
    if($user['login'] === $login && $user['mdp'] === $mdp){
        echo 'succes';
    } else{
        echo 'login or mdp false';
    }
}


?>