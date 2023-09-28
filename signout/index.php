<? 
session_start();
$_SESSION = array();
session_destroy();
print_R($_SESSION);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>
<body>
<div class="container">
<div class="main container-fluid">
    <div class="row  py-5">
        <div class="col-md-8 offset-md-2">
            <h2 class="fs-1 mb-5 text-center fw-bold">ログアウトしました</h2>

        </div>
        <div class="col-md-8 offset-md-2 text-center ">
            <a href="https://truck.yyc-c.co.jp">トップページ戻る</a>
        </div>
    </div>
</div>
</div>
</body>
</html>

