<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <?php include('../include/head.php')?>
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link rel="icon" href="../logo/logo.png">
</head>
<body>
    <?php 
    include('include/libManager.php'); ?>
    <div class="container-fluid">
    <div class="row">
        <?php include('include/navbar.php')?>
        <div class="col-sm p-3 min-vh-100 container">
            <div class="row col-4 offset-8 container" id="button-box">
                <a class="col-5 offset-1" href="newGroup.php"><button class="button-um"><i class="bi bi-building-add button-icon"></i>Nouveau groupe</button></a>
            </div>
            <div class="row">
                <div class="col-4 offset-1 box container">
                    <div class="row">
                        <div class="col-10 offset-1">
                            <br>
                            <h1>Groupes</h1>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 offset-1">
                            <table class="table">
                                    <tr>
                                        <td>
                                            Nom du groupe
                                        </td>
                                    </tr>
                                    <?php 
                                    $groups = getGroups($bdd);
                                    foreach ($groups as $group){ ?>
                                        <tr>
                                            <td>
                                                <?php echo $group['GROUP_NAME']?>
                                            </td>
                                        </tr>

                                    <?php } ?>
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