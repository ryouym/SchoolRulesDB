<?php
$description = "校則を検索できるデータベースサイト。学校名から校則を検索したり、「スカート丈規制」「眉毛加工禁止」「下着規制」などの校則のキーワードから各校を横串で検索できます。";
$title = "School Rules Database（スクールルールズデータベース） | 検索結果";
require("header.php");
?>
<body>
<?php include("header_bar.php"); ?> <!-- ヘッダーバーファイルの読み込み -->
  <div class="breadcrumb_trail_area"><p><a href="index.php">ホーム</a> > 校則比較表果</p></div>
  <div class="school_list_area">
    <?php
      //エラーメッセージの表示
      ini_set("display_errors", "On");

      require_once('db_connect.php');
      try {
        //データベースに接続
        $dbh = db_connect();

        //例外処理。PDOのエラーレポートを表示
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //データベースからデータを取得
        $sql = "SELECT * FROM schoolrules_table WHERE
          school_id IN ('C112210002280', 'C112210002299' , 'C112210002306' , 'C112210002315' , 'C112210002324' , 'C112210002333' , 'C112210002342' , 'C112210002351' , 'C112210002360' , 'C112210003733')";
        $stmt = $dbh->query($sql);

        $tag_id_array = array("vague_expressions_such_as_typical_of_high_school_students", "uniform", "uniform_distinction_between_men_and_women", "dress-down_prohibited", "uniform_processing_prohibition", "skirt_length_regulation", "no_wearing_of_pants_under_skirts", "no_saggy_pants", "no_wearing_of_warm_clothes_in_class", "no_wearing_of_warm_clothes_during_the_ceremony", "mixed_summer_and_winter_uniforms_prohibited", "obligation_to_wear_blazer_at_the_beginning_and_end_of_class", "designated_jacket", "designated_vest", "vest_regulation", "designated_shirt", "shirt_regulation", "designated_neckties", "designated_ribbon", "designated_scarf", "scarf_regulation", "designated_cardigan", "cardigan_regulation", "cardigan_prohibited", "designated_sweater", "sweater_prohibited", "sweater_regulation", "polo_shirts_prohibited", "designated_polo_shirts", "polo_shirts_regulation", "blouse_prohibited", "hoodie_prohibited", "sweatshirt_prohibited", "designated_jersey", "jersey_prohibited", "turtleneck_prohibited", "piste_prohibited", "scarf_prohibited", "designated_coat", "coat_regulation", "raincoat_regulation", "no_wearing_of_winter_clothes_indoors", "designated_pants", "pants_regulation", "designated_skirt", "skirt_regulation", "designated_socks", "socks_regulation", "tights_regulation", "ankle_socks_prohibited", "over_the_knee_socks_prohibited", "leggings_prohibited", "leg_warmers_prohibited", "loose_socks_prohibited", "designated_belt", "belt_regulation", "suspenders_prohibited", "underwear_regulation", "designated_gym_uniform", "designated_gym_shoes", "designated_swimsuits", "hat_prohibited", "designated_hat", "designated_bag", "bag_regulation", "no_processing_of_bags", "no_sunglasses", "glove_regulation", "face_mask_regulation", "shoe_regulation", "designated_sports_shoes", "designated_indoor_shoes", "indoor_shoes_regulation", "heel_prohibited", "geta_prohibited", "sandals_prohibited", "no_processing_of_shoes", "ornament_prohibited", "ornament_regulation", "ring_prohibited", "earring_prohibited", "piercings_prohibited", "piercing_hole_prohibited", "necklace_prohibited", "bracelet_prohibited", "no_hair_processing", "no_hair_dyeing", "no_perm", "no_hair_iron", "no_french_braid", "no_trim", "no_shaved_sides", "no_mohawk", "hair_length_restriction", "tie_long_hair", "no_long_hair_for_men", "no_ponytails", "no_eccentric_hairstyles", "no_hairstyles_with_extremely_different_lengths_in_some_parts", "no_hair_extensions", "no_wigs", "no_hair_accessories", "hair_clip_regulation", "hair_elastic_regulation", "forced_to_dye_hair_black", "submit_a_certificate_of_natural_hair", "no_beard", "makeup_prohibited", "cosmetic_regulation", "mascara_prohibited", "eyebrow_processing_prohibited", "lipstick_prohibited", "colored_lip_balm_prohibited", "lip_balm_regulation", "colored_contacts_prohibited", "false_eyelashes_prohibited", "no_fake_nails", "manicure_prohibited", "manicure_regulation", "pedicures_prohibited", "tattoos_prohibited", "eye_putti_prohibited", "perfume_prohibited", "prohibition_of_bicycle_commuting_to_school", "prohibition_of_motorcycle_commuting_to_school", "no_driving_to_school", "prohibition_of_obtaining_a_drivers_license", "restrictions_on_car_pickups_and_drop_offs", "travel_regulation", "prohibition_of_staying_at_a_friends_house", "prohibition_ofholding_meetings_outside_the_school", "regulation_for_holding_meetings_outside_the_school", "regulation_for_participation_in_classes_outside_the_school", "regulation_entry_to_restaurants", "no_shopping_or_eating_on_the_way_to_and_from_school", "no_detours_on_the_way_to_and_from_school", "restrictions_on_entry_to_movie_theaters_and_theaters", "no_social_gathering", "forced_entry_into_club_activities", "regulation_for_recruiting_money_outside_the_school", "regulation_on_sales_of_goods_outside_the_school", "regulations_on_membership_in_organizations_outside_the_school", "sunscreen_regulation", "hand_cream_regulation", "deodorant_regulation", "prohibit_the_use_of_elevators_in_the_school", "no_loitering_on_school_grounds", "no_entry_to_other_classrooms", "regulation_of_gender_relations", "eating_and_drinking_regulation", "no_eating_or_drinking_during_class", "no_eating_or_drinking_in_the_classroom", "no_part_time_jobs", "no_games_in_the_school", "confiscation_of_belongings", "no_cup_noodles", "no_portable_music_players", "no_comics", "no_magazines", "free_time_should_be_spent_studying_in_the_library", "no_electric_appliances", "outlet_use_prohibited", "prohibit_the_use_of_cell_phones");
        

        // 列タイトルを表示
        echo "<table>";
        echo "<tr>
        <td></td><td>「高校生らしい」など曖昧な表現</td><td>制服あり</td><td>男女の制服区別</td><td>着崩し禁止</td><td>制服加工禁止</td><td>スカート丈規制</td><td>スカートの下のズボン着用禁止</td><td>腰ばき禁止</td><td>授業中の防寒着着用禁止</td><td>式典中の防寒着着用禁止</td><td>夏服・冬服の混合着用禁止</td><td>授業開始・終了時のブレザー着用義務</td><td>指定ブレザー・ジャケット</td><td>指定ベスト</td><td>ベスト規制</td><td>指定シャツ</td><td>シャツ規制</td><td>指定ネクタイ</td><td>指定リボン</td><td>指定スカーフ</td><td>スカーフ規制</td><td>指定カーディガン</td><td>カーディガン規制</td><td>カーディガン禁止</td><td>指定セーター</td><td>セーター禁止</td><td>セーター規制</td><td>ポロシャツ禁止</td><td>指定ポロシャツ</td><td>ポロシャツ規制</td><td>ブラウス禁止</td><td>パーカー禁止</td><td>スウェット禁止</td><td>指定ジャージ</td><td>ジャージ禁止</td><td>タートルネック禁止</td><td>ピステ禁止</td><td>マフラー規制</td><td>指定コート</td><td>コート規制</td><td>レインコート規制</td><td>屋内での防寒具着用禁止</td><td>指定ズボン</td><td>ズボン規制</td><td>指定スカート</td><td>スカート規制</td><td>指定靴下</td><td>靴下規制</td><td>タイツ・ストッキング規制</td><td>アンクルソックス禁止</td><td>ニーハイソックス禁止</td><td>レギンス禁止</td><td>レッグウォーマー禁止</td><td>ルーズソックス禁止</td><td>指定ベルト</td><td>ベルト規制</td><td>サスペンダー禁止</td><td>下着規制</td><td>指定体操服</td><td>指定体操靴</td><td>指定水着</td><td>帽子禁止</td><td>帽子規制</td><td>指定鞄</td><td>鞄規制</td><td>鞄の加工禁止</td><td>サングラス禁止</td><td>手袋規制</td><td>マスク規制</td><td>靴規制</td><td>指定運動靴</td><td>指定上履き</td><td>上履き規制</td><td>ヒール禁止</td><td>下駄禁止</td><td>サンダル禁止</td><td>靴の加工禁止</td><td>装飾品禁止</td><td>装飾品規制</td><td>指輪禁止</td><td>イヤリング禁止</td><td>ピアス禁止</td><td>ピアス穴禁止</td><td>ネックレス禁止</td><td>ブレスレット禁止</td><td>頭髪加工禁止</td><td>髪染め禁止</td><td>パーマ禁止</td><td>ヘアアイロン禁止</td><td>編み込み禁止</td><td>剃りこみ禁止</td><td>ツーブロック禁止</td><td>モヒカン禁止</td><td>髪の長さ規制</td><td>長い髪は結ぶ</td><td>男性の長髪禁止</td><td>ポニーテール禁止</td><td>奇抜な髪形禁止</td><td>一部だけ極端に長さの違う髪型禁止</td><td>エクステンション禁止</td><td>かつら禁止</td><td>ヘアアクセサリー禁止</td><td>髪留め規制</td><td>ヘアゴム規制</td><td>黒染め強要</td><td>地毛証明書提出</td><td>ひげ禁止</td><td>化粧禁止</td><td>化粧規制</td><td>マスカラ禁止</td><td>眉毛加工禁止</td><td>口紅禁止</td><td>色付きリップ禁止</td><td>リップクリーム規制</td><td>カラーコンタクト禁止</td><td>つけまつげ禁止</td><td>つけ爪禁止</td><td>マニキュア禁止</td><td>マニキュア規制</td><td>ペディキュア禁止</td><td>タトゥー禁止</td><td>アイプチ禁止</td><td>香水禁止</td><td>自転車通学禁止</td><td>バイク通学禁止</td><td>自動車通学禁止</td><td>運転免許証の取得禁止</td><td>車送迎規制</td><td>旅行規制</td><td>友人宅の宿泊禁止</td><td>校外の集会開催禁止</td><td>校外の集会開催規制</td><td>校外の講習参加禁止</td><td>飲食店への入店規制</td><td>登下校時の買い食い禁止</td><td>登下校時の寄り道禁止</td><td>映画館・劇場への入場規制</td><td>懇親会禁止</td><td>部活の強制入部</td><td>校外の金品募集規制</td><td>校外の物品販売規制</td><td>校外の団体加入規制</td><td>日焼け止め規制</td><td>ハンドクリーム規制</td><td>制汗剤規制</td><td>校内エレベーター使用禁止</td><td>校内を歩き回ること禁止</td><td>他クラス入室禁止</td><td>男女交際規制</td><td>飲食規制</td><td>授業中の飲食禁止</td><td>教室内飲食禁止</td><td>アルバイト禁止</td><td>校内のゲーム禁止</td><td>所持品の没収</td><td>カップ麺禁止</td><td>携帯音楽プレーヤー禁止</td><td>漫画禁止</td><td>雑誌禁止</td><td>空き時間は図書館で学習すること</td><td>家電製品禁止</td><td>コンセント使用禁止</td><td>携帯使用禁止</td>
        </tr>";
        // echo "<td>".array_search($each_tag_id, $tag_id_array)."</td>";

        //学校のループ          
        foreach ($stmt as $row) {
          $content = mb_convert_encoding($row['school_rules'], 'HTML-ENTITIES', 'UTF-8');
          $dom = new DOMDocument();
          $dom->loadHTML($content);
          $xpath = new DOMXPath($dom);

          // 学校名の表示
          echo "<tr>";
          echo "<td>".$row['school_name']."</td>";

          // タグIDのループ
          foreach($tag_id_array as $each_tag_id) {
            $vals=array_map(function($x){
              return $x->nodeValue;
            },iterator_to_array($xpath->query('//span[contains(@class, "' . $each_tag_id .'")]')));

            // 1つの学校で1つのタグIDの中で規制をループで抽出
            echo "<td>";
            foreach ($vals as $each_school_rule_that_matches_the_tag) {
              $vals_end = end ($vals);
              if ($each_school_rule_that_matches_the_tag === $vals_end) { //配列の最初だったら
                echo $each_school_rule_that_matches_the_tag;
              } else {
                echo $each_school_rule_that_matches_the_tag;
                echo " | ";
              }              
            }
            echo "</td>";
          }
          echo "</tr>";
        }
        echo "</table>";


        echo "test1310";


      } catch (PDOException $e) {
      exit('データベースに接続できませんでした。' . $e->getMessage());
      }
    ?>
</div>
<?php include("footer.php"); ?> <!-- Footerの読み込み -->
</body>
</html>