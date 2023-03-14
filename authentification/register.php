<?php
// Connexion à MySQL
require('connect_bdd.php'); 

// Hash du mot de passe
$passwordHashed = password_hash($_POST['password'], PASSWORD_BCRYPT);
$Date = date("Y-m-d H:i:s");

// verifie si les champs de texte sont vides
if(isset($_POST['firstname'], $_POST['lastname'], $_POST['email'],$_POST['password']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    
    // Traitement des données
    $query = $dbh->prepare('INSERT INTO users (firstname, lastname, email, password, created_at) VALUES (:firstname, :lastname, :email, :password, :created_at);');
    $query->execute([
    'firstname' => $_POST['firstname'],
    'lastname' => $_POST['lastname'],
    'email' => $_POST['email'],
    'password' => $passwordHashed,
    'created_at' => $Date, 
    ]);

    // Redirection
    header('location: /blog/pages/login.php');
} else {
    
// sinon renvoyer ce message et redirige a la page du blog
    header('location: /blog/pages/register.php');
    echo 'Veuillez remplir tout les champs';
}
