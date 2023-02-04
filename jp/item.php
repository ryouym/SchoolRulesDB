<?php
//エラーメッセージの表示
ini_set("display_errors", "On");

//URLのidの値を取得
$school_id_passed_from_previous_page = $_GET['school_id'];

//DBに接続
require_once('db_connect.php');
try {
  //データベースに接続
  $dbh = db_connect();

  //例外処理。PDOのエラーレポートを表示
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //名前付けされたプレースホルダを用いてプリペアドステートメントを実行する。
  //プレースホルダとは、SQLを発行する際に後から値を指定する方法のこと。SQLインジェクションを回避してセキュリティを高める
  $result = $dbh->prepare('SELECT * FROM schoolrules_table WHERE school_id = :school_id');
  $result->bindValue(':school_id', $school_id_passed_from_previous_page);
  $result->execute();

  while($row = $result->fetch(PDO::FETCH_ASSOC)){
      $shool_rules_obtained_from_DB = $row['school_rules'];
      $shool_name_obtained_from_DB = $row['school_name'];
      $registration_date_obtained_from_DB = $row['registration_date'];
  }
} catch (PDOException $e) {
exit('データベースに接続できませんでした。' . $e->getMessage());
}

//header.phpにディスクリプションとタイトルの値を渡す
$description = "校則を検索できるデータベースサイト。学校名から校則を検索したり、「スカート丈規制」「眉毛加工禁止」「下着規制」などの校則のキーワードから各校を横串で検索できます。";
$title = "School Rules Database（スクールルールズデータベース） | 校則詳細";
require("header.php");
?>

<!-- HTML部 -->
<body>
<?php include("header_bar.php"); ?> <!-- ヘッダーバーファイルの読み込み -->
<div class="wrapper">
  <div class="item_area">
    <?php
      //パンくずリスト
      // echo '<div class="breadcrumb_trail_area"><p>'.'<a href="index.php">ホーム</a> > '.'<a href="city_high_school.php">市町村を選ぶ（高校）</a> > '.$shool_name_obtained_from_DB.'</p></div>';

      //学校名
      echo '<div class="item_shcool_name"><h1>'.$shool_name_obtained_from_DB.'</h1></div>';

      //校則の内容
      //PHPMarkdownの読み込み
      require_once("PHPMarkdown/Michelf/MarkdownExtra.inc.php");
      use Michelf\MarkdownExtra;

      // PHPMarkdownでHTMLへ変換
      $html_shool_rules_obtained_from_DB = MarkdownExtra::defaultTransform($shool_rules_obtained_from_DB);

      echo '<p>'.$html_shool_rules_obtained_from_DB.'</p>';  //nl2br関数で改行を反映する
      
      //校則取得日・PDF
      $filename = 'pdf/'.$school_id_passed_from_previous_page.'.pdf';

      if (file_exists($filename)) {
        echo '<div class="item_notes">';
        echo '<p>校則データ取得年月日：'.date('Y/m/d', strtotime($registration_date_obtained_from_DB)).'</p>'; // Y/m/d形式に変換して表示
        echo '<div class="hyperlink"><p><a href="https://www.schoolrulesdb.com/pdf/'.$school_id_passed_from_previous_page.'.pdf">校則元データ（PDF）</a></p></div>';
        echo '</div>';
      }
    ?>
  </div>
</div>
<?php include("footer.php"); ?> <!-- ヘッダーバーファイルの読み込み -->
</body>
</html>
