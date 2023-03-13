<?php 

if(isset($_POST['content']) && !empty($_POST['content']))
{
    $contenu = htmlspecialchars(addslashes($_POST['content']));
    $Date = date("Y-m-d H:i:s");

    require('connect_bdd.php'); 
    $query = $dbh->prepare("INSERT INTO comments(content_comments, published_at) VALUES (:content_comments, :published_at)");
    $query->bindParam(':content_comments', $contenu);
    $query->bindParam(':published_at', $Date);

    $query->execute();

    header("location: /blog/pages/blog.php");
} 
else 
{
    header('location: /blog/pages/commentaire.php');
    echo "Veuillez remplir les champs de texte";
}