<?= $_SESSION['is-connected'] = false; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accueil</title>
    <link rel="stylesheet" href="../style/blog_NonConnecter.css">

</head>
<body>
    
        <div class="en-tete">

            <header>

                <div Align="center">
                    <h1>Blog Developpement</h1>
                </div>

                    <div Align="left" class="bouton">

                        <form action="login.php">
                            <button id="btnc" type="submit">Connexion</button>
                        </form>

                        <form action="register.php">
                            <button id="btni" type="submit" >S'inscrire</button>
                        </form>

                    </div>

            </header>

        </div>

        <div class="middle">

            <div Align="left" class="container">

                <div Align="center" class="TitleA">
                    <h1>Articles Récent</h1>
                </div>

                    <ul>
                    <?php

                        require('../authentification/connect_bdd.php'); 
                        $query = $dbh->prepare("SELECT id_articles, title, content FROM php.articles ORDER BY published_at DESC");

                        $query->execute();

                        while ($row = $query->fetch()) {
                            ?>
                                <div Align="center" class="div_articles">
                                        <a href="../pages/content.php?id_articles=<?= $row['id_articles'] ?>"><?= stripslashes($row['title']) ?></a>
                                        <div class="div_content">
                                            <?= stripslashes($row['content']) ?>
                                        </div>
                                        
                                </div>
                                
                            <?php 
                        }
                    ?>
                    </ul>
                
            </div>

        </div>

            <?php require('footer.php') ?>

</body>
</html>