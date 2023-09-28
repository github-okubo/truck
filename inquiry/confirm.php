<?php
$r=$_REQUEST;
?>



<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>確認画面</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11/build/styles/github.min.css">
	<link rel="stylesheet" href="https://bootstrap-guide.com/css/samples.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/confirm.css">
  
<style>
.container {  max-width: 960px;}
</style>
</head>

<body class="bg-light">
<?include("../_nav.php")?>
<br />
  <div class="container">
    <main>
      <div class="py-5 text-center">
        <h2>確認画面</h2>

      </div>
      <h3>以下の内容でよろしいでしょうか？</h3>

<form method="POST" action="send/send.php">
    <input id="prevPage" type="hidden" name="prevPage" value="otoiawase.php" />
    <input type="hidden" name="info" value="<?=@$r['info']?>" />
    <input type="hidden" name="email" value="<?=@$r['email']?>" />
    <input type="hidden" name="txt" value="<?=@$r['txt']?>" />
    <div id="mailform" style="margin:auto;">
      <dl>
          <dt>お問合せ表題 </dt><dd><?=@$r['info'] ?></dd>
          <dt>返信用 E-mail </dt><dd><?=@$r['email'] ?></dd>
          <dt>お問い合わせ内容 </dt><dd><?=@$r['txt'] ?></dd>
    </dl>
    </div>
    <div class="btn btn-group" role="group">
      <button id="rtnBtn" class="w-50 btn btn-primary btn-lg" type="button">戻る</button>   
      <button id="subBtn" class="w-50 btn btn-primary btn-lg" type="submit">送信</button>
    </div>
</form>
<?include("../_footer.php")?>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10/build/highlight.min.js"></script>
	<script>hljs.highlightAll();</script>
	  <!-- JSの設定ファイル -->

	<script>

(() => {
  'use strict';

  const forms = document.querySelectorAll('.needs-validation');

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false)
  })
})()

	</script>
	<script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="js/confirm.js"></script>
</body>

</html>