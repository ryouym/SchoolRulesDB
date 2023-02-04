<?php
$description = "校則を検索できるデータベースサイト。学校名から校則を検索したり、「スカート丈規制」「眉毛加工禁止」「下着規制」などの校則のキーワードから各校を横串で検索できます。";
$title = "School Rules Database（スクールルールズデータベース） | 校則の内容から探す";
require("header.php");
?>
<body>
<?php include("header_bar.php"); ?> <!-- ヘッダーバーファイルの読み込み -->
<div class="wrapper">
  <div class="breadcrumb_trail_area"><p><a href="index.php">ホーム</a> > 校則の内容から探す</p></div>
  <h1>校則の内容から探す</h1>
  <div class='school_list_city'>服装</div>
  <div class='school_list_rule_keywords_erea'>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=uniform">制服あり</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=uniform_distinction_between_men_and_women">男女の制服区別</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=dress_down_prohibited">着崩し禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=uniform_processing_prohibition">制服加工禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=skirt_length_regulation">スカート丈規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_wearing_of_pants_under_skirts">スカートの下のズボン着用禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_saggy_pants">腰ばき禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_wearing_of_warm_clothes_in_class">授業中の防寒着着用禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_wearing_of_warm_clothes_during_the_ceremony">式典中の防寒着着用禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_jacket">指定ブレザー・ジャケット</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_vest">指定ベスト</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=vest_regulation">ベスト規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_shirt">指定シャツ</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=shirt_regulation">シャツ規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_neckties">指定ネクタイ</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_ribbon">指定リボン</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_scarf">指定スカーフ</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_cardigan">指定カーディガン</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=cardigan_regulation">カーディガン規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=cardigan_prohibited">カーディガン禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_sweater">指定セーター</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=sweater_prohibited">セーター禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=sweater_regulation">セーター規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_polo_shirts">指定ポロシャツ</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=polo_shirts_regulation">ポロシャツ規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=hoodie_prohibited">パーカー禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=sweatshirt_prohibited">スウェット禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=jersey_prohibited">ジャージ禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=scarf_prohibited">マフラー規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_coat">指定コート</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=coat_regulation">コート規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=raincoat_regulation">レインコート規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_wearing_of_winter_clothes_indoors">屋内での防寒具着用禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_pants">指定ズボン</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_skirt">指定スカート</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_socks">指定靴下</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=socks_regulation">靴下規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=tights_regulation">タイツ・ストッキング規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=ankle_socks_prohibited">アンクルソックス禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=over_the_knee_socks_prohibited">ニーハイソックス禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=leggings_prohibited">レギンス禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=leg_warmers_prohibited">レッグウォーマー禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=loose_socks_prohibited">ルーズソックス禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=belt_regulation">ベルト規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=suspenders_prohibited">サスペンダー禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=underwear_regulation">下着規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_gym_uniform">指定体操服</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_gym_shoes">指定体操靴</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_bag">指定鞄</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=bag_regulation">鞄規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_processing_of_bags">鞄の加工禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=shoe_regulation">靴規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_sports_shoes">指定運動靴</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=designated_indoor_shoes">指定上履き</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=heel_prohibited">ヒール禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=geta_prohibited">下駄禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=sandals_prohibited">サンダル禁止</a></div>
  </div>
  <div class='school_list_city'>装飾品</div>
  <div class='school_list_rule_keywords_erea'>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=ornament_prohibited">装飾品禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=ornament_regulation">装飾品規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=ring_prohibited">指輪禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=earring_prohibited">イヤリング禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=piercings_prohibited">ピアス禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=necklace_prohibited">ネックレス禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=bracelet_prohibited">ブレスレット禁止</a></div>
  </div>
  <div class='school_list_city'>頭髪</div>
  <div class='school_list_rule_keywords_erea'>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_hair_processing">頭髪加工禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_hair_dyeing">髪染め禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_perm">パーマ禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_hair_iron">ヘアアイロン禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_french_braid">編み込み禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_trim">剃りこみ禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_shaved_sides">ツーブロック禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_mohawk">モヒカン禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=hair_length_restriction">髪の長さ規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=tie_long_hair">長い髪は結ぶ</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_long_hair_for_men">男性の長髪禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_eccentric_hairstyles">奇抜な髪形禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_hairstyles_with_extremely_different_lengths_in_some_parts">一部だけ極端に長さの違う髪型禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_hair_extensions">エクステンション禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_wigs">かつら禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=forced_to_dye_hair_black">黒染め強要</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=submit_a_certificate_of_natural_hair">地毛証明書提出</a></div>
  </div>
  <div class='school_list_city'>化粧</div>
  <div class='school_list_rule_keywords_erea'>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=makeup_prohibited">化粧禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=mascara_prohibited">マスカラ禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=eyebrow_processing_prohibited">眉毛加工禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=lipstick_prohibited">口紅禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=colored_lip_balm_prohibited">色付きリップ禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=colored_contacts_prohibited">カラーコンタクト禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=false_eyelashes_prohibited">つけまつげ禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_fake_nails">つけ爪禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=manicure_prohibited">マニキュア禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=manicure_regulation">マニキュア規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=pedicures_prohibited">ペディキュア禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=tattoos_prohibited">タトゥー禁止</a></div>
  </div>
  <div class='school_list_city'>乗り物</div>
  <div class='school_list_rule_keywords_erea'>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=prohibition_of_motorcycle_commuting_to_school">バイク通学禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_driving_to_school">自動車通学禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=prohibition_of_obtaining_a_drivers_license">運転免許証の取得禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=regulation_for_holding_meetings_outside_the_school">スケボー・ローラースケート・キックボード等禁止</a></div>
  </div>
  <div class='school_list_city'>校外活動</div>
  <div class='school_list_rule_keywords_erea'>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=travel_regulation">旅行規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=regulation_for_holding_meetings_outside_the_school">校外の集会開催規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=forced_entry_into_club_activities">部活の強制入部</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=regulation_for_recruiting_money_outside_the_school">校外の金品募集規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=regulations_on_membership_in_organizations_outside_the_school">校外の団体加入規制</a></div>
  </div>
  <div class='school_list_city'>その他</div>
  <div class='school_list_rule_keywords_erea'>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=eating_and_drinking_regulation">飲食規制</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_eating_or_drinking_during_class">授業中の飲食禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=no_part_time_jobs">アルバイト禁止</a></div>
    <div class='school_list_rule_keywords'><a href="http://schoolrulesdb.com/tag_item.php?tag_id=prohibit_the_use_of_cell_phones">携帯使用禁止</a></div>
  </div>
</div>

<?php include("footer.php"); ?> <!-- Footerの読み込み -->
</body>
</html>