<?php

// verifie si les variables existent et si les messages sont vides 
if(isset($_GET['id_articles']) && !empty($_GET['id_articles']))
{
    // Connexion Mysql
    require('../authentification/connect_bdd.php'); 
    
    // traitement des données 
    $sql = 'SELECT * FROM articles WHERE id_articles =' . $_GET['id_articles'];
    $query = $dbh->prepare($sql);
    $query = $dbh->query($sql);
    $article = $query->fetch();
    if($query->rowCount() == 0) 
    {
        // redirection
        header('location: blog.php');   
    }
}
else 
{
    header('location: blog.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= stripslashes($article['title']) ?></title>
    <link rel="stylesheet" href="../style/content.css">
</head>
<!--Page d'affichage de l'article et son contenu avec les commentaires-->
<body>

    <?php require('header.php') ?>

        <div Align="center" class="content">

            <a href="blog.php">Listes des articles</a>
            <h1><?= stripslashes($article['title'])?></h1>

            <p>Article Créer le <?= stripslashes($article['published_at']) ?></p>

            <p>
                <?= stripslashes($article['content']) ?> <br>

            </p>

        </div>

        <div Align="center" class="comment">
            <div Align="left">

                <form action="commentaire.php">
                    <button id="btn_ajt" name="ajouter">Ajouter un commentaire</button> <br>
                </form>
            
            </div>

                <div class="title_comment">
                    <h1>Commentaire</h1>
                </div>

                    <?php
                        require('../authentification/afficher_content.php');
                        
                        while($row = $query->fetch()) 
                        {
                        ?>
                            <?= stripslashes($row['content_comments']) ?>
                            <p>---------------------------------------------</p>
                        <?php
                        }
                        ?>
        </div>
        
        <?php require('footer.php') ?>
        
</body>
</html>