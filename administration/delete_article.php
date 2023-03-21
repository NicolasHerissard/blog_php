<?php 

// Connexion Mysql
require('../authentification/connect_bdd.php'); 

// verifie si la variable existe
if(isset($_POST['delete']))
{

    // traitement des données 
    $query = $dbh->query('DELETE FROM articles WHERE id_articles = ' . $_POST['id_articles']);
    $query->execute();
    
    // redirection 
    header('location: admin.php');
}