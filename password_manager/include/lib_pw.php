<?php

function new_password($bdd,$pword,$user,$entry_name,$url,$crypted_key){
    $req = "INSERT INTO PASSWORDS(PWORD,USER,ENTRY_NAME,WEBSITE_URL) VALUES ('".$pword."','".$user."','".$entry_name."','".$url."')";
    return $crypted_key;
}



?>