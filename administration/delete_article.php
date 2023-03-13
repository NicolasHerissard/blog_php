<?php 

require('../authentification/connect_bdd.php'); 

if(isset($_POST['id_articles']))
{
    $id = $_POST['id_articles'];

    $query = $dbh->query('DELETE FROM articles WHERE id_articles = :id_articles');
    $query->execute(array(
        'id_articles' => $id,
    ));
    
    header('location: admin.php');
}
else 
{
    header('location: admin.php');
}
