<?php
$r = $_REQUEST;
include("class/_user.class"); // extends dao

$user = new user(); // session start
$user->status();    // login user 状態(ログインしてなければ、エラー画面)

$dao = new dao();
$rec = $dao->directQuery("select * from personal_truck_data where req =" .$r['req'])[0];
print_R($rec);
?>

<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="ナビゲーションバーといくつかの基本的なグリッドの列をジャンボトロンの周りに構築。">
<!-- OGP -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@cccabinet">
	<meta property="og:site_name" content="Bootstrap5設置ガイド" />
	<meta property="og:title" content="コンテンツ付きジャンボトロンの実例～Bootstrap5設置ガイド" />
	<meta property="og:url" content="https://bootstrap-guide.com/sample/jumbotron-contents" />
	<meta property="og:type" content="article" />
	<meta property="og:description" content="ナビゲーションバーといくつかの基本的なグリッドの列をジャンボトロンの周りに構築。" />
	<meta property="fb:app_id" content="2270152383309485" />
	<meta property="og:image" content="https://bootstrap-guide.com/files/example_files/33/jumbotron-contents.png" />
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="960">
	<meta property="og:image:height" content="600">
	<title>10t ダンプ 詳細</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11/build/styles/github.min.css">
	<link rel="stylesheet" href="https://bootstrap-guide.com/css/samples.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1/font/bootstrap-icons.min.css">
</head>

<body class="pt-5">
<?include("_nav.php")?>

  <!-- 主なマーケティングメッセージまたは呼び出しのためのメインジャンボトロン -->
  <main>
    <div class="bg-light p-3 p-sm-5 mb-4">
      <div class="container">
        <h1 class="display-4">積載量：<?=$rec['capacity']?>t</h1>
        <p>公開日:<?=$rec['opendate']?> </p>
        <p><?=$rec['txt']?></p>
        <p><img src="data/<?=$rec['img']?>" width="45%" /></p>
        <p><img src="img/10s.jpg" width="45%" /></p>

      </div>
    </div>


    <div class="bg-light p-3 p-sm-5 mb-4">
      <div class="container">
      <h1>配送可能エリア</h1>
        <p><?=$rec['area']?></p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d425876.1484536716!2d130.2041179818225!3d33.497281507963834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3541eda1e9848429%3A0xf60a729936398783!2z56aP5bKh5biC44CB56aP5bKh55yM!3m2!1d33.5901838!2d130.4016888!4m5!1s0x354171697f8fe13d%3A0xfadf3defe6ab1dfe!2z5pyd5YCJ5biC44CB56aP5bKh55yM!3m2!1d33.423467699999996!2d130.6656664!5e0!3m2!1sja!2sjp!4v1671907020061!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
      <div class="container mt-2">
      <!-- 列の例 -->
      <div class="row">

          <h2>クレジット決済</h2>
          <p>決済確定後、予約確定となります。当日配送が実施されない場合、料金は払い戻されます。</p>
          <p><a class="btn btn-secondary" href="payment.php" role="button">申し込み &raquo;</a></p>
      </div>

      <div class="clearfix"></div>



      <hr>
    </div><!-- /.container -->
  </main>

  <!-- フッタ -->
<?include("_footer.php")?>

	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>