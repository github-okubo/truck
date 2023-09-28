<?
$msg = "";
if($_SERVER['QUERY_STRING'] == "error"){
	$msg = "<span class='text-danger'>Emailまたはパスワードが間違っています</span>";
}


?>
<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="シンプルなログインフォーム用のカスタムフォームレイアウトとデザイン。">
<!-- OGP -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@cccabinet">
	<meta property="og:site_name" content="Bootstrap5設置ガイド" />
	<meta property="og:title" content="サインインページの実例～Bootstrap5設置ガイド" />
	<meta property="og:url" content="https://bootstrap-guide.com/sample/sign-in" />
	<meta property="og:type" content="article" />
	<meta property="og:description" content="シンプルなログインフォーム用のカスタムフォームレイアウトとデザイン。" />
	<meta property="fb:app_id" content="2270152383309485" />
	<meta property="og:image" content="https://bootstrap-guide.com/files/example_files/9/sign-in.png" />
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="960">
	<meta property="og:image:height" content="600">
	<title>ログインページ</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11/build/styles/github.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1/font/bootstrap-icons.min.css">
<style>
html,body {  height: 100%;}body {  display: flex;  align-items: center;  padding-top: 40px;  padding-bottom: 40px;  background-color: #f5f5f5;}.form-signin {  max-width: 330px;  padding: 15px;}.form-signin .form-floating:focus-within {  z-index: 2;}.form-signin input[type="email"] {  margin-bottom: -1px;  border-bottom-right-radius: 0;  border-bottom-left-radius: 0;}.form-signin input[type="password"] {  margin-bottom: 10px;  border-top-left-radius: 0;  border-top-right-radius: 0;}
</style>
</head>

<body class="text-center">
  <main class="form-signin w-100 m-auto">
    <form method="post" action="send/send.php">

      <h1 class="h3 mb-3 fw-normal">サインインをどうぞ</h1>
      
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Emailアドレス</label>
      </div>
      <div class="form-floating">
        <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="パスワード">
        <label for="floatingPassword">パスワード</label>
      </div>

	  <div class="form-check mb-3">
		<?=$msg?>
	  </div>

      <div class="form-check mb-3">
        <label>
          <input type="checkbox" value="remember-me"> 状態を記憶する
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">サインイン</button>
      
  </form>

  </main>

	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>