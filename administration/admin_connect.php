<?php

// verifie si la variable existe et si le message est vide 
if(isset($_POST['username'], $_POST['password']) && !empty($_POST['username'], $_POST['password'])) {

    session_start(); 
    $_SESSION['admin-connected'] = true;

    // traitement des caractères speciaux
    $username = htmlspecialchars(addslashes($_POST['username']));
    $password = htmlspecialchars(addslashes($_POST['password']));*
    // date 
    $Date = date("Y-m-d H:i:s");

    // Connexion Mysql
    require('../authentification/connect_bdd.php'); 

    // traitement des données 
    $query = $dbh->prepare('INSERT INTO user(username, password) VALUES (:username, :password)');
    $query->bindParam(':username', $username);
    $query->bindParam(':password', $password);
    $query->execute();

    // redirection
    header('location: ../administration/admin.php'); 
}
else {
    // sinon redirection 
    header('Location: ../administration/login_admin.php');
    echo 'Veuillez remplir les champs'; 
}