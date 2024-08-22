<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvel Utilisateur | KeyGod</title>
    <?php include('../include/head.php')?>
    <link rel="icon" href="logo/logo.png">
    <link rel="stylesheet" href="style/style.css" type="text/css">

</head>
<body>
    <?php
    if (!(isset($_SESSION))){
        header('Location : ../index.php');
    }
    include('include/libUserManager.php');
    if (isset($_POST['submit'])){
        if($_POST['password']==$_POST['c_password']){
            $password = hashPassword($_POST['password']);
            if (isset($_POST['admin_mode'])){
                createAdmin($bdd,$_POST['f_name'],$_POST['l_name'],$_POST['username'],$password,$_POST['email_address']);
            } else {
                createUser($bdd,$_POST['f_name'],$_POST['l_name'],$_POST['username'],$password,$_POST['email_address']);
            }
            
        }
    }
    ?>
    <div class="container-fluid">
    <div class="row">
        <?php include('include/navbar.php')?>
        <div class="col-sm p-3 min-vh-100 container">
            <div class="row">
                <div class="col-8 offset-2 box">
                <?php if (isset($_POST['submit'])){
                        echo isset($_POST['admin_mode']);
                }?>
                    <h1 class="col-10 offset-1">Enregistrer un nouvel utilisateur</h1>
                    <form action=" " method="POST" class="container form">
                        <!-- Collecte des informations à titre personnel --> 
                        <div class="row">
                            <h5 class="col-3">Nom :</h5>
                            <input class="col-2 form-input" type="text" name="f_name" required>
                            <h5 class="col-3 offset-1">Prénom :</h5>
                            <input class="col-2 form-input" type="text" name="l_name" required>
                        </div><br>
                        <div class="row">
                            <h5 class="col-3">Nom d'utilisateur :</h5>
                            <input class="col-2 form-input" type="text" name="username" required>
                            <h5 class="col-3 offset-1">Adresse Mail :</h5>
                            <input class="col-2 form-input" type="text" name="email_address" required>
                        </div><br>
                        <div class="row">
                            <h5 class="col-3">Mot de passe : </h5>
                            <input class="col-2 form-input" type="password" name="password" required>
                            <h5 class="col-3 offset-1">Confirmer le mot de passe :</h5>
                            <input class="col-2 form-input" type="password" name="c_password" required>
                        </div><br>
                        <div class="row">
                            <h5 class="col-3">Mode Administrateur : </h5>
                            <input class="col-3" type="checkbox" name="admin_mode">
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