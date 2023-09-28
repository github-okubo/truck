<?
include("class/_dao.class");
$dao = new dao();
$rec = $dao->directQuery("select * from personal_truck_data where req > 1");
?>
<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
<!-- OGP -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@cccabinet">
	<meta property="og:site_name" content="配送マッチングシステム" />
	<meta property="og:title" content="配送マッチングシステム" />
	<meta property="og:url" content="https://bootstrap-guide.com/sample/album" />
	<meta property="og:type" content="article" />
	<meta property="og:description" content="" />
	<meta property="fb:app_id" content="2270152383309485" />
	<meta property="og:image" content="https://bootstrap-guide.com/files/example_files/1/album.png" />
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="960">
	<meta property="og:image:height" content="600">
	<title>配送マッチングシステム</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11/build/styles/github.min.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

<script type="text/javascript">
        $(document).ready(function(){
            $('.slider').bxSlider({
                auto: true,
                mode:'fade',
                pause: 3000,
                speed: 1000
            });
        });
</script>

</head>

<body>
<?include("_nav.php");?>
  <main>
    <section>
      <div class="slider">
        <img class="img-fluid" src="img/top.jpg" />
        <img class="img-fluid" src="img/top2.jpg" />
     </div>
    </section>
    <section class="py-5 text-center container">



      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto mt-4">
          <h1 class="fw-light">配送マッチングシステム</h1>
          <p class="lead text-muted">ダンプ、冷凍車、配送トラック便などの空き情報をマッチングいたします</p>
          <p>
            <a href="login.php" class="btn btn-primary my-2">配車</a>
            <a href="newlogin.php" class="btn btn-secondary my-2">新規登録</a>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <? foreach((array)$rec as $key=>$val){ ?>
          <div class="col">
            <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" src="data/<?=$val['img']?>" />              
            <div class="card-body">
              <p class="card-text"><?=$val['txt']?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group"><button type="button" class="btn btn-sm btn-outline-secondary">見る</button></div>
                  <small class="text-muted"><?=$val['opendate']?></small>
                </div>
            </div>
          </div>
          </div>
        <?}?>


        </div>
      </div>





   </div><!-- /.album  -->
  </main>

<?include("_footer.php")?>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>