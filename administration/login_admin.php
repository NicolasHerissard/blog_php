<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/admin_style.css">
    <title>Login Admin</title>
</head>
<!--Page de connexion au panneau d'administration-->
<body>
    <form action="../administration/admin.php">

        <div class="login-box">

            <h1>Connexion Administrateur</h1>
 
                <form action="../administration/admin_connect.php">

                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="Username"
                                name="username" value="">
                    </div>
        
                    <div class="textbox">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" placeholder="Password"
                                name="password" value="">
                    </div>
        
                    <input class="button" type="submit"
                            name="login" value="Se connecter">

                </form>
        </div>

    </form>
    
</body>
 
</html>