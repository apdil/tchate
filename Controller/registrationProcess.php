<?php
    $user = $_POST['user'];

    $userObject = json_decode($user);
    
    $pdo = new PDO('mysql:host=localhost;dbname=tchat', 'admin', 'pomme');
    $stmt = $pdo->prepare('INSERT INTO `users` (login, mdp) VALUES (:login, :mdp)');
    $stmt->bindValue(':login', $userObject->login, PDO::PARAM_STR);
    $stmt->bindValue(':mdp', $userObject->mdp, PDO::PARAM_STR);
    $stmt->execute();
?>