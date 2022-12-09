<?php
$description = "校則を検索できる校則データベースサイトです。";
$title = "School Rules Database | TOP";
require("header.php");
?>
<body>
<?php include("header_bar.php"); ?> <!-- ヘッダーバーファイルの読み込み -->
<div class="wrapper">
  <div class="breadcrumb_trail_area"><p><a href="index.php">ホーム</a> > <a href="tag_list.php">校則の内容から探す</a> > 検索結果</p></div>
  <div class="school_list_area">
    <?php
      //エラーメッセージの表示
      // ini_set("display_errors", "On");

      // 
      $tag_id_passed_from_previous_page = $_GET['tag_id'];
      if($tag_id_passed_from_previous_page == 'uniform'){echo '<div class="prefecture_name"><h1>制服あり</h1></div>';}
      if($tag_id_passed_from_previous_page == 'uniform_distinction_between_men_and_women'){echo '<div class="prefecture_name"><h1>男女の制服区別</h1></div>';}
      if($tag_id_passed_from_previous_page == 'dress_down_prohibited'){echo '<div class="prefecture_name"><h1>着崩し禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'uniform_processing_prohibition'){echo '<div class="prefecture_name"><h1>制服加工禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'skirt_length_regulation'){echo '<div class="prefecture_name"><h1>スカート丈規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_wearing_of_pants_under_skirts'){echo '<div class="prefecture_name"><h1>スカートの下のズボン着用禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_saggy_pants'){echo '<div class="prefecture_name"><h1>腰ばき禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_wearing_of_warm_clothes_in_class'){echo '<div class="prefecture_name"><h1>授業中の防寒着着用禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_wearing_of_warm_clothes_during_the_ceremony'){echo '<div class="prefecture_name"><h1>式典中の防寒着着用禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_jacket'){echo '<div class="prefecture_name"><h1>指定ブレザー・ジャケット</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_vest'){echo '<div class="prefecture_name"><h1>指定ベスト</h1></div>';}
      if($tag_id_passed_from_previous_page == 'vest_regulation'){echo '<div class="prefecture_name"><h1>ベスト規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_shirt'){echo '<div class="prefecture_name"><h1>指定シャツ</h1></div>';}
      if($tag_id_passed_from_previous_page == 'shirt_regulation'){echo '<div class="prefecture_name"><h1>シャツ規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_neckties'){echo '<div class="prefecture_name"><h1>指定ネクタイ</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_ribbon'){echo '<div class="prefecture_name"><h1>指定リボン</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_scarf'){echo '<div class="prefecture_name"><h1>指定スカーフ</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_cardigan'){echo '<div class="prefecture_name"><h1>指定カーディガン</h1></div>';}
      if($tag_id_passed_from_previous_page == 'cardigan_regulation'){echo '<div class="prefecture_name"><h1>カーディガン規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'cardigan_prohibited'){echo '<div class="prefecture_name"><h1>カーディガン禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_sweater'){echo '<div class="prefecture_name"><h1>指定セーター</h1></div>';}
      if($tag_id_passed_from_previous_page == 'sweater_prohibited'){echo '<div class="prefecture_name"><h1>セーター禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'sweater_regulation'){echo '<div class="prefecture_name"><h1>セーター規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_polo_shirts'){echo '<div class="prefecture_name"><h1>指定ポロシャツ</h1></div>';}
      if($tag_id_passed_from_previous_page == 'polo_shirts_regulation'){echo '<div class="prefecture_name"><h1>ポロシャツ規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'hoodie_prohibited'){echo '<div class="prefecture_name"><h1>パーカー禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'sweatshirt_prohibited'){echo '<div class="prefecture_name"><h1>スウェット禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'jersey_prohibited'){echo '<div class="prefecture_name"><h1>ジャージ禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'scarf_prohibited'){echo '<div class="prefecture_name"><h1>マフラー規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_coat'){echo '<div class="prefecture_name"><h1>指定コート</h1></div>';}
      if($tag_id_passed_from_previous_page == 'coat_regulation'){echo '<div class="prefecture_name"><h1>コート規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'raincoat_regulation'){echo '<div class="prefecture_name"><h1>レインコート規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_wearing_of_winter_clothes_indoors'){echo '<div class="prefecture_name"><h1>屋内での防寒具着用禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_pants'){echo '<div class="prefecture_name"><h1>指定ズボン</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_skirt'){echo '<div class="prefecture_name"><h1>指定スカート</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_socks'){echo '<div class="prefecture_name"><h1>指定靴下</h1></div>';}
      if($tag_id_passed_from_previous_page == 'socks_regulation'){echo '<div class="prefecture_name"><h1>靴下規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'tights_regulation'){echo '<div class="prefecture_name"><h1>タイツ・ストッキング規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'ankle_socks_prohibited'){echo '<div class="prefecture_name"><h1>アンクルソックス禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'over_the_knee_socks_prohibited'){echo '<div class="prefecture_name"><h1>ニーハイソックス禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'leggings_prohibited'){echo '<div class="prefecture_name"><h1>レギンス禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'leg_warmers_prohibited'){echo '<div class="prefecture_name"><h1>レッグウォーマー禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'loose_socks_prohibited'){echo '<div class="prefecture_name"><h1>ルーズソックス禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'belt_regulation'){echo '<div class="prefecture_name"><h1>ベルト規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'suspenders_prohibited'){echo '<div class="prefecture_name"><h1>サスペンダー禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'underwear_regulation'){echo '<div class="prefecture_name"><h1>下着規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_gym_uniform'){echo '<div class="prefecture_name"><h1>指定体操服</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_gym_shoes'){echo '<div class="prefecture_name"><h1>指定体操靴</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_bag'){echo '<div class="prefecture_name"><h1>指定鞄</h1></div>';}
      if($tag_id_passed_from_previous_page == 'bag_regulation'){echo '<div class="prefecture_name"><h1>鞄規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_processing_of_bags'){echo '<div class="prefecture_name"><h1>鞄の加工禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'shoe_regulation'){echo '<div class="prefecture_name"><h1>靴規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_sports_shoes'){echo '<div class="prefecture_name"><h1>指定運動靴</h1></div>';}
      if($tag_id_passed_from_previous_page == 'designated_indoor_shoes'){echo '<div class="prefecture_name"><h1>指定上履き</h1></div>';}
      if($tag_id_passed_from_previous_page == 'heel_prohibited'){echo '<div class="prefecture_name"><h1>ヒール禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'geta_prohibited'){echo '<div class="prefecture_name"><h1>下駄禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'sandals_prohibited'){echo '<div class="prefecture_name"><h1>サンダル禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'ornament_prohibited'){echo '<div class="prefecture_name"><h1>装飾品禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'ornament_regulation'){echo '<div class="prefecture_name"><h1>装飾品規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'ring_prohibited'){echo '<div class="prefecture_name"><h1>指輪禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'earring_prohibited'){echo '<div class="prefecture_name"><h1>イヤリング禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'piercings_prohibited'){echo '<div class="prefecture_name"><h1>ピアス禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'necklace_prohibited'){echo '<div class="prefecture_name"><h1>ネックレス禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'bracelet_prohibited'){echo '<div class="prefecture_name"><h1>ブレスレット禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_hair_processing'){echo '<div class="prefecture_name"><h1>頭髪加工禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_hair_dyeing'){echo '<div class="prefecture_name"><h1>髪染め禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_perm'){echo '<div class="prefecture_name"><h1>パーマ禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_hair_iron'){echo '<div class="prefecture_name"><h1>ヘアアイロン禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_french_braid'){echo '<div class="prefecture_name"><h1>編み込み禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_trim'){echo '<div class="prefecture_name"><h1>剃りこみ禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_shaved_sides'){echo '<div class="prefecture_name"><h1>ツーブロック禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_mohawk'){echo '<div class="prefecture_name"><h1>モヒカン禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'hair_length_restriction'){echo '<div class="prefecture_name"><h1>髪の長さ規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'tie_long_hair'){echo '<div class="prefecture_name"><h1>長い髪は結ぶ</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_long_hair_for_men'){echo '<div class="prefecture_name"><h1>男性の長髪禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_eccentric_hairstyles'){echo '<div class="prefecture_name"><h1>奇抜な髪形禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_hairstyles_with_extremely_different_lengths_in_some_parts'){echo '<div class="prefecture_name"><h1>一部だけ極端に長さの違う髪型禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_hair_extensions'){echo '<div class="prefecture_name"><h1>エクステンション禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_wigs'){echo '<div class="prefecture_name"><h1>かつら禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'forced_to_dye_hair_black'){echo '<div class="prefecture_name"><h1>黒染め強要</h1></div>';}
      if($tag_id_passed_from_previous_page == 'submit_a_certificate_of_natural_hair'){echo '<div class="prefecture_name"><h1>地毛証明書提出</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_beard'){echo '<div class="prefecture_name"><h1>ひげ禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'makeup_prohibited'){echo '<div class="prefecture_name"><h1>化粧禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'mascara_prohibited'){echo '<div class="prefecture_name"><h1>マスカラ禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'eyebrow_processing_prohibited'){echo '<div class="prefecture_name"><h1>眉毛加工禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'lipstick_prohibited'){echo '<div class="prefecture_name"><h1>口紅禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'colored_lip_balm_prohibited'){echo '<div class="prefecture_name"><h1>色付きリップ禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'colored_contacts_prohibited'){echo '<div class="prefecture_name"><h1>カラーコンタクト禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'false_eyelashes_prohibited'){echo '<div class="prefecture_name"><h1>つけまつげ禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_fake_nails'){echo '<div class="prefecture_name"><h1>つけ爪禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'manicure_prohibited'){echo '<div class="prefecture_name"><h1>マニキュア禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'manicure_regulation'){echo '<div class="prefecture_name"><h1>マニキュア規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'pedicures_prohibited'){echo '<div class="prefecture_name"><h1>ペディキュア禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'tattoos_prohibited'){echo '<div class="prefecture_name"><h1>タトゥー禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'prohibition_of_motorcycle_commuting_to_school'){echo '<div class="prefecture_name"><h1>バイク通学禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_driving_to_school'){echo '<div class="prefecture_name"><h1>自動車通学禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'prohibition_of_obtaining_a_drivers_license'){echo '<div class="prefecture_name"><h1>運転免許証の取得禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'travel_regulation'){echo '<div class="prefecture_name"><h1>旅行規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'regulation_for_holding_meetings_outside_the_school'){echo '<div class="prefecture_name"><h1>校外の集会開催規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'forced_entry_into_club_activities'){echo '<div class="prefecture_name"><h1>部活の強制入部</h1></div>';}
      if($tag_id_passed_from_previous_page == 'regulation_for_recruiting_money_outside_the_school'){echo '<div class="prefecture_name"><h1>校外の金品募集規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'regulations_on_membership_in_organizations_outside_the_school'){echo '<div class="prefecture_name"><h1>校外の団体加入規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'eating_and_drinking_regulation'){echo '<div class="prefecture_name"><h1>飲食規制</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_eating_or_drinking_during_class'){echo '<div class="prefecture_name"><h1>授業中の飲食禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'no_part_time_jobs'){echo '<div class="prefecture_name"><h1>アルバイト禁止</h1></div>';}
      if($tag_id_passed_from_previous_page == 'prohibit_the_use_of_cell_phones'){echo '<div class="prefecture_name"><h1>携帯使用禁止</h1></div>';}

      
      require_once('db_connect.php');
      try {
        //データベースに接続
        $dbh = db_connect();

        //例外処理。PDOのエラーレポートを表示
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //データベースからデータを取得
        $sql = 'SELECT * FROM schoolrules_table WHERE ';
        if($tag_id_passed_from_previous_page == 'uniform'){$sql .= 'uniform = 1';}
        if($tag_id_passed_from_previous_page == 'uniform_distinction_between_men_and_women'){$sql .= 'uniform_distinction_between_men_and_women = 1';}
        if($tag_id_passed_from_previous_page == 'dress_down_prohibited'){$sql .= 'dress_down_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'uniform_processing_prohibition'){$sql .= 'uniform_processing_prohibition = 1';}
        if($tag_id_passed_from_previous_page == 'skirt_length_regulation'){$sql .= 'skirt_length_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'no_wearing_of_pants_under_skirts'){$sql .= 'no_wearing_of_pants_under_skirts = 1';}
        if($tag_id_passed_from_previous_page == 'no_saggy_pants'){$sql .= 'no_saggy_pants = 1';}
        if($tag_id_passed_from_previous_page == 'no_wearing_of_warm_clothes_in_class'){$sql .= 'no_wearing_of_warm_clothes_in_class = 1';}
        if($tag_id_passed_from_previous_page == 'no_wearing_of_warm_clothes_during_the_ceremony'){$sql .= 'no_wearing_of_warm_clothes_during_the_ceremony = 1';}
        if($tag_id_passed_from_previous_page == 'designated_jacket'){$sql .= 'designated_jacket = 1';}
        if($tag_id_passed_from_previous_page == 'designated_vest'){$sql .= 'designated_vest = 1';}
        if($tag_id_passed_from_previous_page == 'vest_regulation'){$sql .= 'vest_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'designated_shirt'){$sql .= 'designated_shirt = 1';}
        if($tag_id_passed_from_previous_page == 'shirt_regulation'){$sql .= 'shirt_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'designated_neckties'){$sql .= 'designated_neckties = 1';}
        if($tag_id_passed_from_previous_page == 'designated_ribbon'){$sql .= 'designated_ribbon = 1';}
        if($tag_id_passed_from_previous_page == 'designated_scarf'){$sql .= 'designated_scarf = 1';}
        if($tag_id_passed_from_previous_page == 'designated_cardigan'){$sql .= 'designated_cardigan = 1';}
        if($tag_id_passed_from_previous_page == 'cardigan_regulation'){$sql .= 'cardigan_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'cardigan_prohibited'){$sql .= 'cardigan_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'designated_sweater'){$sql .= 'designated_sweater = 1';}
        if($tag_id_passed_from_previous_page == 'sweater_prohibited'){$sql .= 'sweater_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'sweater_regulation'){$sql .= 'sweater_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'polo_shirts_prohibited'){$sql .= 'polo_shirts_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'designated_polo_shirts'){$sql .= 'designated_polo_shirts = 1';}
        if($tag_id_passed_from_previous_page == 'polo_shirts_regulation'){$sql .= 'polo_shirts_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'blouse_prohibited'){$sql .= 'blouse_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'hoodie_prohibited'){$sql .= 'hoodie_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'sweatshirt_prohibited'){$sql .= 'sweatshirt_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'jersey_prohibited'){$sql .= 'jersey_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'turtleneck_prohibited'){$sql .= 'turtleneck_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'piste_prohibited'){$sql .= 'piste_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'scarf_prohibited'){$sql .= 'scarf_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'designated_coat'){$sql .= 'designated_coat = 1';}
        if($tag_id_passed_from_previous_page == 'coat_regulation'){$sql .= 'coat_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'raincoat_regulation'){$sql .= 'raincoat_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'no_wearing_of_winter_clothes_indoors'){$sql .= 'no_wearing_of_winter_clothes_indoors = 1';}
        if($tag_id_passed_from_previous_page == 'designated_pants'){$sql .= 'designated_pants = 1';}
        if($tag_id_passed_from_previous_page == 'designated_skirt'){$sql .= 'designated_skirt = 1';}
        if($tag_id_passed_from_previous_page == 'designated_socks'){$sql .= 'designated_socks = 1';}
        if($tag_id_passed_from_previous_page == 'socks_regulation'){$sql .= 'socks_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'tights_regulation'){$sql .= 'tights_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'ankle_socks_prohibited'){$sql .= 'ankle_socks_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'over_the_knee_socks_prohibited'){$sql .= 'over_the_knee_socks_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'leggings_prohibited'){$sql .= 'leggings_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'leg_warmers_prohibited'){$sql .= 'leg_warmers_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'loose_socks_prohibited'){$sql .= 'loose_socks_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'belt_regulation'){$sql .= 'belt_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'suspenders_prohibited'){$sql .= 'suspenders_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'underwear_regulation'){$sql .= 'underwear_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'designated_gym_uniform'){$sql .= 'designated_gym_uniform = 1';}
        if($tag_id_passed_from_previous_page == 'designated_gym_shoes'){$sql .= 'designated_gym_shoes = 1';}
        if($tag_id_passed_from_previous_page == 'hat_prohibited'){$sql .= 'hat_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'designated_bag'){$sql .= 'designated_bag = 1';}
        if($tag_id_passed_from_previous_page == 'bag_regulation'){$sql .= 'bag_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'no_processing_of_bags'){$sql .= 'no_processing_of_bags = 1';}
        if($tag_id_passed_from_previous_page == 'no_sunglasses'){$sql .= 'no_sunglasses = 1';}
        if($tag_id_passed_from_previous_page == 'shoe_regulation'){$sql .= 'shoe_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'designated_sports_shoes'){$sql .= 'designated_sports_shoes = 1';}
        if($tag_id_passed_from_previous_page == 'designated_indoor_shoes'){$sql .= 'designated_indoor_shoes = 1';}
        if($tag_id_passed_from_previous_page == 'heel_prohibited'){$sql .= 'heel_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'geta_prohibited'){$sql .= 'geta_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'sandals_prohibited'){$sql .= 'sandals_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'no_processing_of_shoes'){$sql .= 'no_processing_of_shoes = 1';}
        if($tag_id_passed_from_previous_page == 'makeup_prohibited'){$sql .= 'makeup_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'cosmetic_regulation'){$sql .= 'cosmetic_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'mascara_prohibited'){$sql .= 'mascara_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'eyebrow_processing_prohibited'){$sql .= 'eyebrow_processing_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'lipstick_prohibited'){$sql .= 'lipstick_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'colored_lip_balm_prohibited'){$sql .= 'colored_lip_balm_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'colored_contacts_prohibited'){$sql .= 'colored_contacts_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'false_eyelashes_prohibited'){$sql .= 'false_eyelashes_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'no_fake_nails'){$sql .= 'no_fake_nails = 1';}
        if($tag_id_passed_from_previous_page == 'manicure_prohibited'){$sql .= 'manicure_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'manicure_regulation'){$sql .= 'manicure_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'pedicures_prohibited'){$sql .= 'pedicures_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'tattoos_prohibited'){$sql .= 'tattoos_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'eye_putti_prohibited'){$sql .= 'eye_putti_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'perfume_prohibited'){$sql .= 'perfume_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'ornament_prohibited'){$sql .= 'ornament_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'ornament_regulation'){$sql .= 'ornament_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'ring_prohibited'){$sql .= 'ring_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'earring_prohibited'){$sql .= 'earring_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'piercings_prohibited'){$sql .= 'piercings_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'necklace_prohibited'){$sql .= 'necklace_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'bracelet_prohibited'){$sql .= 'bracelet_prohibited = 1';}
        if($tag_id_passed_from_previous_page == 'no_hair_processing'){$sql .= 'no_hair_processing = 1';}
        if($tag_id_passed_from_previous_page == 'no_hair_dyeing'){$sql .= 'no_hair_dyeing = 1';}
        if($tag_id_passed_from_previous_page == 'no_perm'){$sql .= 'no_perm = 1';}
        if($tag_id_passed_from_previous_page == 'no_hair_iron'){$sql .= 'no_hair_iron = 1';}
        if($tag_id_passed_from_previous_page == 'no_french_braid'){$sql .= 'no_french_braid = 1';}
        if($tag_id_passed_from_previous_page == 'no_trim'){$sql .= 'no_trim = 1';}
        if($tag_id_passed_from_previous_page == 'no_shaved_sides'){$sql .= 'no_shaved_sides = 1';}
        if($tag_id_passed_from_previous_page == 'no_mohawk'){$sql .= 'no_mohawk = 1';}
        if($tag_id_passed_from_previous_page == 'hair_length_restriction'){$sql .= 'hair_length_restriction = 1';}
        if($tag_id_passed_from_previous_page == 'tie_long_hair'){$sql .= 'tie_long_hair = 1';}
        if($tag_id_passed_from_previous_page == 'no_long_hair_for_men'){$sql .= 'no_long_hair_for_men = 1';}
        if($tag_id_passed_from_previous_page == 'no_eccentric_hairstyles'){$sql .= 'no_eccentric_hairstyles = 1';}
        if($tag_id_passed_from_previous_page == 'no_hairstyles_with_extremely_different_lengths_in_some_parts'){$sql .= 'no_hairstyles_with_extremely_different_lengths_in_some_parts = 1';}
        if($tag_id_passed_from_previous_page == 'no_hair_extensions'){$sql .= 'no_hair_extensions = 1';}
        if($tag_id_passed_from_previous_page == 'no_wigs'){$sql .= 'no_wigs = 1';}
        if($tag_id_passed_from_previous_page == 'no_hair_accessories'){$sql .= 'no_hair_accessories = 1';}
        if($tag_id_passed_from_previous_page == 'hair_clip_regulation'){$sql .= 'hair_clip_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'forced_to_dye_hair_black'){$sql .= 'forced_to_dye_hair_black = 1';}
        if($tag_id_passed_from_previous_page == 'submit_a_certificate_of_natural_hair'){$sql .= 'submit_a_certificate_of_natural_hair = 1';}
        if($tag_id_passed_from_previous_page == 'no_beard'){$sql .= 'no_beard = 1';}
        if($tag_id_passed_from_previous_page == 'prohibition_of_bicycle_commuting_to_school'){$sql .= 'prohibition_of_bicycle_commuting_to_school = 1';}
        if($tag_id_passed_from_previous_page == 'prohibition_of_motorcycle_commuting_to_school'){$sql .= 'prohibition_of_motorcycle_commuting_to_school = 1';}
        if($tag_id_passed_from_previous_page == 'no_driving_to_school'){$sql .= 'no_driving_to_school = 1';}
        if($tag_id_passed_from_previous_page == 'prohibition_of_obtaining_a_drivers_license'){$sql .= 'prohibition_of_obtaining_a_drivers_license = 1';}
        if($tag_id_passed_from_previous_page == 'prohibit_the_use_of_elevators_in_the_school'){$sql .= 'prohibit_the_use_of_elevators_in_the_school = 1';}
        if($tag_id_passed_from_previous_page == 'regulation_of_gender_relations'){$sql .= 'regulation_of_gender_relations = 1';}
        if($tag_id_passed_from_previous_page == 'eating_and_drinking_regulation'){$sql .= 'eating_and_drinking_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'no_eating_or_drinking_during_class'){$sql .= 'no_eating_or_drinking_during_class = 1';}
        if($tag_id_passed_from_previous_page == 'no_eating_or_drinking_in_the_classroom'){$sql .= 'no_eating_or_drinking_in_the_classroom = 1';}
        if($tag_id_passed_from_previous_page == 'no_part_time_jobs'){$sql .= 'no_part_time_jobs = 1';}
        if($tag_id_passed_from_previous_page == 'no_games_in_the_school'){$sql .= 'no_games_in_the_school = 1';}
        if($tag_id_passed_from_previous_page == 'confiscation_of_belongings'){$sql .= 'confiscation_of_belongings = 1';}
        if($tag_id_passed_from_previous_page == 'no_cup_noodles'){$sql .= 'no_cup_noodles = 1';}
        if($tag_id_passed_from_previous_page == 'no_portable_music_players'){$sql .= 'no_portable_music_players = 1';}
        if($tag_id_passed_from_previous_page == 'no_comics'){$sql .= 'no_comics = 1';}
        if($tag_id_passed_from_previous_page == 'no_magazines'){$sql .= 'no_magazines = 1';}
        if($tag_id_passed_from_previous_page == 'no_electric_appliances'){$sql .= 'no_electric_appliances = 1';}
        if($tag_id_passed_from_previous_page == 'prohibit_the_use_of_cell_phones'){$sql .= 'prohibit_the_use_of_cell_phones = 1';}
        if($tag_id_passed_from_previous_page == 'travel_regulation'){$sql .= 'travel_regulation = 1';}
        if($tag_id_passed_from_previous_page == 'prohibition_ofholding_meetings_outside_the_school'){$sql .= 'prohibition_ofholding_meetings_outside_the_school = 1';}
        if($tag_id_passed_from_previous_page == 'regulation_for_holding_meetings_outside_the_school'){$sql .= 'regulation_for_holding_meetings_outside_the_school = 1';}
        if($tag_id_passed_from_previous_page == 'regulation_for_participation_in_classes_outside_the_school'){$sql .= 'regulation_for_participation_in_classes_outside_the_school = 1';}
        if($tag_id_passed_from_previous_page == 'regulation_entry_to_restaurants'){$sql .= 'regulation_entry_to_restaurants = 1';}
        if($tag_id_passed_from_previous_page == 'restrictions_on_entry_to_movie_theaters_and_theaters'){$sql .= 'restrictions_on_entry_to_movie_theaters_and_theaters = 1';}
        if($tag_id_passed_from_previous_page == 'no_social_gathering'){$sql .= 'no_social_gathering = 1';}
        if($tag_id_passed_from_previous_page == 'forced_entry_into_club_activities'){$sql .= 'forced_entry_into_club_activities = 1';}
        if($tag_id_passed_from_previous_page == 'regulation_for_recruiting_money_outside_the_school'){$sql .= 'regulation_for_recruiting_money_outside_the_school = 1';}
        if($tag_id_passed_from_previous_page == 'regulation_on_sales_of_goods_outside_the_school'){$sql .= 'regulation_on_sales_of_goods_outside_the_school = 1';}
        if($tag_id_passed_from_previous_page == 'regulations_on_membership_in_organizations_outside_the_school'){$sql .= 'regulations_on_membership_in_organizations_outside_the_school = 1';}
        
        $sql .= ' ORDER BY school_displayorder asc';
        $stmt = $dbh->query($sql); // SQLステートメントを実行し、結果を変数に格納

        // 正規表現を使った抽出。1つのspanの中に複数のタグがあった場合、2つ目以降を取得できない問題あり
        // // foreach文で配列の中身を一行ずつ出力
        // foreach ($stmt as $row) {
          
        //   // $pattern = '#<span class=".*?no_trim.*?">(.+?)<\/span>#'; // 正規表現を記述。デリミタに「#」を利用。
        //   $pattern = '#<span class=".*?'.$tag_id_passed_from_previous_page.'*?">(.+?)<\/span>#'; // 正規表現を記述。デリミタに「#」を利用。
        //   $subject = $row['school_rules']; // 検索対象
        //   preg_match_all( $pattern, $subject, $search_results_for_school_rules);
        //   if (isset($search_results_for_school_rules[0][0])) {
        //     echo '<div class ="tag_item_each_area">';
        //     echo "<a href='http://schoolrulesdb.com/item.php?school_id=".$row['school_id']."'>";
        //     echo $search_results_for_school_rules[0][0];
        //     echo "（".$row['school_name']."）";
        //     echo "</a>\n";
        //     // echo "<a href='http://schoolrulesdb.com/item.php?school_id=".$row['school_id']."'>".$row['school_name']."</a>\n";
        //     echo "</div>\n";
        //   }
        // }
        foreach ($stmt as $row) {
          $content = mb_convert_encoding($row['school_rules'], 'HTML-ENTITIES', 'UTF-8');
          $dom = new DOMDocument();
          $dom->loadHTML($content);
          $xpath = new DOMXPath($dom);
          $vals=array_map(function($x){
            return $x->nodeValue;
          },iterator_to_array($xpath->query('//span[contains(@class, "' . $tag_id_passed_from_previous_page .'")]')));

          echo '<div class ="tag_item_each_area">';
          echo "<a href='http://schoolrulesdb.com/item.php?school_id=".$row['school_id']."'>";
          echo '<div class ="tag_item_each_area_school_name">'.$row['school_name']."</div>\n";
          foreach ($vals as $each_school_rule_that_matches_the_tag) {
            $vals_end = end ($vals);
            if ($each_school_rule_that_matches_the_tag === $vals_end) { //配列の最初だったら
              echo $each_school_rule_that_matches_the_tag;
            } else {
              echo $each_school_rule_that_matches_the_tag;
              echo " | ";
            }
          }
          echo "</a>";
          // echo "<a href='http://schoolrulesdb.com/item.php?school_id=".$row['school_id']."'>".$row['school_name']."</a>\n";
          echo "</div>\n";

        }


      } catch (PDOException $e) {
      exit('データベースに接続できませんでした。' . $e->getMessage());
      }
    ?>
  </div>
</div>
<?php include("footer.php"); ?> <!-- Footerの読み込み -->
</body>
</html>