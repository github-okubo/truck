<?php
$r = $_REQUEST;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>お問合せ</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11/build/styles/github.min.css">
	<link rel="stylesheet" href="https://bootstrap-guide.com/css/samples.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1/font/bootstrap-icons.min.css">
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
        <h2>お問合せ</h2>

      </div>

      <div class="row g-5">
        <div>
          <form class="needs-validation" method="POST" action="confirm.php" enctype="multipart/form-data" novalidate>
            <div class="row g-3">


              <div class="col-12">
                <label for="info" class="form-label">お問合せ表題 <span class="text-muted"></span></label>
                <input type="text" name="info" class="form-control" id="info" placeholder="新規アカウント、支払いについて" value="<?=@$r['info']?>">
                <div class="invalid-feedback">
                お問合せ表題について入力してください
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">返信用 E-mail <span class="text-muted"></span></label>
                <input type="text" name="email" class="form-control" id="info" placeholder="tarou@truck.yyc-c.co.jp" value="<?=@$r['email']?>">
                <div class="invalid-feedback">
                正しいメールアドレスを入力してください
                </div>
              </div>

              <div class="col-12">
                <label for="txt" class="form-label">お問い合わせ内容<span class="text-muted"></span></label>
                <textarea type="text" name="txt" class="form-control" id="txt" rows="10" placeholder="クレジットカード以外の決済は可能ですか？" ><?=@$r['txt'] ?></textarea>
                <div class="invalid-feedback">
                  お問い合わせ内容を入力してください
                </div>
              </div>


            </div>
            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">送　信</button>
          </form>
        </div>
      </div>
    </main>

  </div>
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

</body>

</html>