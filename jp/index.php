<?php
$description = "校則を検索できるデータベースサイト「スクールルールズデータベース」。";
$title = "School Rules Database | TOP";
require("header.php");
?>
<body>
<?php include("header_bar.php"); ?> <!-- ヘッダーバーファイルの読み込み -->
<div class="top_header_image"><p>この校則必要ですか？</p></div>
<div class="wrapper">
  <div class="top_group">
    <div class="top_h1"><h1>校則を検索する</h1></div>
    <div class="top_body"><p>高校の校則を検索できます。<br>※現在は千葉県の公立高校のみ掲載</p></div>
    <div class="search_button"><input type="button" onclick="location.href='tag_list.php'" value="校則の内容から探す"></div>
    <div class="search_button"><input type="button" onclick="location.href='chiba.php'" value="学校名から探す"></div>
    <div class="top_border"></div>
  </div>
  <div class="top_group">
    <div class="top_h1"><h1>Mission</h1></div>
    <div class="top_body"><p>校則をインターネット上で広く公開し、第三者が校則をチェックできる環境を整えることで、ブラック校則の解消を目指します。</p></div>
    <a href="mission.php">もっと詳しく →</a>
    <div class="top_border"></div>
  </div>
  <div class="top_group">
    <div class="top_h1"><h1>Pick Up</h1></div>
    <div class="top_body">
      <div class="top_pickupgroup">
      <div class="top_pickupgroup">
        <div class="top_shcoolrules"><p><a href="https://www.schoolrulesdb.com/item.php?school_id=D112210000752">生まれつき自然の癖毛及び髪色のものは、「地毛届」に幼少時の写真を添付して、生徒指導部に届け出る。（千葉県立市原高等学校）</a></p></div>
      </div>
        <div class="top_shcoolrules"><p><a href="https://www.schoolrulesdb.com/item.php?school_id=D112210000342">男子は、前髪は目にかからず、後ろはシャツの襟より長くなく、横は耳の半分以上にならないようにする。（千葉県立船橋古和釜高等学校）</a></p></div>
      </div>
      <div class="top_pickupgroup">
        <div class="top_shcoolrules"><p><a href="https://www.schoolrulesdb.com/item.php?school_id=D112210000501">部(同好会)活動には進んで参加し、必ず登録をすること。（千葉県立佐原高等学校）</a></p></div>
      </div>
      <div class="top_pickupgroup">
        <div class="top_shcoolrules"><p><a href="https://www.schoolrulesdb.com/item.php?school_id=D112210001109">ワイシャツの下に下着を着用する場合、無地の紺・黒・白とする。（千葉県立九十九里高等学校）</a></p></div>
      </div>
      <div class="top_pickupgroup">
        <div class="top_shcoolrules"><p><a href="https://www.schoolrulesdb.com/item.php?school_id=D112210000020">いかなる化粧もしないこと。いかなる装飾品も付けないこと。（千葉県立千葉女子高等学校）</a></p></div>
      </div>
      <div class="top_pickupgroup">
        <div class="top_shcoolrules"><p><a href="https://www.schoolrulesdb.com/item.php?school_id=D112210000789">染色・脱色の跡がある場合は黒染めをする。（千葉県立姉崎高等学校）</a></p></div>
      </div>
    </div>
  </div>
</div>
<?php include("footer.php"); ?> <!-- Footerの読み込み -->
</body>
</html>
