<?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    include('../include/head.php');
    if (login($bdd,$_POST['username'],$_POST['password'])){
        $_SESSION['user'] = getUser($bdd,$_POST['username']);
        header('Location: ../menu.php');
    } else {
        header('Location: ../');
    }

?>