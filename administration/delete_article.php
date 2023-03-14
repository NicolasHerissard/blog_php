<?php 

// Connexion Mysql
require('../authentification/connect_bdd.php'); 

// verifie si la variable existe
if(isset($_POST['id_articles']))
{
    $id = $_POST['id_articles'];

    // traitement des données 
    $query = $dbh->query('DELETE FROM articles WHERE id_articles = :id_articles');
    $query->execute(array(
        'id_articles' => $id,
    ));
    
    // redirection 
    header('location: admin.php');
}
else 
{
    header('location: admin.php');
}
