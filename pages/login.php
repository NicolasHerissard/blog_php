<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="/blog/style/connexion.css">
</head>
<!--Page de connexion au blog-->
<body>

    <form action="register.php">
        <button id="btn_inscription" type="submit">S'inscrire</button>
    </form>
    
        <form action="blog_NonConnecter.php">
            <button id="btn_blog" type="submit">Acceder au blog</button>
        </form>
        
            <div class="connect">
                <h1 class="text-center">Connexion</h1>
                
                    <form action="../authentification/login.php" method="post">

                        <div class="mail">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email">
                        </div>

                            <div class="pass">
                                <label  for="password">Mot de passe</label>
                                <input id="password" type="password" name="password">
                            </div>

                                <div class="sub">
                                    <button id="btn-connect" type="submit">Se connecter</button>
                                </div>
                        

                    </form>
            </div>

<?php
session_start();
if (isset($_SESSION['error-connection'])) {
    echo $_SESSION['error-connection'];
}
?>


</body>
</html>
