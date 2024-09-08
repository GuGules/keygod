<?php

function new_password($bdd,$pword,$user,$entry_name,$url,$crypted_key){
    $new_pword = openssl_encrypt($pword, 'aes-256-cbc', $crypted_key);
    $req = "INSERT INTO PASSWORDS(PWORD,USER,ENTRY_NAME,WEBSITE_URL) VALUES ('".$new_pword."','".$user."','".$entry_name."','".$url."')";
    return $bdd->exec($req);
}

function getUserGroups($bdd,$user){
    $userGroups = array();
    $req = "SELECT * FROM GROUPS";
    $groups = $bdd->query($req)->fetchAll();
    foreach ($groups as $group){
        $members = unserialize($group['MEMBERS']);
        if (in_array($user,$members)){
            array_push($userGroups,$group['ID']);
        }
    }
    return $userGroups;
}


?>