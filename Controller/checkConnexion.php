<?php
$login = htmlspecialchars($_POST['connectLogin']);
$mdp = htmlspecialchars($_POST['connectMdp']);

include_once 'checkUsers.php'; // get $users to DB

foreach($users as $user){
    if($user['login'] === $login){
        if($user['mdp'] === $mdp){
            header('Location:../tchat.html');
        } else {
            header('Location:../index.html');
        }
    } else{
        header('Location:../index.html');
    }
}


?>