<?php

function getGroups($bdd){
    $req = "SELECT * FROM GROUPS LIMIT 10";
    $res = $bdd->query($req)->fetchAll();
    return $res;
}

function newGroup($bdd, $group_name){
    $req='INSERT INTO GROUPS(GROUP_NAME) VALUES ("'.$group_name.'")';
    return $bdd->exec($req);
    }
?>