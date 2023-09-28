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
<?include("_nav.php")?>
<br />
  <div class="container">
    <main>
      <div class="py-5 text-center">
        <h2>配車登録</h2>
        <p class="lead">配車が可能な日時、場所などを記入してください</p>
      </div>

      <div class="row g-5">

        <div>
          <h4 class="mb-3">配送情報</h4>
          <form class="needs-validation" action="thanks.php" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="familyName" class="form-label">日時</label>
                <input type="datetime-local" class="form-control" id="date" placeholder="" value="" required>
                <div class="invalid-feedback">
                  日時を入力してください
                </div>
              </div>
              
              <div class="col-sm-6">
                <label for="givenName" class="form-label">始発地</label>
                <input type="text" class="form-control" id="givenName" placeholder="朝倉市" value="" required>
                <div class="invalid-feedback">
                  始発地を入力してください
                </div>
              </div>


              <div class="row g-3">
              <div class="col-sm-6">
                <label for="familyName" class="form-label">日時</label>
                <input type="datetime-local" class="form-control" id="date" placeholder="" value="" required>
                <div class="invalid-feedback">
                  到着時を入力してください
                </div>
              </div>

              <div class="col-sm-6">
                <label for="givenName" class="form-label">到着地</label>
                <input type="text" class="form-control" id="givenName" placeholder="朝倉市" value="" required>
                <div class="invalid-feedback">
                  到着地を入力してください
                </div>
              </div>




              <div class="col-sm-6">
                <label for="zip" class="form-label">配送費</label>
                <div>40000円</div>
                <div class="invalid-feedback">
                  郵便番号を入力してください
                </div>
              </div>

              <div class="col-12">
                <label for="address" class="form-label">配送可能先</label>
                <input type="text" name="address" class="form-control p-region" id="address" placeholder="福岡市" required>
                <div class="invalid-feedback">
                  配送先住所を入力してください
                </div>
              </div>


            </div>

            <hr class="my-4">
            <h4 class="mb-3">登録車両</h4>
            <div class="form-check">
              <input type="radio" name="carcheck" class="form-radio-input" >
              <label class="form-radio-label" ><img src="img/10.jpg" /></label><br />
              <div class="text-center">ダンプ1</div>
            </div>

            <div class="form-check">
              <input type="radio" name="carcheck"  class="form-radio-input">
              <label class="form-radio-label" ><img src="img/t1.jpg" /></label><br />
              <div class="text-center">ダンプ2</div>
            </div>

            <hr class="my-4">


            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">登録</button>
          </form>
        </div>
      </div>
    </main>

  </div>
  <?include("_footer.php")?>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10/build/highlight.min.js"></script>
	<script>hljs.highlightAll();</script>
	  <!-- JSの設定ファイル -->

	<script>
	// 無効なフィールドがある場合にフォーム送信を無効にするスターターJavaScriptの例
(() => {
  'use strict';

  // Bootstrapカスタム検証スタイルを適用してすべてのフォームを取得
  const forms = document.querySelectorAll('.needs-validation');

  // ループして帰順を防ぐ
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
	<script src="https://bootstrap-guide.com/js/samples.js"></script>
</body>

</html>