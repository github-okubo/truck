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
$dao->insert("personal_truck_data");


//ファイル名 = md5(req).拡張子
$path_parts = pathinfo($_FILES['img']['name']);
$basename = md5($dao->getInsertId())  . "." .$path_parts['extension'];

$uploaddir = $directory_path = "../../../data/";

//UPLOAD先パス＋ファイルネーム
$uploadfile = $uploaddir . $basename;

//画像UPLOAD処理

if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
    $dao->cls();
    $dao->setVal("img",$basename);
    $dao->setKey("req",$dao->getInsertId());
    $dao->update("personal_truck_data");
} else {
    echo "画像アップロード中にエラーが発生しました\n";
}

/*
$uploaddir = $directory_path = "../../../data/";
$uploadfile = $uploaddir . basename($_FILES['img']['name']);
print $uploadfile;
echo '<pre>';
if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";
*/

header("location:../thanks.php");
?>