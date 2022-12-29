<?php
$description = "校則を検索できるデータベースサイト。学校名から校則を検索したり、「スカート丈規制」「眉毛加工禁止」「下着規制」などの校則のキーワードから各校を横串で検索できます。";
$title = "School Rules Database（スクールルールズデータベース） | 校則の内容から探す";
require("header.php");
?>
<body>
<?php include("header_bar.php"); ?> <!-- ヘッダーバーファイルの読み込み -->
<div class="wrapper">

<?php
  require_once('db_connect.php');
  try {
    //データベースに接続
    $dbh = db_connect();

    //例外処理。PDOのエラーレポートを表示
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //データベースからデータを取得
    $sql = 'SELECT * FROM schoolrules_table Where school_category = "高校"'; //SELECT文を変数に格納。DISTINCTは重複削除の意味
    $stmt = $dbh->query($sql); // SQLステートメントを実行し、結果を変数に格納
    
    //「全ての市町村」を表示
    var_dump $stmt;
  } catch (PDOException $e) {
    exit('データベースに接続できませんでした。' . $e->getMessage());
  }
?>

</div>

<?php include("footer.php"); ?> <!-- Footerの読み込み -->
</body>
</html>