<?php
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

    <header>
        <div>
            <h1>Panneau administration</h1>

            <select name="users" id="menu_users">
                <option value="none">Aucun</option>

            <?php 
                
                $query = $dbh->query('SELECT firstname FROM users');
                $query->execute();

                while ($user = $query->fetch()) {
                    ?>
                        <option value=""><?= $user['firstname'] ?></option>
                    <?php
                }

                ?>
            </select>

            <select name="menu deroulant" id="menu">
                <option value="none">Aucun</option>
                <option value="users">Utilisateur</option>
                <option value="admin">Administrateur</option>
                <option value="Author">Auteur</option>
            </select>

            <div>
                <button type="submit" id="btn_valide">Valider</button>
            </div>
        </div>
    </header>

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

                            $query = $dbh->query('SELECT id_articles, title, content FROM articles ORDER BY published_at DESC');
                            $query->execute();

                            while($row = $query->fetch()) {
                                ?>
                                    <div Align="center" class="div_articles">
                                        <a href="../pages/content.php?id_articles=<?= $row['id_articles'] ?>"><?= stripslashes($row['title']) ?></a>
                                        <div class="div_content">
                                            <?= $row['content'] ?>
                                        </div>
                                        
                                    </div>
                                    
                                <?php
                            }
                            ?>
                    </ul>
    </div>

    <?php require('../pages/footer.php'); ?>

</body>
</html>