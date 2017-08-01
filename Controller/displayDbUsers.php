<?php

    $pdo = new PDO('mysql:host=localhost;dbname=tchat', 'admin', 'pomme');
    $stmt = $pdo->query('SELECT * FROM `users`');
    $ligns = $stmt->fetchAll();
    echo(json_encode($ligns));

?>