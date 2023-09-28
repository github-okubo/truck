<?php
include("../../class/_user.class"); // extends dao

$user = new user(); // session start
$user->status();    // login user 状態(ログインしてなければ、エラー画面)

$dao = new dao();
$rec = $dao->directQuery("select * from personal_truck_data where uid = " .$user->getUser());

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
  <?include("../../_nav2.php");?>

  <main>
  <section class="py-5 container">
  <h1 class="text-center pt-3">登録配送車リスト</h1>
  


  <div class="row mt-3 g-3 text-left">
   <div class="list-group">

   <? foreach((array)$rec as $key=>$val){ ?>
    <a href="index.php?req=<?=$val['req']?>" class=" list-group-item " aria-current="true">
      <div class="d-flex w-100 justify-content-between">
        <img class="m-2" width="150" src="../../data/<?=$val['img']?>" />
        <p class="mb-1 "><?= $val['info']?></p>
        <small>公開日：<?= $val['opendate']?></small>

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
  <?include("../../_footer.php")?>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 </body>
</html>