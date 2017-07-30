<?php

$pdo = new PDO('mysql:host=localhost; dbname=tchat', 'admin', 'pomme');

if(!empty($_POST['message'])) { // if post put comment in mysql
    $message = htmlspecialchars($_POST['message']);

    $stmt = $pdo->prepare('INSERT INTO `comment` (comment) VALUES (:comment)'); // post les donnes
    $stmt->bindValue(':comment', $message, PDO::PARAM_STR);
    $stmt->execute();

    echo $message;
} else {
    $stmt = $pdo->query('SELECT comment FROM comment'); // get data
    $ligns = $stmt->fetchAll();
    echo(json_encode($ligns));
}
?>