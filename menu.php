<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | Keygod</title>
    <?php include('include/head.php') ?>
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link rel="icon" href="logo/logo.png">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include('include/navbar.php') ?>
            <div class="col-sm p-3 min-vh-100 container">
                <div class="col-4 offset-1 box container-fluid"><br>
                    <h1 class="row col-10 offset-1">Informations Personnelles</h1><br>
                    <div class="row col-10 offset-1">
                        <table class="table">
                            <tr>
                                <td>
                                    Nom
                                </td>
                                <td>
                                    <?php echo $_SESSION['nom'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Prénom
                                </td>
                                <td>
                                    <?php echo $_SESSION['prenom'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Type d'utilisateur
                                </td>
                                <td>
                                    <?php if ($_SESSION['admin_mode']) {
                                        echo "Administrateur";
                                    } else {
                                        echo "Utilisateur standard";
                                    } ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>

</body>

</html>