    	<?php
          global $maru2;
          $maru2 = '<img src="img/2maru.png" class="kigou">';
          global $maru;
          $maru = '<img src="img/1maru.png" class="kigou">';
          global $sank;
          $sank = '<img src="img/triangle.png" class="kigou">';
          global $batu;
          $batu = '<img src="img/batu.png" class="kigou">';
          
          $name = $v['name'];
          $url = $v['url'];
          $img1 = $v['img1'];
          $sougou = $v['sougou'];
          $sougou_g = $v['sougou_g'];
          if ($sougou_g){
            $sougou_gazo = '<img src="img/rank'. $sougou_g .'.png">';
          }else{
            $sougou_gazo = '';
          }
          $yakutei = $v['yakutei'];
          //検索用
          $ktousi0 = $v['ktousi0']; 
          $ktousi1 = $v['ktousi1']; 
          $ktousi2 = $v['ktousi2'];
          $ktousi3 = $v['ktousi3'];
          $ktousi4 = $v['ktousi4'];
          $ktousi5 = $v['ktousi5'];
          $ktousi6 = $v['ktousi6'];
          $ktousi7 = $v['ktousi7'];
          $kgaikoku0 = $v['kgaikoku0']; 
          $kgaikoku1 = $v['kgaikoku1']; 
          $kgaikoku2 = $v['kgaikoku2'];
          $kgaikoku3 = $v['kgaikoku3'];
          $kkoda0 = $v['kkoda0']; 
          $kkoda1 = $v['kkoda1']; 
          $kkoda2 = $v['kkoda2'];
          $kkoda3 = $v['kkoda3'];
          $kkoda4 = $v['kkoda4'];
          $kkoda5 = $v['kkoda5'];
          $kkoda6 = $v['kkoda6'];
          $kkoda7 = $v['kkoda7'];
          
          $tousi1 = $v['tousi1']; //先物・オプション
          if($tousi1 === "2"){
            $tousi1_txt = $maru.'<span class="hyo_txt">あり</span>';
          }elseif($tousi1 === "4"){
            $tousi1_txt = $batu.'<span class="hyo_txt">なし</span>';
          }
          $tousi2 = $v['tousi2']; //ミニ株
          if($tousi2 === "2"){
            $tousi2_txt = $maru.'<span class="hyo_txt">あり</span>';
          }elseif($tousi2 === "4"){
            $tousi2_txt = $batu.'<span class="hyo_txt">なし</span>';
          }
          $tousi3 = $v['tousi3']; //投資信託
          if($tousi3 === "1"){
            $tousi3_txt = $maru2.'<span class="hyo_txt">おすすめ</span>';
          }elseif($tousi3 === "2"){
            $tousi3_txt = $maru.'<span class="hyo_txt">あり</span>';
          }elseif($tousi3 === "3"){
            $tousi3_txt = $sank.'<span class="hyo_txt">少ない</span>';
          }elseif($tousi3 === "4"){
            $tousi3_txt = $batu.'<span class="hyo_txt">なし</span>';
          }
          $tousi4 = $v['tousi4']; //IPO
          if($tousi4 === "1"){
            $tousi4_txt = $maru2.'<span class="hyo_txt">おすすめ</span>';
          }elseif($tousi4 === "2"){
            $tousi4_txt = $maru.'<span class="hyo_txt">あり</span>';
          }elseif($tousi4 === "3"){
            $tousi4_txt = $sank.'<span class="hyo_txt">少ない</span>';
          }elseif($tousi4 === "4"){
            $tousi4_txt = $batu.'<span class="hyo_txt">なし</span>';
          }
          $tousi5 = $v['tousi5']; //日経225ミニ
          if($tousi5 === "2"){
            $tousi5_txt = $maru.'<span class="hyo_txt">あり</span>';
          }elseif($tousi5 === "4"){
            $tousi5_txt = $batu.'<span class="hyo_txt">なし</span>';
          }
          $tousi6 = $v['tousi6']; //信用取引
          if($tousi6 === "2"){
            $tousi6_txt = $maru.'<span class="hyo_txt">あり</span>';
          }elseif($tousi6 === "4"){
            $tousi6_txt = $batu.'<span class="hyo_txt">なし</span>';
          }
          $tousi7 = $v['tousi7']; //夜間取引
          if($tousi7 === "2"){
            $tousi7_txt = $maru.'<span class="hyo_txt">あり</span>';
          }elseif($tousi7 === "4"){
            $tousi7_txt = $batu.'<span class="hyo_txt">なし</span>';
          }
          $tousi8 = $v['tousi8']; //NISA
          if($tousi8 === "1"){
            $tousi8_txt = $maru2.'<span class="hyo_txt">おすすめ</span>';
          }elseif($tousi8 === "2"){
            $tousi8_txt = $maru.'<span class="hyo_txt">あり</span>';
          }elseif($tousi8 === "3"){
            $tousi8_txt = $sank.'<span class="hyo_txt">少ない</span>';
          }elseif($tousi8 === "4"){
            $tousi8_txt = $batu.'<span class="hyo_txt">なし</span>';
          }
          $gaikoku1 = $v['gaikoku1']; //米国株
          if($gaikoku1 === "2"){
            $gaikoku1_txt = $maru.'<span class="hyo_txt">あり</span>';
          }elseif($gaikoku1 === "4"){
            $gaikoku1_txt = $batu.'<span class="hyo_txt">なし</span>';
          }
          $gaikoku2 = $v['gaikoku2']; //中国株
          if($gaikoku2 === "2"){
            $gaikoku2_txt = $maru.'<span class="hyo_txt">あり</span>';
          }elseif($gaikoku2 === "4"){
            $gaikoku2_txt = $batu.'<span class="hyo_txt">なし</span>';
          }
          $gaikoku3 = $v['gaikoku3']; //韓国株
          if($gaikoku3 === "2"){
            $gaikoku3_txt = $maru.'<span class="hyo_txt">あり</span>';
          }elseif($gaikoku3 === "4"){
            $gaikoku3_txt = $batu.'<span class="hyo_txt">なし</span>';
          }
          $honsu = $v['honsu']; // 投資信託取扱本数
          $ipoji = $v['ipoji']; //IPO取扱実績
          $ipoji1 = $v['ipoji_ken']; //IPO取扱実績
          $ipoji_ken = number_format((int)$ipoji1);
          $koda1 = $v['koda1']; //初心者
          if($koda1 === "1"){
            $koda1_txt = $maru2.'<span class="hyo_txt">非常に<span class="nosp"><br></span>おすすめ</span>';
          }elseif($koda1 === "2"){
            $koda1_txt = $maru.'<span class="hyo_txt">おすすめ</span>';
          }elseif($koda1 === "3"){
            $koda1_txt = $sank.'<span class="hyo_txt">普通</span>';
          }elseif($koda1 === "4"){
            $koda1_txt = $batu.'<span class="hyo_txt">微妙</span>';
          }
          $koda2 = $v['koda2']; //手数料
          if($koda2 === "1"){
            $koda2_txt = $maru2.'<span class="hyo_txt">非常に<span class="nosp"><br></span>安い</span>';
          }elseif($koda2 === "2"){
            $koda2_txt = $maru.'<span class="hyo_txt">安い</span>';
          }elseif($koda2 === "3"){
            $koda2_txt = $sank.'<span class="hyo_txt">普通</span>';
          }elseif($koda2 === "4"){
            $koda2_txt = $batu.'<span class="hyo_txt">高い</span>';
          }
          $koda3 = $v['koda3']; //サポートが充実
          if($koda3 === "1"){
            $koda3_txt = $maru2.'<span class="hyo_txt">非常に<span class="nosp"><br></span>おすすめ</span>';
          }elseif($koda3 === "2"){
            $koda3_txt = $maru.'<span class="hyo_txt">おすすめ</span>';
          }elseif($koda3 === "3"){
            $koda3_txt = $sank.'<span class="hyo_txt">普通</span>';
          }elseif($koda3 === "4"){
            $koda3_txt = $batu.'<span class="hyo_txt">微妙</span>';
          }
          $koda4 = $v['koda4']; //NISA口座におすすめ
          if($koda4 === "1"){
            $koda4_txt = $maru2.'<span class="hyo_txt">非常に<span class="nosp"><br></span>おすすめ</span>';
          }elseif($koda4 === "2"){
            $koda4_txt = $maru.'<span class="hyo_txt">おすすめ</span>';
          }elseif($koda4 === "4"){
            $koda4_txt = $batu.'<span class="hyo_txt">微妙</span>';
          }
          $koda5 = $v['koda5']; //ツール
          if($koda5 === "1"){
            $koda5_txt = $maru2.'<span class="hyo_txt">非常に<span class="nosp"><br></span>優秀</span>';
          }elseif($koda5 === "2"){
            $koda5_txt = $maru.'<span class="hyo_txt">優秀</span>';
          }elseif($koda5 === "3"){
            $koda5_txt = $sank.'<span class="hyo_txt">普通</span>';
          }elseif($koda5 === "4"){
            $koda5_txt = $batu.'<span class="hyo_txt">微妙</span>';
          }
          $koda6 = $v['koda6']; //投資情報量が豊富
          if($koda6 === "2"){
            $koda6_txt = $maru.'<span class="hyo_txt">あり</span>';
          }elseif($koda6 === "4"){
            $koda6_txt = $batu.'<span class="hyo_txt">なし</span>';
          }
          $koda7 = $v['koda7']; //キャンペーン情報
          if($koda7 === "2"){
            $koda7_txt = $maru.'<span class="hyo_txt">あり</span>';
          }elseif($koda7 === "4"){
            $koda7_txt = $batu.'<span class="hyo_txt">なし</span>';
          }
          $t10 = $v['t10'];
          $t20 = $v['t20'];
          $t30 = $v['t30'];
          $t50 = $v['t50'];
          $t100 = $v['t100'];
          $t300 = $v['t300'];
          $t500 = $v['t500'];
          $n10 = $v['n10'];
          $n20 = $v['n20'];
          $n30 = $v['n30'];
          $n50 = $v['n50'];
          $n100 = $v['n100'];
          $n300 = $v['n300'];
          $n500 = $v['n500'];
          $t10_ki = $v['t10_ki'];
          $t20_ki = $v['t20_ki'];
          $t30_ki = $v['t30_ki'];
          $t50_ki = $v['t50_ki'];
          $t100_ki = $v['t100_ki'];
          $t300_ki = $v['t300_ki'];
          $t500_ki = $v['t500_ki'];
          $n10_ki = $v['n10_ki'];
          $n20_ki = $v['n20_ki'];
          $n30_ki = $v['n30_ki'];
          $n50_ki = $v['n50_ki'];
          $n100_ki = $v['n100_ki'];
          $n300_ki = $v['n300_ki'];
          $n500_ki = $v['n500_ki'];
                   
          $canp = $v['canp'];
          $point = $v['point'];
?>