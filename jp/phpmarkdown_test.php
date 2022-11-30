<?php
ini_set("display_errors", "On");

// PHPMarkdownの読み込み
require_once("PHPMarkdown/Michelf/Markdown.inc.php");
use Michelf\Markdown;

// マークダウンファイルの中身
$text = "# タイトル
- リスト1
- リスト2";

// PHPMarkdownでHTMLへ変換
$html = Markdown::defaultTransform($text);
?>

<!-- HTML -->
<html>
  <body>
    <?php print $html; ?>
  </body>
</html>
