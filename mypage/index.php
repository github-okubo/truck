<?php
include("../class/_user.class");
$user = new user();
?>

<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="フォームコンポーネントとその入力検証機能を示すカスタム精算フォーム。">
<!-- OGP -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@cccabinet">
	<meta property="og:site_name" content="Bootstrap5設置ガイド" />
	<meta property="og:title" content="精算フォームの実例～Bootstrap5設置ガイド" />
	<meta property="og:url" content="https://bootstrap-guide.com/sample/checkout" />
	<meta property="og:type" content="article" />
	<meta property="og:description" content="フォームコンポーネントとその入力検証機能を示すカスタム精算フォーム。" />
	<meta property="fb:app_id" content="2270152383309485" />
	<meta property="og:image" content="https://bootstrap-guide.com/files/example_files/3/checkout.png" />
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="960">
	<meta property="og:image:height" content="600">
	<title>配送車手配</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11/build/styles/github.min.css">
	<link rel="stylesheet" href="https://bootstrap-guide.com/css/samples.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1/font/bootstrap-icons.min.css">
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<style>
.container {  max-width: 960px;}
</style>
</head>

<body class="bg-light">
<?include("../_nav2.php")?>
<br />
  <div class="container">
    <main>
      <div class="py-5 text-center">
        <h2>マイページ</h2>
        <p class="lead">パスワードの使いまわしは、お控えください</p>
      </div>

      <div class="row g-5">

        <div>
          <h4 class="mb-3">登録住所</h4>
          <form class="needs-validation" method="POST" action="send/send.php" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstname" class="form-label">姓</label>
                <input id="firstname" type="text" name="firstname" class="form-control" value="<?=$_SESSION['user']['firstname']?>" required>
                <div class="invalid-feedback">
                  名字を入力してください
                </div>
              </div>
              <div class="col-sm-6">
                <label for="lastname" class="form-label">名</label>
                <input id="lastname" type="text" name="lastname" class="form-control" value="<?=$_SESSION['user']['lastname']?>" required>
                <div class="invalid-feedback">
                  名前を入力してください
                </div>
              </div>

              <div class="col-sm-6">
                <label for="tel" class="form-label">電話番号</label>
                <input id="tel" type="text" name="tel" class="form-control" value="<?=$_SESSION['user']['tel']?>" required>
                <div class="invalid-feedback">
                  名前を入力してください
                </div>
              </div>

              <div class="col-12">
                <label for="username" class="form-label">ユーザーネーム</label>
                <div class="input-group has-validation">
                  <span class="input-group-text">@</span>
                  <input type="text" name="handle" class="form-control" id="username" placeholder="comrin" value="<?=$_SESSION['user']['handle']?>" required>
                <div class="invalid-feedback">
                    ユーザー名が必要です
                  </div>
                </div>
              </div>

              <div class="col-12">
                <label for="pass" class="form-label">パスワード <span class="text-muted"></span></label>
                <input type="pass" name="pass" class="form-control" id="pass"  value="<?=$_SESSION['user']['pass']?>">
                <div class="invalid-feedback">
                  パスワードを入力してください
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Eメール <span class="text-muted"></span></label>
                <input type="email" name="email" class="form-control" id="email" placeholder="komuro@gmail.com" value="<?=$_SESSION['user']['email']?>">
                <div class="invalid-feedback">
                  配送の更新に有効なメールアドレスを入力してください
                </div>
              </div>

              <div class="col-sm-6">
                <label for="zip" class="form-label">郵便番号(ハイフン不要)</label>
                <input type="text" name="zip" class="form-control" id="zip" value="<?=$_SESSION['user']['zip']?>" onKeyUp="AjaxZip3.zip2addr(this, '', 'addr', 'addr');" required>
                <div class="invalid-feedback">
                  郵便番号を入力してください
                </div>
              </div>

              <div class="col-12">
                <label for="address" class="form-label">住所</label>
                <input type="text" name="addr" class="form-control p-region" id="addr" value="<?=$_SESSION['user']['addr']?>" required>
                <div class="invalid-feedback">
                  配送先住所を入力してください
                </div>
              </div>

            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">更新</button>
          </form>
        </div>
      </div>
    </main>

  </div>
  <?include("../_footer.php")?>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10/build/highlight.min.js"></script>
	<script>hljs.highlightAll();</script>


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