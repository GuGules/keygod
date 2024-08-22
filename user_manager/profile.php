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
    <div class="container-fluid">
    <div class="row">
        <?php include('include/navbar.php');
        include('include/libUserManager.php'); 
        $userData = getUserData($bdd,$_GET['profile']);
        ?>
        <div class="col-sm p-3 min-vh-100 container">
            <div class="row">
                <div class="col-8 offset-2 box">
                <?php if (isset($_POST['submit'])){
                        echo isset($_POST['admin_mode']);
                }?>
                    <h1 class="col-10 offset-1"><?php echo $userData['USERNAME']?></h1>
                    
                        <br>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html> 