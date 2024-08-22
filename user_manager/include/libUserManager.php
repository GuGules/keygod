<?php

function getUsers($bdd){
    $req = "SELECT * FROM USERS LIMIT 10";
    $res = $bdd->query($req)->fetchAll();
    return $res;
}

function getGroups($bdd){
    $req = "SELECT * FROM GROUPS LIMIT 10";
    $res = $bdd->query($req)->fetchAll();
    return $res;
}

function getUserData($bdd,$profile){
    $req = "SELECT * FROM USERS WHERE ID = ".$profile;
    $res = $bdd->query($req)->fetch();
    return $res;
}

function createAdmin($bdd,$fname,$lname,$username,$password,$email){
    $groups = array($username,"admin");
    $groups = serialize($groups);
    $req="INSERT INTO USERS(NOM,PRENOM,USERNAME,GROUPS,PASSWORD_HASH,ADMIN_MODE,EMAIL_ADDRESS) VALUES ('".$fname."','".$lname."','".$username."','".$groups."','".$password."',1,'".$email."')";
    return $bdd->exec($req);
}

function createUser($bdd,$fname,$lname,$username,$password,$email){
    $groups = array($username);
    $groups = serialize($groups);
    $req="INSERT INTO USERS(NOM,PRENOM,USERNAME,GROUPS,PASSWORD_HASH,ADMIN_MODE,EMAIL_ADDRESS) VALUES ('".$fname."','".$lname."','".$username."','".$groups."','".$password."',0,'".$email."')";
    return $bdd->exec($req);
}

function hashPassword($password){
    return hash("sha256",$password);
}

function deleteUser($bdd,$userId){
    $req = "delete from USERS where ID = ".$userId;
    return $bdd->exec($req);
}
?>