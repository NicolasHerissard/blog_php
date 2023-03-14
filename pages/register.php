<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="/blog/style/inscription.css">
</head>
<!--Page d'inscription au blog-->
<body>

    <div class="inscrit">
        <h1 class="text-center">Inscription</h1>

            <form action="../authentification/register.php" method="post">

                <div class="content first">
                    <label for="firstname">Prénom</label>
                    <input id="firstname" type="text" name="firstname">
                </div>
                <div class="content last">
                    <label for="lastname">Nom</label>
                    <input id="lastname" type="text" name="lastname">
                </div>
                <div class="content mail">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email">
                </div>
                <div class="content pass">
                    <label for="password">Mot de passe</label>
                    <input id="password" type="password" name="password">
                </div>
                <div class="content button">
                    <button id="b" type="submit">S'inscrire</button>
                </div>
                
                <a href="login.php">Je possède déjà un compte</a>

            </form>
    </div>

</body>
</html>

