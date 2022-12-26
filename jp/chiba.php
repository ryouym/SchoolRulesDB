<?php
$description = "校則を検索できる校則データベースサイトです。";
$title = "School Rules Database | TOP";
require("header.php");
?>
<body>
<?php include("header_bar.php"); ?> <!-- ヘッダーバーファイルの読み込み -->
<div class="wrapper">
  <div class="breadcrumb_trail_area"><p><a href="index.php">ホーム</a> > 学校名から探す</p></div>
  <h1>学校名から探す（高校）</h1>
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
      $sql = 'SELECT * FROM schoolrules_table Where school_category = "高校" ORDER BY school_displayorder asc'; //SELECT文を変数に格納
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
        if($row['vague_expressions_such_as_typical_of_high_school_students'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=vague_expressions_such_as_typical_of_high_school_students'>「高校生らしい」など曖昧な表現</a></div>\n";}
        if($row['uniform'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=uniform'>制服あり</a></div>\n";}
        if($row['uniform_distinction_between_men_and_women'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=uniform_distinction_between_men_and_women'>男女の制服区別</a></div>\n";}
        if($row['dress-down_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=dress-down_prohibited'>着崩し禁止</a></div>\n";}
        if($row['uniform_processing_prohibition'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=uniform_processing_prohibition'>制服加工禁止</a></div>\n";}
        if($row['skirt_length_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=skirt_length_regulation'>スカート丈規制</a></div>\n";}
        if($row['no_wearing_of_pants_under_skirts'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_wearing_of_pants_under_skirts'>スカートの下のズボン着用禁止</a></div>\n";}
        if($row['no_saggy_pants'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_saggy_pants'>腰ばき禁止</a></div>\n";}
        if($row['no_wearing_of_warm_clothes_in_class'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_wearing_of_warm_clothes_in_class'>授業中の防寒着着用禁止</a></div>\n";}
        if($row['no_wearing_of_warm_clothes_during_the_ceremony'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_wearing_of_warm_clothes_during_the_ceremony'>式典中の防寒着着用禁止</a></div>\n";}
        if($row['mixed_summer_and_winter_uniforms_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=mixed_summer_and_winter_uniforms_prohibited'>夏服・冬服の混合着用禁止</a></div>\n";}
        if($row['obligation_to_wear_blazer_at_the_beginning_and_end_of_class'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=obligation_to_wear_blazer_at_the_beginning_and_end_of_class'>授業開始・終了時のブレザー着用義務</a></div>\n";}
        if($row['designated_jacket'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_jacket'>指定ブレザー・ジャケット</a></div>\n";}
        if($row['designated_vest'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_vest'>指定ベスト</a></div>\n";}
        if($row['vest_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=vest_regulation'>ベスト規制</a></div>\n";}
        if($row['designated_shirt'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_shirt'>指定シャツ</a></div>\n";}
        if($row['shirt_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=shirt_regulation'>シャツ規制</a></div>\n";}
        if($row['designated_neckties'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_neckties'>指定ネクタイ</a></div>\n";}
        if($row['designated_ribbon'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_ribbon'>指定リボン</a></div>\n";}
        if($row['designated_scarf'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_scarf'>指定スカーフ</a></div>\n";}
        if($row['scarf_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=scarf_regulation'>スカーフ規制</a></div>\n";}
        if($row['designated_cardigan'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_cardigan'>指定カーディガン</a></div>\n";}
        if($row['cardigan_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=cardigan_regulation'>カーディガン規制</a></div>\n";}
        if($row['cardigan_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=cardigan_prohibited'>カーディガン禁止</a></div>\n";}
        if($row['designated_sweater'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_sweater'>指定セーター</a></div>\n";}
        if($row['sweater_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=sweater_prohibited'>セーター禁止</a></div>\n";}
        if($row['sweater_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=sweater_regulation'>セーター規制</a></div>\n";}
        if($row['polo_shirts_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=polo_shirts_prohibited'>ポロシャツ禁止</a></div>\n";}
        if($row['designated_polo_shirts'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_polo_shirts'>指定ポロシャツ</a></div>\n";}
        if($row['polo_shirts_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=polo_shirts_regulation'>ポロシャツ規制</a></div>\n";}
        if($row['blouse_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=blouse_prohibited'>ブラウス禁止</a></div>\n";}
        if($row['hoodie_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=hoodie_prohibited'>パーカー禁止</a></div>\n";}
        if($row['sweatshirt_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=sweatshirt_prohibited'>スウェット禁止</a></div>\n";}
        if($row['designated_jersey'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_jersey'>指定ジャージ</a></div>\n";}
        if($row['jersey_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=jersey_prohibited'>ジャージ禁止</a></div>\n";}
        if($row['turtleneck_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=turtleneck_prohibited'>タートルネック禁止</a></div>\n";}
        if($row['piste_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=piste_prohibited'>ピステ禁止</a></div>\n";}
        if($row['scarf_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=scarf_prohibited'>マフラー規制</a></div>\n";}
        if($row['designated_coat'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_coat'>指定コート</a></div>\n";}
        if($row['coat_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=coat_regulation'>コート規制</a></div>\n";}
        if($row['raincoat_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=raincoat_regulation'>レインコート規制</a></div>\n";}
        if($row['no_wearing_of_winter_clothes_indoors'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_wearing_of_winter_clothes_indoors'>屋内での防寒具着用禁止</a></div>\n";}
        if($row['designated_pants'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_pants'>指定ズボン</a></div>\n";}
        if($row['pants_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=pants_regulation'>ズボン規制</a></div>\n";}
        if($row['designated_skirt'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_skirt'>指定スカート</a></div>\n";}
        if($row['skirt_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=skirt_regulation'>スカート規制</a></div>\n";}
        if($row['designated_socks'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_socks'>指定靴下</a></div>\n";}
        if($row['socks_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=socks_regulation'>靴下規制</a></div>\n";}
        if($row['tights_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=tights_regulation'>タイツ・ストッキング規制</a></div>\n";}
        if($row['ankle_socks_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=ankle_socks_prohibited'>アンクルソックス禁止</a></div>\n";}
        if($row['over_the_knee_socks_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=over_the_knee_socks_prohibited'>ニーハイソックス禁止</a></div>\n";}
        if($row['leggings_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=leggings_prohibited'>レギンス禁止</a></div>\n";}
        if($row['leg_warmers_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=leg_warmers_prohibited'>レッグウォーマー禁止</a></div>\n";}
        if($row['loose_socks_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=loose_socks_prohibited'>ルーズソックス禁止</a></div>\n";}
        if($row['designated_belt'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_belt'>指定ベルト</a></div>\n";}
        if($row['belt_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=belt_regulation'>ベルト規制</a></div>\n";}
        if($row['suspenders_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=suspenders_prohibited'>サスペンダー禁止</a></div>\n";}
        if($row['underwear_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=underwear_regulation'>下着規制</a></div>\n";}
        if($row['designated_gym_uniform'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_gym_uniform'>指定体操服</a></div>\n";}
        if($row['designated_gym_shoes'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_gym_shoes'>指定体操靴</a></div>\n";}
        if($row['designated_swimsuits'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_swimsuits'>指定水着</a></div>\n";}
        if($row['hat_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=hat_prohibited'>帽子禁止</a></div>\n";}
        if($row['designated_hat'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_hat'>帽子規制</a></div>\n";}
        if($row['designated_bag'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_bag'>指定鞄</a></div>\n";}
        if($row['bag_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=bag_regulation'>鞄規制</a></div>\n";}
        if($row['no_processing_of_bags'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_processing_of_bags'>鞄の加工禁止</a></div>\n";}
        if($row['no_sunglasses'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_sunglasses'>サングラス禁止</a></div>\n";}
        if($row['glove_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=glove_regulation'>手袋規制</a></div>\n";}
        if($row['face_mask_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=face_mask_regulation'>マスク規制</a></div>\n";}
        if($row['shoe_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=shoe_regulation'>靴規制</a></div>\n";}
        if($row['designated_sports_shoes'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_sports_shoes'>指定運動靴</a></div>\n";}
        if($row['designated_indoor_shoes'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=designated_indoor_shoes'>指定上履き</a></div>\n";}
        if($row['indoor_shoes_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=indoor_shoes_regulation'>上履き規制</a></div>\n";}
        if($row['heel_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=heel_prohibited'>ヒール禁止</a></div>\n";}
        if($row['geta_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=geta_prohibited'>下駄禁止</a></div>\n";}
        if($row['sandals_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=sandals_prohibited'>サンダル禁止</a></div>\n";}
        if($row['no_processing_of_shoes'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_processing_of_shoes'>靴の加工禁止</a></div>\n";}
        if($row['ornament_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=ornament_prohibited'>装飾品禁止</a></div>\n";}
        if($row['ornament_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=ornament_regulation'>装飾品規制</a></div>\n";}
        if($row['ring_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=ring_prohibited'>指輪禁止</a></div>\n";}
        if($row['earring_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=earring_prohibited'>イヤリング禁止</a></div>\n";}
        if($row['piercings_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=piercings_prohibited'>ピアス禁止</a></div>\n";}
        if($row['piercing_hole_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=piercing_hole_prohibited'>ピアス穴禁止</a></div>\n";}
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
        if($row['no_ponytails'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_ponytails'>ポニーテール禁止</a></div>\n";}
        if($row['no_eccentric_hairstyles'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_eccentric_hairstyles'>奇抜な髪形禁止</a></div>\n";}
        if($row['no_hairstyles_with_extremely_different_lengths_in_some_parts'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_hairstyles_with_extremely_different_lengths_in_some_parts'>一部だけ極端に長さの違う髪型禁止</a></div>\n";}
        if($row['no_hair_extensions'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_hair_extensions'>エクステンション禁止</a></div>\n";}
        if($row['no_wigs'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_wigs'>かつら禁止</a></div>\n";}
        if($row['no_hair_accessories'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_hair_accessories'>ヘアアクセサリー禁止</a></div>\n";}
        if($row['hair_clip_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=hair_clip_regulation'>髪留め規制</a></div>\n";}
        if($row['hair_elastic_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=hair_elastic_regulation'>ヘアゴム規制</a></div>\n";}
        if($row['forced_to_dye_hair_black'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=forced_to_dye_hair_black'>黒染め強要</a></div>\n";}
        if($row['submit_a_certificate_of_natural_hair'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=submit_a_certificate_of_natural_hair'>地毛証明書提出</a></div>\n";}
        if($row['no_beard'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_beard'>ひげ禁止</a></div>\n";}
        if($row['makeup_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=makeup_prohibited'>化粧禁止</a></div>\n";}
        if($row['cosmetic_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=cosmetic_regulation'>化粧規制</a></div>\n";}
        if($row['mascara_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=mascara_prohibited'>マスカラ禁止</a></div>\n";}
        if($row['eyebrow_processing_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=eyebrow_processing_prohibited'>眉毛加工禁止</a></div>\n";}
        if($row['lipstick_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=lipstick_prohibited'>口紅禁止</a></div>\n";}
        if($row['colored_lip_balm_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=colored_lip_balm_prohibited'>色付きリップ禁止</a></div>\n";}
        if($row['lip_balm_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=lip_balm_regulation'>リップクリーム規制</a></div>\n";}
        if($row['colored_contacts_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=colored_contacts_prohibited'>カラーコンタクト禁止</a></div>\n";}
        if($row['false_eyelashes_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=false_eyelashes_prohibited'>つけまつげ禁止</a></div>\n";}
        if($row['no_fake_nails'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_fake_nails'>つけ爪禁止</a></div>\n";}
        if($row['manicure_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=manicure_prohibited'>マニキュア禁止</a></div>\n";}
        if($row['manicure_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=manicure_regulation'>マニキュア規制</a></div>\n";}
        if($row['pedicures_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=pedicures_prohibited'>ペディキュア禁止</a></div>\n";}
        if($row['tattoos_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=tattoos_prohibited'>タトゥー禁止</a></div>\n";}
        if($row['eye_putti_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=eye_putti_prohibited'>アイプチ禁止</a></div>\n";}
        if($row['perfume_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=perfume_prohibited'>香水禁止</a></div>\n";}
        if($row['prohibition_of_bicycle_commuting_to_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=prohibition_of_bicycle_commuting_to_school'>自転車通学禁止</a></div>\n";}
        if($row['prohibition_of_motorcycle_commuting_to_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=prohibition_of_motorcycle_commuting_to_school'>バイク通学禁止</a></div>\n";}
        if($row['no_driving_to_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_driving_to_school'>自動車通学禁止</a></div>\n";}
        if($row['prohibition_of_obtaining_a_drivers_license'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=prohibition_of_obtaining_a_drivers_license'>運転免許証の取得禁止</a></div>\n";}
        if($row['restrictions_on_car_pickups_and_drop_offs'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=restrictions_on_car_pickups_and_drop_offs'>車送迎規制</a></div>\n";}
        if($row['travel_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=travel_regulation'>旅行規制</a></div>\n";}
        if($row['prohibition_of_staying_at_a_friends_house'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=prohibition_of_staying_at_a_friends_house'>友人宅の宿泊禁止</a></div>\n";}
        if($row['prohibition_ofholding_meetings_outside_the_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=prohibition_ofholding_meetings_outside_the_school'>校外の集会開催禁止</a></div>\n";}
        if($row['regulation_for_holding_meetings_outside_the_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=regulation_for_holding_meetings_outside_the_school'>校外の集会開催規制</a></div>\n";}
        if($row['regulation_for_participation_in_classes_outside_the_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=regulation_for_participation_in_classes_outside_the_school'>校外の講習参加禁止</a></div>\n";}
        if($row['regulation_entry_to_restaurants'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=regulation_entry_to_restaurants'>飲食店への入店規制</a></div>\n";}
        if($row['no_shopping_or_eating_on_the_way_to_and_from_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_shopping_or_eating_on_the_way_to_and_from_school'>登下校時の買い食い禁止</a></div>\n";}
        if($row['no_detours_on_the_way_to_and_from_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_detours_on_the_way_to_and_from_school'>登下校時の寄り道禁止</a></div>\n";}
        if($row['restrictions_on_entry_to_movie_theaters_and_theaters'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=restrictions_on_entry_to_movie_theaters_and_theaters'>映画館・劇場への入場規制</a></div>\n";}
        if($row['no_social_gathering'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_social_gathering'>懇親会禁止</a></div>\n";}
        if($row['forced_entry_into_club_activities'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=forced_entry_into_club_activities'>部活の強制入部</a></div>\n";}
        if($row['regulation_for_recruiting_money_outside_the_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=regulation_for_recruiting_money_outside_the_school'>校外の金品募集規制</a></div>\n";}
        if($row['regulation_on_sales_of_goods_outside_the_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=regulation_on_sales_of_goods_outside_the_school'>校外の物品販売規制</a></div>\n";}
        if($row['regulations_on_membership_in_organizations_outside_the_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=regulations_on_membership_in_organizations_outside_the_school'>校外の団体加入規制</a></div>\n";}
        if($row['sunscreen_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=sunscreen_regulation'>日焼け止め規制</a></div>\n";}
        if($row['hand_cream_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=hand_cream_regulation'>ハンドクリーム規制</a></div>\n";}
        if($row['deodorant_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=deodorant_regulation'>制汗剤規制</a></div>\n";}
        if($row['prohibit_the_use_of_elevators_in_the_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=prohibit_the_use_of_elevators_in_the_school'>校内エレベーター使用禁止</a></div>\n";}
        if($row['no_loitering_on_school_grounds'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_loitering_on_school_grounds'>校内を歩き回ること禁止</a></div>\n";}
        if($row['no_entry_to_other_classrooms'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_entry_to_other_classrooms'>他クラス入室禁止</a></div>\n";}
        if($row['regulation_of_gender_relations'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=regulation_of_gender_relations'>男女交際規制</a></div>\n";}
        if($row['eating_and_drinking_regulation'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=eating_and_drinking_regulation'>飲食規制</a></div>\n";}
        if($row['no_eating_or_drinking_during_class'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_eating_or_drinking_during_class'>授業中の飲食禁止</a></div>\n";}
        if($row['no_eating_or_drinking_in_the_classroom'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_eating_or_drinking_in_the_classroom'>教室内飲食禁止</a></div>\n";}
        if($row['no_part_time_jobs'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_part_time_jobs'>アルバイト禁止</a></div>\n";}
        if($row['no_games_in_the_school'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_games_in_the_school'>校内のゲーム禁止</a></div>\n";}
        if($row['confiscation_of_belongings'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=confiscation_of_belongings'>所持品の没収</a></div>\n";}
        if($row['no_cup_noodles'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_cup_noodles'>カップ麺禁止</a></div>\n";}
        if($row['no_portable_music_players'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_portable_music_players'>携帯音楽プレーヤー禁止</a></div>\n";}
        if($row['no_comics'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_comics'>漫画禁止</a></div>\n";}
        if($row['no_magazines'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_magazines'>雑誌禁止</a></div>\n";}
        if($row['free_time_should_be_spent_studying_in_the_library'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=free_time_should_be_spent_studying_in_the_library'>空き時間は図書館で学習すること</a></div>\n";}
        if($row['no_electric_appliances'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=no_electric_appliances'>家電製品禁止</a></div>\n";}
        if($row['outlet_use_prohibited'] == 1){echo "<div class='school_list_rule_keywords'><a href='https://www.schoolrulesdb.com/tag_item.php?tag_id=outlet_use_prohibited'>コンセント使用禁止</a></div>\n";}
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
