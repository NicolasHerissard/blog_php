<?php 

// Connexion Mysql
require('../authentification/connect_bdd.php');

// verifie si la variable existe
if(isset($_POST['title'], $_POST['content']) && empty($_POST['title']) && empty($_POST['content']))
{
    // traitement des caractères speciaux
    $titre = htmlspecialchars(addslashes($_POST['title']));
    $contenu = htmlspecialchars(addslashes($_POST['content']));
    $id = htmlspecialchars(addslashes($_POST['id_articles']));

    // traitement des données 
    $query = $dbh->query('UPDATE articles SET title= :titre, content= :content WHERE id_articles = :id');
    $query->execute([
        $titre,
        $contenu,
        $id,
    ]);

    // redirection 
    header('location: admin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/admin_panel.css">
    <title>Administration</title>
</head>
<body>

    <?php require('header_admin.php') ?>

    <form action="admin.php">   
        <button id="btn-return" type="submit">Retour page admin</button>
    </form>

    <div Align="center" class="div-text">

        <?php 
            // traitement des données 
            $requete = $dbh->query('SELECT title, content FROM articles');
            $requete->execute();
            $row = $requete->fetch();
        ?>

        <form method="post">

            <div class="div-title">
                <textarea name="title" id="txt-title" cols="30" rows="2"></textarea>
            </div>

            <div class="div-content">
                <textarea name="content" id="txt-content" cols="60" rows="30"></textarea>
            </div>

            <button id="btn-update_content">Modifier</button>

        </form>
        
    </div>
        
    <?php require('../pages/footer.php') ?>

</body>
</html>