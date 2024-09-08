<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../include/head.php'); ?>
    <title>KeyGod | Passwords</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include('include/navbar.php') ?>
            <div class="col-sm p-3 min-vh-100 container">
                <div class="container-fluid">
                    <div class="row">
                        <a class="col-2 offset-9" href="new_password.php"><button class="button-um"><i class="bi bi-save2"></i>  Enregistrer un mot de passe</button></a>
                    </div>
                    <div class="row">
                    <div class="container col-10 offset-1 box">
                        <h1>Mes mots de passe</h1><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>