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
            <h2 class="fs-1 mb-5 text-center fw-bold"></h2>
            <form method="post" action="send/send.php">
                <div class="mb-3">
                    <input type="text" class="form-control" name="firstname" placeholder="山田（性）" value="">
                </div>

                <div class="mb-3">
                    <input type="text" class="form-control" name="lastname" placeholder="太郎（名）" value="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="handle" placeholder="サイトで使う名前" value="">
                </div>
                <!-- 郵便番号 -->

                <div>郵便番号(ハイフン不要)</div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="zip" name="zip" maxlength="7" placeholder="8100001" value="" onKeyUp="AjaxZip3.zip2addr(this, '', 'addr', 'addr');">
                </div>

                <!-- 住所 A-->
                <div class="mb-3">
                    <input type="text" class="form-control" name="addr" placeholder="住所" value="">
                </div>


                <div class="mb-3">
                    <input type="text" class="form-control" name="email" placeholder="メールアドレス（必須）" value="">
                </div>
                <div>ハイフン不要</div>
                <div class="mb-3">
                    
                    <input type="text" class="form-control" name="tel" maxlength="12" placeholder="電話番号" value="">
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                      利用規約に同意します。<a href="" target="_blank" rel="noopener noreferrer" class="text-decoration-underline text-dark">プライバシーポリシーはこちら</a>
                    </label>
                  </div>
                <div class="text-center pt-4 col-md-6 offset-md-3">
                    <button type="submit" class="btn btn-primary">送信</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>

