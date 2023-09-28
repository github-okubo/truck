<?php
$r = $_POST;
include("../../_set.php");
include("../../class/_pass.class");
include("../../class/_mail.class");
include("../../class/_validate.class");
include("../../class/_dao.class");

$validate = new validate();

//名前チェック
if (preg_match('/^[a-zA-Z0-9]+$/', $r['firstname'].$r['lastname'])) {
    header("location:../thanks_error.php");
}

//電話番号チェック
if (!$validate->isTel($r['tel']))  {
    header("location:../thanks_error.php");
}

//住所チェック
$len = mb_strlen($r['addr'], "UTF-8");
$wdt = mb_strwidth($r['addr'], "UTF-8");
if($len == $wdt) {
    // すべて半角の場合
    print "住所エラー";
    print_R($r);
    exit;
    header("location:../thanks_error.php");
}

if (!is_numeric($r['zip'])) {
    print "郵便番号エラー";
    print_R($r);
    exit;
}


$pass = new pass();
$r['pin'] = $pass->mkpass(8);
$dao = new DAO();
$dao->setVal("firstname",$r['firstname']);
$dao->setVal("lastname",$r['lastname']);
$dao->setVal("handle",$r['handle']);
$dao->setVal("zip",$r['zip']);
$dao->setVal("addr",$r['addr']);
$dao->setVal("email",$r['email']);
$dao->setVal("pass",$r['pin']);
$dao->setVal("tel",$r['tel']);
$dao->insert("personal_info");

$mail = new mail();
$msg = $mail->fetch('resend.txt',$r);
$subject ="【申し込み】パスワードのお知らせ";
$to = "noreply@yyc-c.co.jp";
mb_send_mail($r['email'],$subject,$msg,$mail->headers($to),"-f".$to);

header("location:../thanks.php");
?>
