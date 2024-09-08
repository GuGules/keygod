<?php

function getGroups($bdd){
    $req = "SELECT *,USERS.USERNAME AS MANAGER FROM GROUPS JOIN USERS ON GROUPS.GROUP_MANAGER = USERS.ID";
    $res = $bdd->query($req)->fetchAll();
    return $res;
}

function newGroup($bdd, $group_name){
    $req='INSERT INTO GROUPS(GROUP_NAME) VALUES ("'.$group_name.'")';
    return $bdd->exec($req);
    };
?>