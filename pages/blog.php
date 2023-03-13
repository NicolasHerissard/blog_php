<?php 
session_start(); 
if(!$_SESSION['is-connected'] = true) 
{
    header('location: blog_NonConnecter.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil</title>
    <link rel="stylesheet" href="../style/blog.css">

</head>
<body>
    
        <?php require('header.php') ?>        

        <div class="middle">
        
            <div class="container">

                <div Align="center" class="titleA">
                    <h1>Articles Récent</h1>
                </div>

                <form action="articles.php">
                    <button class="btnP" type="submit">Nouveau Post</button>
                </form>

                <ul>
                    <?php

                    require('../authentification/afficher_Article.php');

                    while ($row = $query->fetch()) {
                        ?>
                            <div Align="center" class="div_article">

                                    <a href="../pages/content.php?id_articles=<?= $row['id_articles'] ?>"><?= stripslashes($row['title']) ?></a>
                                    <div class="div_content">
                                        <?= $row['content'] ?>
                                    </div>
                                    <p>-----------------------</p>
                                        
                            </div>
                        
                        <?php 
                    }
                    ?>
                </ul>

                </div>
                
            </div>

        </div>

        <?php require('footer.php') ?>

</body>
</html>