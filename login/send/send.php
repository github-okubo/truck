<?php
$r = $_POST;
include("../../class/_user.class");
$user = new user();
if($user->login($r['email'],$r['pass']) === false){
    header("location:../?error");
} else{
    header("location:../../list.php");
}

?>