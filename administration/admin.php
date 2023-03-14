<?php
    // Connexion Mysql
    require('../authentification/connect_bdd.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <link rel="stylesheet" href="../style/admin_panel.css">
</head>
<body>

    <?php require('header_admin.php') ?>

    <div class="div_center">
        <div Align="center">
            <h1>Articles du blog </h1>
        </div>
            <div Align="left">
                <form action="../pages/articles.php">
                    <button id="btn_post">Créer un post</button>
                </form>
            </div>
                    <ul>
                        <?php 
                            // traitement des données 
                            $query = $dbh->query('SELECT id_articles, title, content FROM articles ORDER BY published_at DESC');
                            $query->execute();

                            // quand un article est créer il est afficher 
                            while($row = $query->fetch()) {
                                ?>
                                    <div Align="center" class="div_articles">
                                        <a href="../pages/content.php?id_articles=<?= $row['id_articles'] ?>"><?= stripslashes($row['title']) ?></a>
                                        <div class="div_content">
                                            <?= $row['content'] ?>
                                        </div>
                                        <form action="delete_article.php">
                                            <a href="" class="delete-art">Supprimer</a>
                                        </form>

                                        <form action="admin_updateArticle.php">
                                            <a href="admin_updateArticle.php?id_articles=<?= $row['id_articles'] ?>" class="update-art">Modifier</a>
                                        </form>
                                        
                                    </div>
                                    
                                <?php
                            }
                            ?>
                    </ul>
    </div>

    <?php require('../pages/footer.php'); ?>

</body>
</html>