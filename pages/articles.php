<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link rel="stylesheet" href="/blog/style/articles.css">
</head>
<!--Page de création d'article-->
<body>

    <?php require('header.php') ?>

    <div class="div">

        <form action="../authentification/createArticle.php" method="post">
            
            <div class="button">
                    <button class="btnPub" type="submit">Publier</button>
            </div>

            <div class="title">
                <textarea name="title" id="ti" cols="30" rows="1" placeholder="Titre"></textarea>
            </div>

            <div class="content">
                <textarea class="area" name="content" cols="55" rows="28" placeholder="Saisissez votre texte"></textarea>
            </div>

        </form>
            
    </div>

</body>
</html>