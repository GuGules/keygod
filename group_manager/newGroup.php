<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

//Traitement des données
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <?php include('../include/head.php')?>
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link rel='icon' href="../logo/logo.png">
</head>
<body>
    <?php 
    include('include/libManager.php'); ?>
    <div class="container-fluid">
    <div class="row">
        <?php include('include/navbar.php')?>
        <div class="col-sm p-3 min-vh-100 container">
            <div class="row">
                <div class="col-8 offset-2 box">
                <?php if (isset($_POST['submit'])){
                    $action = newGroup($bdd,$_POST['group_name']);
                    if ($action){
                        header('Location: index.php?success');
                    }else{
                        header('Location: index.php?fail');
                    }
                }?>
                    <h1 class="col-10 offset-1">Enregistrer un nouveau groupe</h1>
                    <form action="" method="POST" class="container form">
                        <!-- Collecte des informations à titre personnel --> 
                        <div class="row">
                            <h5 class="col-3">Nom :</h5>
                            <input class="col-2" type="text" name="group_name" >
                        </div><br>
                        <div class="row">
                            <div class="col-3 offset-1"><button class="button-um" name="submit"><i class="bi bi-plus-square button-icon"></i>Enregistrer</button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>