<?php

include("../class/_mail.class");
$r = $_POST;
// print_R($_POST['namae']);
// echo "<br />";

$mail = new mail();	//newでインスタンス化
$msg = $mail->fetch('otoiawase.template',$r);		//会社用テンプレート
$remsg = $mail->fetch('re_otoiawase.template',$r);	//客用テンプレート

//会社用通知メール
$subject = "[multi-estate.net] お客様からの問い合わせ [system]";
$to="komuro@gmail.com";

//会社宛てメールアドレス
mb_send_mail($to,$subject,$msg,$mail->headers($r['email']),"-f".$r['email']);


$subject = "[multi-estate.net] お問い合わせ有難うございます";
//客用自動返信メール
mb_send_mail(
	$r['email'],							// 返信先
	$subject,								// 件名
	$remsg,									// メッセージ+添付ファイル
	$mail->headers($to),					// ヘッダ
	"-f".$to
);
header('Location: ../thanks.php');
exit(); 
?>