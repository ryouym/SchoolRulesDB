<?php
$description = "校則を検索できる校則データベースサイトです。";
$title = "School Rules Database | TOP";
require("header.php");
?>
<body>
<?php include("header_bar.php"); ?> <!-- ヘッダーバーファイルの読み込み -->
<div class="wrapper">
  <div class="breadcrumb_trail_area"><p><a href="index.php">ホーム</a> > 検索結果</p></div>
  <div class="prefecture_name"><h1>検索結果</h1></div>
  <div class="school_list_area">
  <?php
      require_once('db_connect.php');
      try {
        //データベースに接続
        $dbh = db_connect();

        //例外処理。PDOのエラーレポートを表示
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //データベースからデータを取得
        $sql = 'SELECT * FROM schoolrules_table WHERE uniform = 1 ORDER BY school_displayorder asc'; //SELECT文を変数に格納
        $stmt = $dbh->query($sql); // SQLステートメントを実行し、結果を変数に格納

        foreach ($stmt as $row) {
          echo "<div>".$row['school_name']."</div>\n";
          $pattern = '#<span class=".*?uniform.*?">(.+?)<\/span>#'; // 正規表現を記述。デリミタに「#」を利用。
          $subject = $row['school_rules']; // 検索対象
          preg_match_all( $pattern, $subject, $search_results_for_school_rules);

          foreach ($search_results_for_school_rules[0] as $rule) {
            echo "<div>";
            echo $rule;
            echo "</div>\n";
          }
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
