<?php
include("class/_user.class"); // extends dao

$user = new user(); // session start
$user->status();    // login user 状態(ログインしてなければ、エラー画面)

$dao = new dao();
$rec = $dao->directQuery("select * from personal_truck_data where req > 1");

?>

<!doctype html>
<html lang="jp">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <title>配送リスト</title>
 </head>

 <body>
  <?include("_nav2.php");?>

  <main>
  <section class="py-5 container">
  <h1 class="text-center pt-3">配送車リスト</h1>
  

  <form class="row" role="search" name="search">
    <div class="mb-3 ">
      <label for="familyName" class="form-label ">動ける日</label>
      <input type="datetime-local" class="form-control" id="date" placeholder="" value="" required>
      <div class="invalid-feedback ">日時を入力してください</div>
    </div>
    <div class="mb-3 ">
    <label for="haisyaName" class="form-label ">配車エリア</label>
    <input class="form-control me-2" type="search" placeholder="東京 渋谷..." aria-label="検索...">
    </div>
    <div  class="mb-3 ">
    <label for="haisyaName" class="form-label ">ダンプの種類</label>
    <select>
      <option>6t</option>
      <option>8t</option>
      <option>10t</option>
    </select>
    </div>
    <div class="d-grid mb-3">
    <button class="btn btn-outline-success flex-shrink-0" type="submit">検索</button> 
    </div>
  </form>


  <div class="row mt-3 g-3 text-left">
   <div class="list-group">

   <? foreach((array)$rec as $key=>$val){ ?>
    <a href="detail.php?req=<?=$val['req']?>" class=" list-group-item " aria-current="true">
      <div class="d-flex w-100 justify-content-between">
        <img class="m-2" width="150" src="img/<?=$val['capacity']?>.png" />
        <p class="mb-1 "><?= $val['info']?></p>
        <small>稼働日：<?= $val['opendate']?></small>

      </div>

      <div class="d-flex">


        <p class="mb-1">積載量：<?= $val['capacity']?>t</p><br /><br />
        <p class="mb-1">対応エリア：<?= $val['area']?></p>
      </div>
    </a>
  <?}?>

  </div>

  </main>
  <!-- フッタ -->
  <?include("_footer.php")?>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 </body>
</html>