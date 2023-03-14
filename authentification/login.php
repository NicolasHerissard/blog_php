<?php
// Connexion à MySQL
require('connect_bdd.php'); 

// verifie si les variables existent et si les messages sont vides
if(isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) 
{
    // traitement des données 
    $query = $dbh->prepare('SELECT id, email, password FROM users WHERE email = ?');
    $query->execute([$_POST['email']]);
    $user = $query->fetch();

    if ($user) {
        // verifie si le mot de passe est correct
        if (password_verify($_POST['password'], $user['password'])) {
            session_start();
            $_SESSION['user-id'] = $user['id'];
            $_SESSION['is-connected'] = true;

            unset($_SESSION['error-connection']);

            // redirection 
            header('location: /blog/pages/blog.php');
        } else {
            session_start();
            // message en cas de mot de passe/email incorrect
            $_SESSION['error-connection'] = "L'email ou le mot de passe est incorrect";

            // redirection 
            header('location: /blog/pages/login.php');
        }
    } else {
    session_start();
    // message en cas de mot de passe/email incorrect
    $_SESSION['error-connection'] = "L'email ou le mot de passe est incorrect";

    // redirection 
    header('location: /blog/pages/login.php');
    }
}
else 
{
    // si les variables n'existent pas et si les messages sont vides
    header('location: ../pages/login.php');
}