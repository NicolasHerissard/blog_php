<?php
// Connexion à MySQL
require('connect_bdd.php'); 

if(isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) 
{
    $query = $dbh->prepare('SELECT id, email, password FROM users WHERE email = ?');
    $query->execute([$_POST['email']]);

    $user = $query->fetch();

    if ($user) {
        if (password_verify($_POST['password'], $user['password'])) {
            session_start();
            $_SESSION['user-id'] = $user['id'];
            $_SESSION['is-connected'] = true;

            unset($_SESSION['error-connection']);

            header('location: /blog/pages/blog.php');
        } else {
            session_start();
            $_SESSION['error-connection'] = "L'email ou le mot de passe est incorrect";

            header('location: /blog/pages/login.php');
        }
    } else {
    session_start();
    $_SESSION['error-connection'] = "L'email ou le mot de passe est incorrect";

    header('location: /blog/pages/login.php');
    }
}
else 
{
    header('location: ../pages/login.php');
}