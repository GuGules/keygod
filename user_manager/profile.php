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
    <link rel="icon" href="../logo/logo.png">
    <link rel="stylesheet" href="style/style.css" type="text/css">

</head>
<body>
    <div class="container-fluid">
    <div class="row">
        <?php include('include/navbar.php');
        include('include/libUserManager.php'); 
        $userData = getUserData($bdd,$_GET['profile']);
        $groups = getGroups($bdd);
        ?>
        <div class="col-sm p-3 min-vh-100 container">
            <div class="row">
                <div class="col-8 offset-2 box">
                    <h1 class="col-10 offset-1"><?php echo $userData['USERNAME']?></h1><br>
                    <?php var_dump($userData);?>
                    <div class="row">
                        <div class="col-4 offset-1">
                            <div class="row">
                                <p><b>Nom :</b> <?php echo $userData["NOM"]?></p>
                            </div><br>
                            <div class="row">
                                <p><b>Adresse Email : </b> <?php echo $userData["EMAIL_ADDRESS"]?></p>
                            </div><br>
                        </div>
                        <div class="col-4 offset-1">
                            <div class="row">
                                <p><b>Prénom : </b><?php echo $userData["PRENOM"]?></p>
                            </div><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 offset-1">
                            <h1>
                            Groupes
                            </h1>
                            <table class="table">
                                <?php foreach ($groups as $group){?>
                                    <tr>
                                        <td><input type="checkbox" <?php if (in_array($group['GROUP_NAME'],$_SESSION['groups'])){echo 'value="1"';}?>><?php echo " ". $group['GROUP_NAME']?></td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                        <?php echo var_dump($_SESSION['groups']);
                        if (in_array("admin",$_SESSION['groups'])){
                            echo True;
                        };
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html> 