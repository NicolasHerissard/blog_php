<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaire</title>
    <link rel="stylesheet" href="/blog/style/commentaire.css">
</head>
<body>

    <?php require('header.php') ?>

    <div Align="center" class="div">

        <form action="../authentification/create_content.php" method="post">
            <div class="button">
                <button class="btn_comment" type="submit">Commenter</button>
            </div>

            <div class="text_comment">
                <textarea class="area" name="content" cols="70" rows="25" placeholder="Saisissez votre texte"></textarea>
            </div>

        </form>
            
    </div>

</body>
</html>