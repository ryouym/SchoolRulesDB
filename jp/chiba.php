<?php
$description = "校則を検索できる校則データベースサイトです。";
$title = "School Rules Database | TOP";
require("header.php");
?>
<body>
<?php include("header_bar.php"); ?> <!-- ヘッダーバーファイルの読み込み -->
<div class="wrapper">
  <div class="breadcrumb_trail_area"><p><a href="index.php">ホーム</a> > 学校名から探す</p></div>
  <h1>学校名から探す（千葉県）</h1>
  <div class="school_list_area">
    <p>※現在は千葉県の公立高校のみ掲載</p>
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
        // 市町村の表示
        if ($previous_city != $row['school_city']) {
          echo "<div class='school_list_city'>".$row['school_city']."</div>\n";
        }
        // 学校情報の表示
        echo "<div class='school_list_each_shool_erea'>\n";
        echo "<div class='school_list_school_name'><a href='http://schoolrulesdb.com/item.php?school_id=".$row['school_id']."'>".$row['school_name']."</a></div>\n";

        // キーワードの表示
        echo "<div class='school_list_rule_keywords_erea'>\n";
        if($row['uniform'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=uniform'>制服あり</a></div>\n";}
          if($row['uniform_distinction_between_men_and_women'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=uniform_distinction_between_men_and_women'>男女の制服区別</a></div>\n";}
          if($row['dress_down_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=dress_down_prohibited'>着崩し禁止</a></div>\n";}
          if($row['uniform_processing_prohibition'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=uniform_processing_prohibition'>制服加工禁止</a></div>\n";}
          if($row['skirt_length_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=skirt_length_regulation'>スカート丈規制</a></div>\n";}
          if($row['no_wearing_of_pants_under_skirts'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_wearing_of_pants_under_skirts'>スカートの下のズボン着用禁止</a></div>\n";}
          if($row['no_saggy_pants'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_saggy_pants'>腰ばき禁止</a></div>\n";}
          if($row['no_wearing_of_warm_clothes_in_class'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_wearing_of_warm_clothes_in_class'>授業中の防寒着着用禁止</a></div>\n";}
          if($row['no_wearing_of_warm_clothes_during_the_ceremony'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_wearing_of_warm_clothes_during_the_ceremony'>式典中の防寒着着用禁止</a></div>\n";}
          if($row['designated_jacket'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_jacket'>指定ブレザー・ジャケット</a></div>\n";}
          if($row['designated_vest'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_vest'>指定ベスト</a></div>\n";}
          if($row['vest_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=vest_regulation'>ベスト規制</a></div>\n";}
          if($row['designated_shirt'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_shirt'>指定シャツ</a></div>\n";}
          if($row['shirt_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=shirt_regulation'>シャツ規制</a></div>\n";}
          if($row['designated_neckties'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_neckties'>指定ネクタイ</a></div>\n";}
          if($row['designated_ribbon'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_ribbon'>指定リボン</a></div>\n";}
          if($row['designated_scarf'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_scarf'>指定スカーフ</a></div>\n";}
          if($row['designated_cardigan'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_cardigan'>指定カーディガン</a></div>\n";}
          if($row['cardigan_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=cardigan_regulation'>カーディガン規制</a></div>\n";}
          if($row['cardigan_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=cardigan_prohibited'>カーディガン禁止</a></div>\n";}
          if($row['designated_sweater'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_sweater'>指定セーター</a></div>\n";}
          if($row['sweater_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=sweater_prohibited'>セーター禁止</a></div>\n";}
          if($row['sweater_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=sweater_regulation'>セーター規制</a></div>\n";}
          if($row['designated_polo_shirts'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_polo_shirts'>指定ポロシャツ</a></div>\n";}
          if($row['polo_shirts_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=polo_shirts_regulation'>ポロシャツ規制</a></div>\n";}
          if($row['hoodie_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=hoodie_prohibited'>パーカー禁止</a></div>\n";}
          if($row['sweatshirt_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=sweatshirt_prohibited'>スウェット禁止</a></div>\n";}
          if($row['jersey_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=jersey_prohibited'>ジャージ禁止</a></div>\n";}
          if($row['scarf_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=scarf_prohibited'>マフラー規制</a></div>\n";}
          if($row['designated_coat'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_coat'>指定コート</a></div>\n";}
          if($row['coat_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=coat_regulation'>コート規制</a></div>\n";}
          if($row['raincoat_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=raincoat_regulation'>レインコート規制</a></div>\n";}
          if($row['no_wearing_of_winter_clothes_indoors'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_wearing_of_winter_clothes_indoors'>屋内での防寒具着用禁止</a></div>\n";}
          if($row['designated_pants'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_pants'>指定ズボン</a></div>\n";}
          if($row['designated_skirt'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_skirt'>指定スカート</a></div>\n";}
          if($row['designated_socks'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_socks'>指定靴下</a></div>\n";}
          if($row['socks_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=socks_regulation'>靴下規制</a></div>\n";}
          if($row['tights_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=tights_regulation'>タイツ・ストッキング規制</a></div>\n";}
          if($row['ankle_socks_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=ankle_socks_prohibited'>アンクルソックス禁止</a></div>\n";}
          if($row['over_the_knee_socks_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=over_the_knee_socks_prohibited'>ニーハイソックス禁止</a></div>\n";}
          if($row['leggings_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=leggings_prohibited'>レギンス禁止</a></div>\n";}
          if($row['leg_warmers_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=leg_warmers_prohibited'>レッグウォーマー禁止</a></div>\n";}
          if($row['loose_socks_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=loose_socks_prohibited'>ルーズソックス禁止</a></div>\n";}
          if($row['belt_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=belt_regulation'>ベルト規制</a></div>\n";}
          if($row['suspenders_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=suspenders_prohibited'>サスペンダー禁止</a></div>\n";}
          if($row['underwear_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=underwear_regulation'>下着規制</a></div>\n";}
          if($row['designated_gym_uniform'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_gym_uniform'>指定体操服</a></div>\n";}
          if($row['designated_gym_shoes'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_gym_shoes'>指定体操靴</a></div>\n";}
          if($row['designated_bag'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_bag'>指定鞄</a></div>\n";}
          if($row['bag_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=bag_regulation'>鞄規制</a></div>\n";}
          if($row['no_processing_of_bags'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_processing_of_bags'>鞄の加工禁止</a></div>\n";}
          if($row['shoe_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=shoe_regulation'>靴規制</a></div>\n";}
          if($row['designated_sports_shoes'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_sports_shoes'>指定運動靴</a></div>\n";}
          if($row['designated_indoor_shoes'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_indoor_shoes'>指定上履き</a></div>\n";}
          if($row['heel_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=heel_prohibited'>ヒール禁止</a></div>\n";}
          if($row['geta_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=geta_prohibited'>下駄禁止</a></div>\n";}
          if($row['sandals_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=sandals_prohibited'>サンダル禁止</a></div>\n";}
          if($row['ornament_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=ornament_prohibited'>装飾品禁止</a></div>\n";}
          if($row['ornament_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=ornament_regulation'>装飾品規制</a></div>\n";}
          if($row['ring_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=ring_prohibited'>指輪禁止</a></div>\n";}
          if($row['earring_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=earring_prohibited'>イヤリング禁止</a></div>\n";}
          if($row['piercings_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=piercings_prohibited'>ピアス禁止</a></div>\n";}
          if($row['necklace_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=necklace_prohibited'>ネックレス禁止</a></div>\n";}
          if($row['bracelet_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=bracelet_prohibited'>ブレスレット禁止</a></div>\n";}
          if($row['no_hair_processing'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_hair_processing'>頭髪加工禁止</a></div>\n";}
          if($row['no_hair_dyeing'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_hair_dyeing'>髪染め禁止</a></div>\n";}
          if($row['no_perm'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_perm'>パーマ禁止</a></div>\n";}
          if($row['no_hair_iron'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_hair_iron'>ヘアアイロン禁止</a></div>\n";}
          if($row['no_french_braid'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_french_braid'>編み込み禁止</a></div>\n";}
          if($row['no_trim'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_trim'>剃りこみ禁止</a></div>\n";}
          if($row['no_shaved_sides'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_shaved_sides'>ツーブロック禁止</a></div>\n";}
          if($row['no_mohawk'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_mohawk'>モヒカン禁止</a></div>\n";}
          if($row['hair_length_restriction'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=hair_length_restriction'>髪の長さ規制</a></div>\n";}
          if($row['tie_long_hair'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=tie_long_hair'>長い髪は結ぶ</a></div>\n";}
          if($row['no_long_hair_for_men'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_long_hair_for_men'>男性の長髪禁止</a></div>\n";}
          if($row['no_eccentric_hairstyles'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_eccentric_hairstyles'>奇抜な髪形禁止</a></div>\n";}
          if($row['no_hairstyles_with_extremely_different_lengths_in_some_parts'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_hairstyles_with_extremely_different_lengths_in_some_parts'>一部だけ極端に長さの違う髪型禁止</a></div>\n";}
          if($row['no_hair_extensions'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_hair_extensions'>エクステンション禁止</a></div>\n";}
          if($row['no_wigs'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_wigs'>かつら禁止</a></div>\n";}
          if($row['forced_to_dye_hair_black'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=forced_to_dye_hair_black'>黒染め強要</a></div>\n";}
          if($row['submit_a_certificate_of_natural_hair'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=submit_a_certificate_of_natural_hair'>地毛証明書提出</a></div>\n";}
          if($row['no_beard'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_beard'>ひげ禁止</a></div>\n";}
          if($row['makeup_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=makeup_prohibited'>化粧禁止</a></div>\n";}
          if($row['mascara_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=mascara_prohibited'>マスカラ禁止</a></div>\n";}
          if($row['eyebrow_processing_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=eyebrow_processing_prohibited'>眉毛加工禁止</a></div>\n";}
          if($row['lipstick_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=lipstick_prohibited'>口紅禁止</a></div>\n";}
          if($row['colored_lip_balm_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=colored_lip_balm_prohibited'>色付きリップ禁止</a></div>\n";}
          if($row['colored_contacts_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=colored_contacts_prohibited'>カラーコンタクト禁止</a></div>\n";}
          if($row['false_eyelashes_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=false_eyelashes_prohibited'>つけまつげ禁止</a></div>\n";}
          if($row['no_fake_nails'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_fake_nails'>つけ爪禁止</a></div>\n";}
          if($row['manicure_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=manicure_prohibited'>マニキュア禁止</a></div>\n";}
          if($row['manicure_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=manicure_regulation'>マニキュア規制</a></div>\n";}
          if($row['pedicures_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=pedicures_prohibited'>ペディキュア禁止</a></div>\n";}
          if($row['tattoos_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=tattoos_prohibited'>タトゥー禁止</a></div>\n";}
          if($row['prohibition_of_motorcycle_commuting_to_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=prohibition_of_motorcycle_commuting_to_school'>バイク通学禁止</a></div>\n";}
          if($row['no_driving_to_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_driving_to_school'>自動車通学禁止</a></div>\n";}
          if($row['prohibition_of_obtaining_a_drivers_license'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=prohibition_of_obtaining_a_drivers_license'>運転免許証の取得禁止</a></div>\n";}
          if($row['travel_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=travel_regulation'>旅行規制</a></div>\n";}
          if($row['regulation_for_holding_meetings_outside_the_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=regulation_for_holding_meetings_outside_the_school'>校外の集会開催規制</a></div>\n";}
          if($row['forced_entry_into_club_activities'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=forced_entry_into_club_activities'>部活の強制入部</a></div>\n";}
          if($row['regulation_for_recruiting_money_outside_the_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=regulation_for_recruiting_money_outside_the_school'>校外の金品募集規制</a></div>\n";}
          if($row['regulations_on_membership_in_organizations_outside_the_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=regulations_on_membership_in_organizations_outside_the_school'>校外の団体加入規制</a></div>\n";}
          if($row['eating_and_drinking_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=eating_and_drinking_regulation'>飲食規制</a></div>\n";}
          if($row['no_eating_or_drinking_during_class'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_eating_or_drinking_during_class'>授業中の飲食禁止</a></div>\n";}
          if($row['no_part_time_jobs'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_part_time_jobs'>アルバイト禁止</a></div>\n";}
          if($row['prohibit_the_use_of_cell_phones'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=prohibit_the_use_of_cell_phones'>携帯使用禁止</a></div>\n";}
          
        echo "</div>\n"; //school_list_rule_keywords_erea
        echo "</div>\n"; //school_list_each_shool_erea

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
