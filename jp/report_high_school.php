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
    $sql = 'SELECT SUM(vague_expressions_such_as_typical_of_high_school_students) AS vague_expressions_such_as_typical_of_high_school_students, SUM(uniform) AS uniform, SUM(uniform_processing_prohibition) AS uniform_processing_prohibition FROM schoolrules_table';
    $stmt = $dbh->query($sql); // SQLステートメントを実行し、結果を変数に格納
    
    //レポートを表示
    foreach ($stmt as $row) {
      echo '<pre>';
      var_dump( $row );
      echo '</pre>';
    }

    echo "uniformは";
    echo $stmt['uniform'];

  } catch (PDOException $e) {
    exit('データベースに接続できませんでした。' . $e->getMessage());
  }
?>

</div>

<?php include("footer.php"); ?> <!-- Footerの読み込み -->
</body>
</html>