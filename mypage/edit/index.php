<?php
$r = $_REQUEST;
include("../../class/_user.class");
$user = new user();
$dao = new dao();

$dao->setKey("uid",$user->getUser());
$rec = $dao->personal_truck_data("req",$r['req']);

?>

<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>配送車手配</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11/build/styles/github.min.css">
	<link rel="stylesheet" href="https://bootstrap-guide.com/css/samples.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1/font/bootstrap-icons.min.css">
<style>
.container {  max-width: 960px;}
</style>
</head>

<body class="bg-light">
<?include("../../_nav2.php")?>
<br />
  <div class="container">
    <main>
      <div class="py-5 text-center">
        <h2>配送車情報修正</h2>

      </div>

      <div class="row g-5">
        <div>
          <form class="needs-validation" method="POST" action="send/send.php" enctype="multipart/form-data" novalidate>
            <input type="hidden" name="req" value="<?=$r['req']?>" />
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="capacity" class="form-label">配送車 重量</label>
                <select name ="capacity" class="form-select d-block w-100" id="capacity" required>
                  <option value="6">6t</option>
                  <option value="8">8t</option>
                  <option value="10">10t</option>
                </select>
                <div class="invalid-feedback">
                  トラックの重量を選択してください。
                </div>
              </div>

              <div class="col-sm-6">
                <label for="opendate" class="form-label">稼働日</label>
                <input id="opendate" type="date" name="opendate" class="form-control" value="<?=$rec['opendate']?>" required>
                <div class="invalid-feedback">
                  掲載開始される日付を入力してください
                </div>
              </div>

              <div class="col-sm-6">
                <label for="area" class="form-label">配送可能エリア(複数入れる場合はスペースで区切ります)</label>
                <input id="area" type="text" name="area" class="form-control" value="<?=$rec['area']?>" placeholder="福岡市 朝倉市 筑紫野" required>
                <div class="invalid-feedback">
                配送可能エリアを入力してください
                </div>
              </div>

              <div class="col-12">
                <label for="info" class="form-label">配送車の仕様 <span class="text-muted"></span></label>
                <input type="text" name="info" class="form-control" id="info" placeholder="砂、砂利不可。資材等OK" value="<?=$rec['info']?>">
                <div class="invalid-feedback">
                  配送車の仕様を入力してください
                </div>
              </div>

              <div class="col-12">
                <label for="txt" class="form-label">配送車のPR情報(255文字まで)<span class="text-muted"></span></label>
                <textarea type="text" name="txt" class="form-control" id="txt" placeholder="8tトラックを10台所有しています。主に建築現場での残土、埋め戻し等に利用しています。福岡を中心に筑紫野エリアまでカバーしています。ぜひご利用ください"><?=$rec['txt']?></textarea>
                <div class="invalid-feedback">
                  配送車のPR情報を入力してください
                </div>
              </div>

              <div class="col-sm-6">
              <label for="email" class="form-label">配送車の写真をアップロードします <span class="text-muted"></span></label>
                <input type="file" name="img" class="form-control" value="" accept=".jpg,.png,.jpeg" >
                <div class="invalid-feedback">
                配送可能エリアを入力してください
                </div>
              </div>

              <div class="col-sm-12">
                <img width="250" src="../../data/<?=$rec['img']?>" />
              </div>


            </div>

            <hr class="my-4">
 

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit">更　新</button>
          </form>
        </div>
      </div>
    </main>

  </div>
  <?include("../../_footer.php")?>
	
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