<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ダッシュボード</title>


  <!-- CSSの設定ファイル -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="dashboard.css">
</head>

<body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <div class="container-fluid">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">配送管理システム</a>
      <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="検索" aria-label="検索">
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="#">サインアウト</a>
        </div>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <span data-feather="home" class="align-text-bottom"></span>
                ダッシュボード
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file" class="align-text-bottom"></span>
                オーダー
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                製品
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="users" class="align-text-bottom"></span>
                顧客
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                報告
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers" class="align-text-bottom"></span>
                統合
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span>保存されたレポート</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text" class="align-text-bottom"></span>
                今月
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">ダッシュボード</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">配送</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">顧客</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar" class="align-text-bottom"></span>
              今週
            </button>
          </div>
        </div>

        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

        <h2>未認証一覧</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">ユーザーID</th>
                <th scope="col">顧客名</th>
                <th scope="col">見出し</th>
                <th scope="col">見出し</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1,001</td>
                <td>あお</td>
                <td>交</td>
                <td>小</td>
                <td>記</td>
              </tr>
              <tr>
                <td>1,002</td>
                <td>いね</td>
                <td>鋼</td>
                <td>省</td>
                <td>黄</td>
              </tr>
              <tr>
                <td>1,003</td>
                <td>うた</td>
                <td>抗</td>
                <td>商</td>
                <td>木</td>
              </tr>
              <tr>
                <td>1,004</td>
                <td>えま</td>
                <td>工</td>
                <td>匠</td>
                <td>規</td>
              </tr>
              <tr>
                <td>1,005</td>
                <td>おか</td>
                <td>項</td>
                <td>生</td>
                <td>機</td>
              </tr>
              <tr>
                <td>1,006</td>
                <td>かさ</td>
                <td>孔</td>
                <td>章</td>
                <td>期</td>
              </tr>
              <tr>
                <td>1,007</td>
                <td>きじ</td>
                <td>構</td>
                <td>証</td>
                <td>既</td>
              </tr>
              <tr>
                <td>1,008</td>
                <td>くり</td>
                <td>高</td>
                <td>章</td>
                <td>気</td>
              </tr>
              <tr>
                <td>1,009</td>
                <td>けち</td>
                <td>孝</td>
                <td>少</td>
                <td>基</td>
              </tr>
              <tr>
                <td>1,010</td>
                <td>こま</td>
                <td>功</td>
                <td>将</td>
                <td>貴</td>
              </tr>
              <tr>
                <td>1,011</td>
                <td>さら</td>
                <td>公</td>
                <td>招</td>
                <td>着</td>
              </tr>
              <tr>
                <td>1,012</td>
                <td>しか</td>
                <td>甲</td>
                <td>庄</td>
                <td>樹</td>
              </tr>
              <tr>
                <td>1,013</td>
                <td>すぎ</td>
                <td>候</td>
                <td>性</td>
                <td>来</td>
              </tr>
              <tr>
                <td>1,014</td>
                <td>せみ</td>
                <td>考</td>
                <td>頌</td>
                <td>奇</td>
              </tr>
              <tr>
                <td>1,015</td>
                <td>そと</td>
                <td>講</td>
                <td>勝</td>
                <td>器</td>
              </tr>
            </tbody>
          </table>
        </div><!-- /.table-responsive -->
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- アイコン -->
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <!-- グラフ -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <!-- JSの設定ファイル -->
  <script src="dashboard.js"></script>
</body>

</html>
