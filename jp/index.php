<?php
$description = "校則を検索できるデータベースサイト。学校名から校則を検索したり、「スカート丈規制」「眉毛加工禁止」「下着規制」などの校則のキーワードから各校を横串で検索できます。";
$title = "School Rules Database（スクールルールズデータベース） | TOP";
require("header.php");
?>
<body>
<?php include("header_bar.php"); ?> <!-- ヘッダーバーファイルの読み込み -->
<div class="top_header_image"><p>この校則必要ですか？</p></div>
<div class="wrapper">
  <div class="top_group">
    <div class="top_h1"><h1>校則を検索する</h1></div>
    <div class="top_body"><p>高校の校則を検索できます。<br>※ベータ版のため東京都・千葉県のみ</p></div>
    <div class="search_button"><input type="button" onclick="location.href='tag_list.php'" value="校則の内容から探す"></div>
    <div class="search_button"><input type="button" onclick="location.href='./city_high_school.php?pref=東京都'" value="都立高校の校則を探す"></div>
    <div class="search_button"><input type="button" onclick="location.href='city_high_school.php?pref=千葉県'" value="千葉県立高校の校則を探す"></div>
    <div class="search_button"><input type="button" onclick="location.href='list_middle_school.php'" value="流山市立中学校の校則を探す"></div>
    <div class="top_border"></div>
  </div>
  <div class="top_group">
    <div class="top_h1"><h1>ミッション</h1></div>
    <div class="top_body"><p>校則をインターネット上で広く公開し、第三者が校則をチェックできる環境を整えることで、ブラック校則の解消を目指します。</p></div>
    <div class="hyperlink"><a href="mission.php">もっと詳しく →</a></div>
    <div class="top_border"></div>
  </div>
  <div class="top_group">
    <div class="top_h1"><h1>ピックアップ</h1></div>
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
    <div class="top_border"></div>
  </div>
  <div class="top_group">
    <div class="top_h1"><h1>メディア掲載</h1></div>
    <div class="media_logo_erea">
      <div class="media_logo"><a href="https://digital.asahi.com/articles/ASQB4530DQ9ZUDCB028.html"><img src="./img/asahi.png"></a></div>
      <div class="media_logo"><a href="https://news.yahoo.co.jp/articles/4f9b06caeadde1788b91fab104a8fe422d070f13"><img src="./img/yahoo_news.jpg"></a></div>
      <div class="media_logo"><a href="https://toyokeizai.net/articles/-/639849"><img src="./img/toyokeizai.jpg"></a></div>
      <div class="media_logo"><a href="https://youtu.be/maTugkQf5Gg?t=1142"><img src="./img/tbs_radio.png"></a></div>
      <div class="media_logo"><a href="https://mainichi.jp/articles/20221229/k00/00m/040/057000c"><img src="./img/mainichi.jpg"></a></div>
      <div class="media_logo"><a href="https://www.tokyo-np.co.jp/article/224081"><img src="./img/tokyo_shimbun.png"></a></div>
      <div class="media_logo"><a href="https://www.fnn.jp/articles/-/472717"><img src="./img/fnn.jpg"></a></div>
    </div>
    <div class="top_border"></div>
  </div>
  <div class="top_group">
    <div class="top_h1"><h1>お知らせ</h1></div>
    <div class="top_body hyperlink"><p>2022.2.2<br>東京都立高校208校の校則を公開しました</p></div>
    <div class="top_body hyperlink"><p>2023.1.30<br>千葉県流山市教育委員会、流山市立中学校に対し、<a href="./pdf/qre_nagareyama_20230130.pdf">校則に関する公開質問状</a>を送付しました</p></div>
    <div class="top_body hyperlink"><p>2023.1.20<br><a href="https://www.fnn.jp/articles/-/472717">FNNプライムオンライン</a>、<a href="https://news.yahoo.co.jp/articles/440616bd5c6368edc31629e9682ac4fb903c3665">Yahoo!ニュース</a>に掲載されました</p></div>
    <div class="top_body hyperlink"><p>2023.1.8<br><a href="https://www.tokyo-np.co.jp/article/224081">東京新聞</a>に掲載されました</p></div>
    <div class="top_body hyperlink"><p>2022.12.29<br><a href="https://mainichi.jp/articles/20221229/k00/00m/040/057000c">毎日新聞</a>に掲載されました</p></div>
    <div class="top_body hyperlink"><p>2022.12.24<br><a href="https://youtu.be/maTugkQf5Gg?t=1142">TBSラジオ『井上貴博 土曜日の「あ」』</a>に出演しました</p></div>
    <div class="top_body hyperlink"><p>2022.12.21<br><a href="https://toyokeizai.net/articles/-/639849">東洋経済オンライン</a>、<a href="https://news.yahoo.co.jp/articles/4f9b06caeadde1788b91fab104a8fe422d070f13">Yahoo!ニュース</a>に掲載されました</p></div>
    <div class="top_body hyperlink"><p>2022.12.17<br>千葉県流山市の全市立中学の校則を公開しました</p></div>
    <div class="top_body hyperlink"><p>2022.10.6<br><a href="https://digital.asahi.com/articles/ASQB4530DQ9ZUDCB028.html">朝日新聞</a>に掲載されました</p></div>
    <div class="top_body hyperlink"><p>2022.9.30<br>千葉県の全県立高校の校則を公開しました</p></div>
    <div class="top_border"></div>
  </div>
</div>
<?php include("footer.php"); ?> <!-- Footerの読み込み -->
</body>
</html>
