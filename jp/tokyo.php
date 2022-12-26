<?php
$description = "校則を検索できるデータベースサイト。学校名から校則を検索したり、「スカート丈規制」「眉毛加工禁止」「下着規制」などの校則のキーワードから各校を横串で検索できます。";
$title = "School Rules Database（スクールルールズデータベース） | 東京都";
require("header.php");
?>
<body>
<?php include("header_bar.php"); ?> <!-- ヘッダーバーファイルの読み込み -->
<div class="wrapper">
  <div class="breadcrumb_trail_area"><p><a href="index.php">ホーム</a> > 東京都</p></div>
  <h1>東京都</h1>
  <div class="school_list_area">
  <?php
      require_once('db_connect.php');
      try {
      //データベースに接続
      $dbh = db_connect();

      //例外処理。PDOのエラーレポートを表示
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      //データベースからデータを取得
      $sql = 'SELECT * FROM schoolrules_table ORDER BY school_displayorder asc'; //SELECT文を変数に格納
      $stmt = $dbh->query($sql); // SQLステートメントを実行し、結果を変数に格納

      // foreach文で配列の中身を一行ずつ出力
      $previous_city = NULL;
      foreach ($stmt as $row) {
        if ($previous_city != $row['school_city']) {
          echo "<div class='school_list_city'>".$row['school_city']."</div>\n";
        }
        echo "<div class='school_list_school_name'><a href='http://schoolrulesdb.com/item.php?school_id=".$row['school_id']."'>".$row['school_name']."</a></div>\n";
        $previous_city = $row['school_city'];
      }
      } catch (PDOException $e) {
      exit('データベースに接続できませんでした。' . $e->getMessage());
      }
    ?>
  </div>
</div>
<?php include("footer.php"); ?> <!-- ヘッダーバーファイルの読み込み -->
</body>
</html>
