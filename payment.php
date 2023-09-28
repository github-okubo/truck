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
        <h2>精算フォーム</h2>
        <p class="lead">配送車の方と連絡が発生する為、余裕を持った時間でお申し込み下さい</p>
      </div>

      <div class="row g-5">
        <div>
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">カート</span>
            <span class="badge bg-primary rounded-pill">1</span>
          </h4>
          
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">朝倉市(12:00発) -> 福岡市 </h6>
                <small class="text-muted">ダンプ10t</small>
              </div>
              <span class="text-muted">￥22000</span>
            </li>

          </ul>


        </div>
        <div>
          <h4 class="mb-3">請求先住所</h4>
          <form class="needs-validation" action="thanks.php" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="familyName" class="form-label">姓</label>
                <input type="text" class="form-control" id="familyName" placeholder="" value="小室" required>
                <div class="invalid-feedback">
                  名字を入力してください
                </div>
              </div>
              <div class="col-sm-6">
                <label for="givenName" class="form-label">名</label>
                <input type="text" class="form-control" id="givenName" placeholder="" value="肇" required>
                <div class="invalid-feedback">
                  名前を入力してください
                </div>
              </div>

              <div class="col-12">
                <label for="username" class="form-label">ユーザーネーム</label>
                <div class="input-group has-validation">
                  <span class="input-group-text">@</span>
                  <input type="text" class="form-control" id="username" placeholder="comrin" value="comrin" required>
                <div class="invalid-feedback">
                    ユーザー名が必要です
                  </div>
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Eメール <span class="text-muted">(任意)</span></label>
                <input type="email" class="form-control" id="email" placeholder="komuro@gmail.com" value="komuro@gmail.com">
                <div class="invalid-feedback">
                  配送の更新に有効なメールアドレスを入力してください
                </div>
              </div>

              <div class="col-sm-6">
                <label for="zip" class="form-label">郵便番号(ハイフン不要)</label>
                <input type="text" class="form-control" id="zip" placeholder="" onKeyUp="AjaxZip3.zip2addr(this, '', 'address', 'address');" required>
                <div class="invalid-feedback">
                  郵便番号を入力してください
                </div>
              </div>

              <div class="col-12">
                <label for="address" class="form-label">住所</label>
                <input type="text" name="address" class="form-control p-region" id="address" placeholder="住所" required>
                <div class="invalid-feedback">
                  配送先住所を入力してください
                </div>
              </div>

              <div class="col-12">
                <label for="address2" class="form-label">住所 2 <span class="text-muted">(任意)</span></label>
                <input type="text" class="form-control" id="address2" placeholder="アパート・マンション名">
              </div>




            </div>

            <hr class="my-4">

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="addressCheck">
              <label class="form-check-label" for="addressCheck">配送先住所は、請求先住所と同じです</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="keepCheck">
              <label class="form-check-label" for="keepCheck">次回のために、この情報を保存する</label>
            </div>

            <hr class="my-4">

            <h4 class="mb-3">お支払い方法</h4>

            <div class="my-3">
              <div class="form-check">
                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                <label class="form-check-label" for="credit">クレジットカード</label>
              </div>
              <div class="form-check">
                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="debit">デビットカード</label>
              </div>
              <div class="form-check">
                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                <label class="form-check-label" for="paypal">PayPal</label>
              </div>
            </div>
            <div class="row gy-3">
              <div class="col-md-6">
                <label for="cc-name" class="form-label">カードの名義</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">カード上に表示されているフルネーム</small>
                <div class="invalid-feedback">
                  カードの名義を入力してください
                </div>
              </div>
              <div class="col-md-6">
                <label for="cc-number" class="form-label">クレジットカード番号</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  クレジットカード番号を入力してください
                </div>
              </div>
              <div class="col-md-3">
                <label for="cc-expiration" class="form-label">有効期限</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  有効期限を入力してください
                </div>
              </div>
              <div class="col-md-3">
                <label for="cc-cvv" class="form-label">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  セキュリティコードを入力してください
                </div>
              </div>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">精算</button>
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