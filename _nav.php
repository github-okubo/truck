<header>
    <div class="px-3 py-2 text-bg-dark">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="https://truck.yyc-c.co.jp/" class="nav-link px-2 text-secondary">ホーム</a></li>
          <li><a href="#" class="nav-link px-2 text-white">特徴</a></li>
          <li><a href="#" class="nav-link px-2 text-white">価格設定</a></li>
          <li><a href="https://truck.yyc-c.co.jp/tokushou.php" class="nav-link px-2 text-white">特定商取引法に基づく表記</a></li>
          <li><a href="https://truck.yyc-c.co.jp/inquiry/otoiawase.php" class="nav-link px-2 text-white">お問合せ</a></li>

        </ul>
      </div>
    </div>

    <?if($_SERVER['SCRIPT_NAME'] != "/tokushou.php"){?>
    <div class="px-3 py-2 border-bottom mb-3 ">
      <div class="container d-flex flex-wrap justify-content-center">


        <div class="text-end pull-right">
          <button type="button" class="btn btn-light text-dark me-2" onclick="location.href='https://localhost/truck/login/'">ログイン</button>
          <button type="button" class="btn btn-primary" onclick="location.href='https://localhost/truck/signup/'">新規登録</button>
        </div>
        
      </div>
    </div>
    <?}?>
  </header>