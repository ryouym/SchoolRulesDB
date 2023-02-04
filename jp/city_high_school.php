<?php
$description = "校則を検索できるデータベースサイト。学校名から校則を検索したり、「スカート丈規制」「眉毛加工禁止」「下着規制」などの校則のキーワードから各校を横串で検索できます。";
$title = "School Rules Database（スクールルールズデータベース） | 学校名から探す";
require("header.php");
?>
<body>
<?php include("header_bar.php"); ?> <!-- ヘッダーバーファイルの読み込み -->
<div class="wrapper">
  <div class="breadcrumb_trail_area"><p><a href="https://www.schoolrulesdb.com/">ホーム</a> > 市区町村を選ぶ</p></div>
  <h1>市区町村を選ぶ</h1>
  <div class="school_list_area">
 <?php
      require_once('db_connect.php');
      try {
      //データベースに接続
      $dbh = db_connect();

      //例外処理。PDOのエラーレポートを表示
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      //index.phpからパラメータを取得
      $prefname_received_from_previous_page = $_GET['pref'];

      //データベースからデータを取得
      $sql = 'SELECT school_city, school_id FROM schoolrules_table Where school_category = "高校" AND school_prefecture = "' . $prefname_received_from_previous_page . '" ORDER BY school_displayorder asc'; //SELECT文を変数に格納。DISTINCTは重複削除の意味
      $stmt = $dbh->query($sql); // SQLステートメントを実行し、結果を変数に格納
      
      //「全ての市町村」を表示
      echo "<div class='hyperlink_text_decoration_none city_list'><a href='http://schoolrulesdb.com/list_high_school.php?school_city=all_city&pref=".$prefname_received_from_previous_page."'>すべての市町村</a></div>\n";

      // foreach文で配列の中身を一行ずつ出力
      $previous_city = NULL;
      foreach ($stmt as $row) {
        // 市町村の表示。ifで市町村の重複表示を回避
        if ($previous_city != $row['school_city']) {
          echo "<div class='hyperlink_text_decoration_none city_list'><a href='http://schoolrulesdb.com/list_high_school.php?school_city=".$row['school_city']."'>".$row['school_city']."</a></div>\n";
          $previous_city = $row['school_city'];
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
