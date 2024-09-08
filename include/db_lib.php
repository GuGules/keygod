<?php 

function seConnecter()
{
   $serveur = 'mysql:host=localhost;port=3306';
   $bdd = 'dbname=KG_DB';
   $user = 'kg';
   $mdp = 'P@ssw0rd';
   try {
      $pdo = new PDO($serveur . ';' . $bdd . ';charset=UTF8', $user, $mdp);
   } catch (PDOException $e) {
      echo ('Erreur : ' . $e->getMessage());
   }
   return $pdo;
};

/* Librairie de fonction de gestion des utilisateurs */

function login($bdd,$username,$passwd){
    $req = "select * from USERS where USERNAME='".$username."'";
    $connect_token = $bdd->query($req)->fetch();
    if (hash('sha256',$passwd)==$connect_token['PASSWORD_HASH']){
        return true;
    } else {
        return false;
    }
}

function getUser($bdd,$username){
    $req = "select * from USERS where USERNAME = '".$username."'";
    $res = $bdd ->query($req)->fetch();
    $_SESSION['user_id']= $res['ID'];
    $_SESSION['nom'] = $res['NOM'];
    $_SESSION['prenom'] = $res['PRENOM'];
    $_SESSION['username'] = $res['USERNAME'];
    $_SESSION['admin_mode'] = $res['ADMIN_MODE'];
}

