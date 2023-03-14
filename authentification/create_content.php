<?php 

// si les variables existent 
if(isset($_POST['content']) && !empty($_POST['content']))
{
    // traitement des caractères spéciaux
    $contenu = htmlspecialchars(addslashes($_POST['content']));
    $Date = date("Y-m-d H:i:s");

    // Connexion Mysql
    require('connect_bdd.php'); 

    // traitement des données
    $query = $dbh->prepare("INSERT INTO comments(content_comments, published_at) VALUES (:content_comments, :published_at)");
    $query->bindParam(':content_comments', $contenu);
    $query->bindParam(':published_at', $Date);
    $query->execute();

    // redirection 
    header("location: /blog/pages/blog.php");
} 
else 
{
    header('location: /blog/pages/commentaire.php');
    echo "Veuillez remplir les champs de texte";
}