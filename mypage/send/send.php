<?php
session_start();
$r = $_POST;
include("../../class/_dao.class");
include("../../class/_user.class");

$dao = new DAO();
$dao->setVal("firstname",$r['firstname']);
$dao->setVal("lastname",$r['lastname']);
$dao->setVal("handle",$r['handle']);
$dao->setVal("zip",$r['zip']);
$dao->setVal("email",$r['email']);
$dao->setVal("pass",$r['pass']);
$dao->setVal("tel",$r['tel']);
$dao->setVal("addr",$r['addr']);
$dao->setKey("req",$_SESSION['user']['req']);
$dao->update("personal_info");



$user = new user();
if($user->login($r['email'],$r['pass']) === false){
    header("location:http://xs101199.xsrv.jp/login/?error");
} else{
    header("location:../");
}
?>