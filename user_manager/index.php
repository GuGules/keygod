<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs | KeyGod</title>
    <?php include('../include/head.php')?>
    <link rel="icon" href="logo/logo.png">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link rel="icon" href="logo/logo.png">

</head>
<body>
    <?php 
    include('include/libUserManager.php'); ?>
    <div class="container-fluid">
    <div class="row">
        <?php include('include/navbar.php')?>
        <div class="col-sm p-3 min-vh-100 container">
            <div class="row col-4 offset-9 container" id="button-box">
                <a class="col-5 offset-1" href="newUser.php"><button class="button-um button-text"><i class="bi bi-person-plus-fill button-icon"></i>Nouvel utilisateur</button></a>
            </div>
            <div class="row">
                <div class="col-10 offset-1 box container">
                    <div class="row">
                        <div class="col-10 offset-1">
                            <br>
                            <h1>Utilisateurs</h1>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 offset-1">
                            <table class="table">
                                <tr>
                                    <tr>
                                        <td>
                                            Nom d'utilisateur
                                        </td>
                                        <td>
                                            Type de compte
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                    <?php           
                                        $users = getUsers($bdd);
                                        foreach ($users as $user){ ?>
                                        <tr>
                                            <td><?php echo $user['USERNAME']?></td>
                                            <td><?php if ($user['ADMIN_MODE']){
                                                echo "Administrateur";
                                            } else {
                                                echo "Utilisateur Standard";
                                            }
                                            ?></td>
                                            <td>
                                                <a href="profile.php?profile=<?php echo $user['ID'];?>">Voir informations</a>
                                            </td>
                                        </tr>


                                    <?php } ?>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>