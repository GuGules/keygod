<?php
ini_set('display_errors', 'On');
    error_reporting(E_ALL);
include('../include/head.php');
session_destroy();
header('Location:../index.php');
?>