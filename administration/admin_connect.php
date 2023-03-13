<?php

if(isset($_POST['username'], $_POST['password']) && !empty($_POST['username'], $_POST['password'])) {

    session_start(); 
    $_SESSION['admin-connected'] = true;

    $username = htmlspecialchars(addslashes($_POST['username']));
    $password = htmlspecialchars(addslashes($_POST['password']));
    $Date = date("Y-m-d H:i:s");

    require('../authentification/connect_bdd.php'); 
    $query = $dbh->prepare('INSERT INTO admin(username, password) VALUES (:username, :password)');
    $query->bindParam(':username', $username);
    $query->bindParam(':password', $password);
    $query->execute();

    header('location: ../administration/admin.php'); 
}
else {
    header('Location: ../administration/login_admin.php');
    echo 'Veuillez remplir les champs'; 
}