<?php 

require('../authentification/connect_bdd.php');

if(isset($_POST['id_articles'], $_POST['id_articles']))
{
    $titre = htmlspecialchars(addslashes($_POST['title']));
    $contenu = htmlspecialchars(addslashes($_POST['content']));
    $id = htmlspecialchars(addslashes($_POST['id_articles']));

    $query = $dbh->query('UPDATE articles SET title= :titre, content= :content WHERE id_articles = :id');
    $query->execute(array(
        ':titre' => $titre,
        ':content' => $contenu,
        ':id' => $id,
    ));

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

    <div Align="center" class="div-text">

        <?php 
            $requete = $dbh->query('SELECT title, content FROM articles');
            $requete->execute();
            $row = $requete->fetch();
        ?>

        <form action="admin.php">

            <div class="div-title">
                <textarea name="title" id="txt-title" cols="30" rows="2"><?= $row['title']?></textarea>
            </div>

            <div class="div-content">
                <textarea name="content" id="txt-content" cols="60" rows="30"><?= $row['content'] ?></textarea>
            </div>

            <button id="btn-update_content">Modifier</button>

        </form>
        
    </div>
        
    <?php require('../pages/footer.php') ?>

</body>
</html>