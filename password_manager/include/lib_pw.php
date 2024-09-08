<?php

function new_password($bdd,$pword,$user,$entry_name,$url,$crypted_key){
    $new_pword = openssl_encrypt($pword, 'aes-256-cbc', $crypted_key);
    $req = "INSERT INTO PASSWORDS(PWORD,USER,ENTRY_NAME,WEBSITE_URL) VALUES ('".$new_pword."','".$user."','".$entry_name."','".$url."')";
    return $bdd->exec($req);
}




?>