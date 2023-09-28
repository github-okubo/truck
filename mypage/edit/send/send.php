<?php
session_start();
$r = $_POST;
include("../../../class/_dao.class");
include("../../../class/_user.class");
$user = new user();
$dao = new DAO();

$dao->setVal("uid",$user->getUser());
$dao->setVal("capacity",$r['capacity']);
$dao->setVal("area",$r['area']);
$dao->setVal("info",$r['info']);
$dao->setVal("opendate",$r['opendate']);
$dao->setVal("txt",$r['txt']);
$dao->setKey("req",$r['req']);
$dao->update("personal_truck_data");




header("location:../thanks.php");
?>