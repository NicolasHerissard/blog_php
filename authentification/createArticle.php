<?php 

if(isset($_POST['title'], $_POST['content']) && !empty($_POST['title']) && !empty($_POST['content']))
{
    $titre = htmlspecialchars(addslashes($_POST['title']));
    $contenu = htmlspecialchars(addslashes($_POST['content']));
    $Date = date("Y-m-d H:i:s");

    require('connect_bdd.php'); 
    $query = $dbh->prepare("INSERT INTO articles(title, content, published_at) VALUES (:title, :content, :published_at)");
    $query->bindParam(':title', $titre);
    $query->bindParam(':content', $contenu);
    $query->bindParam(':published_at', $Date);

    $query->execute();

    header("location: /blog/pages/blog.php");
} 
else 
{
    header('location: /blog/pages/articles.php');
    echo "Veuillez remplir les champs de texte";
}