<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('include/head.php')?>
    <title>KeyGod</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="logo/logo.png">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 col-lg-4 col-xl-4 offset-lg-4 offset-xl-4 offset-2" id="login-box">
                <form method="POST" action="core/login.php" class="container">
                    <br>
                    <img src="logo/logo.png" class="row col-6 offset-3 "><br>
                    <div class="row">
                        <p>Nom d'utilisateur</p>
                        <input class="col-6 offset-3 log-input" placeholder="Nom d'utilisateur" name="username">
                    </div>
                    <br>
                    <div class="row">
                        <p>Mot de passe</p>
                        <input class="col-6 offset-3 log-input" placeholder="Mot de passe" type="password" name="password">
                    </div>
                    <br>
                    <button type="submit" class="button-ekil0">Se Connecter</button>
                    <br><br>
                </form>
            </div>
        </div>
    </div>        
</body>
</html>