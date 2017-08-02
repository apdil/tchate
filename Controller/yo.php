<?php

$pdo = new PDO('mysql:host=localhost; dbname=tchat', 'admin', 'pomme');

if(!empty($_POST['message'])) { // if POST put comment in mysql
    $message = json_decode($_POST['message']);
    
    $stmt = $pdo->prepare('INSERT INTO comments (comment, `date`, user) VALUES 
    (:comment,:date, :user)'); // post les donnes
    
    $stmt->bindValue(':comment', $message->comment, PDO::PARAM_STR);
    $stmt->bindValue(':date', $message->date, PDO::PARAM_STR);
    $stmt->bindValue(':user', $message->userId, PDO::PARAM_INT);
    $stmt->execute();

    echo json_encode($message);
} else {
    $stmt = $pdo->query('SELECT comment, user FROM comments'); // get data
    $ligns = $stmt->fetchAll();
    echo(json_encode($ligns));
}
?>