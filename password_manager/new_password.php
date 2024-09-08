<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
include('include/lib_pw.php');

if (isset($_POST['submit'])){
    //new_password()
}




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
                    <form class="container col-10 offset-1 box" method="POST" action="">
                        <h1>Enregistrer un nouveau mot de passe</h1><br>
                        <div class="row">
                                <label for="entry_name" class="col-2">Nom de l'entrée : </label>
                                <input name="entry_name" class="col-3">
                        </div><br>
                        <div class="row">
                                <label for="password" class="col-2">Mot de passe : </label>
                                <input name="password" class="col-3">
                        </div><br>
                        <div class="row">
                                <label for="url" class="col-2">URL vers le site web : </label>
                                <input name="url" class="col-3">
                        </div><br>
                        <button class="button-um" name="submit">Enregistrer la nouvelle entrée</button>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>